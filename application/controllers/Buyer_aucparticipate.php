<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer_aucparticipate extends CI_Controller {

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

	if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
				$table = "cart_payment";
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active = array('user_email'=>$sess['sessi'], 'auction'=>true, 'payment_status'=>true);	
  	    $query = $this->Admin_model->getdatafromtable($table, $active);
			if(count($query)){
				foreach($query as $quer){
					$res = $this->Admin_model->get_singleauction_nd($quer->auction_id);
					
					if($res[0]->iauction_end < $time){
						//print_r($res);die;
						array_push($comauc,$res[0]);
						$highestvalue = $this->Admin_model->gethighestvalue($quer->auction_id);
						//print_r($highestvalue);die;
						//print_r($highestvalue[0]);die;
						if($highestvalue[0]['bidderusername'] == $sess['sessi']){
							$winner = explode('@',$highestvalue[0]['bidderusername']);
							$windata = "WON|".$quer->auction_id.'|'.$winner[0]."|".$highestvalue[0]['bidvalue'];
							array_push($worl, $windata);
						}else{
							
							$windata =  "LOST|".$quer->auction_id.'|'.$winner[0]."|".$highestvalue[0]['bidvalue'];
							array_push($worl,$windata);
						}
					}
					$active2 = array('bidderusername'=>$sess['sessi'], 'sauctionid'=>$quer->auction_id);
				$allbiddata = $this->Admin_model->getdatafromtable('biddingdata', $active2);
				array_push($mybidsum, $allbiddata);
				}
				
			}

			$data['mycomauc']= $comauc;
			$data['worl']= $worl;
			$data['mybid']= $mybidsum;
		
		$this->load->view('buyer/header',$sess);
		$this->load->view('buyer/aucparticipate',$data);
		$this->load->view('buyer/footer');
			}
	}
}
