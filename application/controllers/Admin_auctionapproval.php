<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_auctionapproval extends CI_Controller {

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
		
		
	if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$this->load->model('Admin_model');
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		
		$active = array('aname'=>$sess['sessi']);

		$this->load->model('Admin_model');
		$this->load->library('session');
		

		
		
		$aoption = array('aoption'=>false);
		
	$query = $this->Admin_model->getdatafromtable('auction',$aoption);
		
		$adac['data'] = $query;
		//print_r($adac['data']); die;
				
		$this->load->view('admin/header',$sess);	
		$this->load->view('admin/auctionapproval',$adac);
		$this->load->view('admin/footer');
		
		
		
		
	}	
	}
	
	
	
	
	
public function seller_delete(){
	
	$this->load->model('Admin_model');
$iauctionid = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
//print_r($iauctionid);die;
$adaction2 = array('iauctionid'=>$iauctionid);

$query = $this->Admin_model->delete_data('addlot',$adaction2);
$query = $this->Admin_model->delete_data('auction',$adaction2);
$this->load->helper('url');
$this->load->library('session');


if($iauctionid){
header('location: '.base_url().'Admin_auctionapproval/index/');
}else{
echo "BYE";
}

}


	public function sellerapprove(){
		
		 $iauctionid = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
         

		$retriveval = array('iauctionid'=>$iauctionid);
		
		
		
		$this->load->model('Admin_model');
		$app= array('aoption'=>true);
		$query = $this->Admin_model->update_custom('auction', $app, $retriveval,$retriveval);
		if($retriveval){
			header('location: '.base_url().'Admin_auctionapproval/index/'.urlencode($retriveval));
		}else{
			echo "BYE";
		}
	
	}

}
