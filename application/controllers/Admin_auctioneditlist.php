<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_auctioneditlist extends CI_Controller {

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
			header('location: '.base_url().'login/index/'.$datainserr);
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
		
		
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/auctioneditlist',$adac);
		$this->load->view('admin/footer');
		
		
		
		
	}	
	}
	public function seller_delete(){
		
		
 $iauctionid = urldecode(str_ireplace('-','/',$this->uri->segment(3)));		




$this->load->model('Admin_model');


$adaction2 = array('iauctionid'=>$iauctionid );


$query = $this->Admin_model->delete_data('auction',$adaction2);

$query = $this->Admin_model->delete_data('addlot',$adaction2);
$this->load->helper('url');
$this->load->library('session');


if($iauctionid){
header('location: '.base_url().'Admin_auctioneditlist/index/');
}else{
echo "BYE";
}

}	

	
	
	
	
	
	
	
	
	
}
