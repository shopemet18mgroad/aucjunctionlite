<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_aucparticipate extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		
		 $this->load->model('Admin_model');
		$this->load->library('session');
		date_default_timezone_set('Asia/Kolkata');
		//initaliazing the current time 
		$time =  Date('Y-m-d H:i:s');
		$comauc = array();
		$worl = array();
		$mybidsum = array();
		$cart_payments_approval = array();
	if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index/'.$datainserr);
			die;
			}else{
				$table = "auction";
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active = array('iemailid'=>$sess['sessi'], 'aoption'=>true, 'iauction_end <'=>$time);	
  	    $query = $this->Admin_model->getdatafromtable($table, $active);
		  //print_r($query);die;
			if(count($query)){
				foreach($query as $quer){
					$res = $this->Admin_model->get_singleauction_nd($quer->iauctionid);
					array_push($cart_payments_approval,$quer);
					if($res[0]->iauction_end < $time){
						array_push($comauc,$res[0]);
						$highestvalue = $this->Admin_model->gethighestvalue($quer->iauctionid);
						//print_r($highestvalue[0]);die;
							if(count($highestvalue) && $highestvalue[0]['bidderusername'] != null){
								if($highestvalue[0]['bidderusername'] == $sess['sessi']){
								$winner = explode('@',$highestvalue[0]['bidderusername']);
								$windata = "WON|".$quer->iauctionid.'|'.$winner[0]."|".$highestvalue[0]['bidvalue'];
								array_push($worl, $windata);
							}else{
								$winner = explode('@',$highestvalue[0]['bidderusername']);
								$windata =  "LOST|".$quer->iauctionid.'|'.$winner[0]."|".$highestvalue[0]['bidvalue'];
								array_push($worl,$windata);
							}
						}else{
							$windata =  "LOST|".$quer->iauctionid."|NO Winner|0";
								array_push($worl,$windata);
						}
						
					}
					$active2 = array('sauctionid'=>$quer->iauctionid);
				$allbiddata = $this->Admin_model->getdatafromtable('biddingdata', $active2);
				array_push($mybidsum, $allbiddata);
				}
				
			}

			$data['mycomauc']= $comauc;
			$data['worl']= $worl;
			$data['mybid']= $mybidsum;
			$data['cart_pay']= $cart_payments_approval;
		$fstatus['aucforf'] = true;
		$this->load->view('seller/header',$sess);
		$this->load->view('seller/aucparticipate',$data);
		$this->load->view('seller/footer',$fstatus);
			}
	}
}
