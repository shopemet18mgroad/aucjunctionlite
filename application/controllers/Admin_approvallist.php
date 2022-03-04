<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_approvallist extends CI_Controller {

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
		

		
		
		
		$ioption = array('ioption'=>false);
		$this->load->library('session');
				$this->load->model('Admin_model');

		$query = $this->Admin_model->getdatafromtable('sellerdetails',$ioption);
		
		$adac['data']  =  $query;
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active = array('ausername'=>$sess['sessi']);
		
		
		
		
		$this->load->view('admin/header',$sess);	
		$this->load->view('admin/approvallist',$adac);
		$this->load->view('admin/footer');
	}
	}
	public function sellerapprove(){
		
		 $Sl_no = urldecode($this->uri->segment(3));
		 
		 


		$retriveval = array('Sl_no'=>$Sl_no);
		
		
		
		$this->load->model('Admin_model');
		$app= array('ioption'=>true);
		$query = $this->Admin_model->update_custom('sellerdetails', $app, $retriveval, $retriveval);
		if($retriveval){
			header('location: '.base_url().'Admin_approvallist/index/'.urlencode($retriveval));
		}else{
			echo "BYE";
		}
	
	}
		public function reject(){
		$this->load->helper('url');
		 $Sl_no = urldecode($this->uri->segment(3));


		$retriveval = array('Sl_no'=>$Sl_no);
		
		$data2 = array('ioption'=>2);
	
		$this->load->model('Admin_model');
		
		$status = $this->Admin_model->update_custom('sellerdetails',$data2,$retriveval,$retriveval);
		
		header('location: '.base_url().'Admin_approvallist/index/'.urlencode($retriveval));
		
		die;
	}

	
	
	
	
}
