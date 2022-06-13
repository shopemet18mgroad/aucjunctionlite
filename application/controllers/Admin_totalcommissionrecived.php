<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_totalcommissionrecived extends CI_Controller {

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
		$fromdate = $this->uri->segment(3);
		$todate = $this->uri->segment(4);
		$this->load->model('Admin_model');
		$this->load->library('session');
		if($fromdate != null && $todate != null){
			$query = $this->Admin_model->get_auctionlist_winner($fromdate, $todate);
			$adac['data'] = $query;
			$adac['from'] = $fromdate;
			$adac['to'] = $todate;
		}else{
			$adac['data'] = array();
			$adac['from'] = "NA";
			$adac['to'] = "NA";
		}
		
		//print_r($adac['data']); die;		
		$this->load->view('admin/header',$sess);	
		$this->load->view('admin/totalcommissionrecived',$adac);
		$this->load->view('admin/footer');
		
		
		
		
	}	
	}
	
	
	

}
