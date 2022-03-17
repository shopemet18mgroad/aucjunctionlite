<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_startauction_update extends CI_Controller {

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
		
		$this->load->view('admin/header',$sess);
		$this->load->library('fileupload');
		$this->load->helper(array('url','form','file','html'));
		$this->load->model('Admin_model');
	    $irole = $this->input->post('irole');
			$icategory = $this->input->post('icategory');
			$icontactperson = $this->input->post('icontactperson');
            $icompanyname = $this->input->post('icompanyname');
			$iauctionid = $this->input->post('iauctionid');
			$iauction_start = $this->input->post('iauction_start');
			$iauction_end = $this->input->post('iauction_end');
			$iemailid = $this->input->post('iemailid');
			$sl_ano = $this->input->post('sl_ano');
	
			$this->load->model('Admin_model');
			
			
			$data2 = array('irole'=>$irole,'icategory' => $icategory, 
			'icontactperson' => $icontactperson,'iemailid' => $iemailid,
			'iauctionid' => $iauctionid,'icompanyname' => $icompanyname,
			'iauction_start' => $iauction_start,'iauction_end' => $iauction_end);
		
		

			  
			  $datainserr = "Data Inserted Successfully";
			   $updatech = array('sl_ano' => $sl_ano);

			 
			  $status = $this->Admin_model->update_custom('auction',$data2,$updatech,$updatech);
		
		header('location: '.base_url().'Admin_auctioneditlist/index/'.$datainserr);
	
		
		}
		
		
		
		
		
		
		
		
	}	
		
}
	
	