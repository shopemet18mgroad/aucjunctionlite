<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_addseller extends CI_Controller {

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
		
		$this->load->view('admin/header',$sess);

		$this->load->view('admin/addseller');
		$this->load->view('admin/footer');

	}
	}



	 public function validate_buyerid11(){
		$dat = urldecode($this->uri->segment(3));
		$check_db = array('iemailid' => $dat);
		$this->load->model('Admin_model');
			  if($this->Admin_model->check('sellerdetails', $check_db)){
				  echo "BYE";
			  }else{
				  echo "HI";
			  }
}
	 
		 public function validate_aadharnumber(){
		$dat = urldecode($this->uri->segment(3));
		$check_db = array('iadharnumber' => $dat);
		$this->load->model('Admin_model');
			  if($this->Admin_model->check('sellerdetails', $check_db)){
				  echo "BYE";
			  }else{
				  echo "HI";
			  }
} 
	 
	 
	 
			  }