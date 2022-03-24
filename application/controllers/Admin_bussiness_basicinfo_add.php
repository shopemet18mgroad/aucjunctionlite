<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_bussiness_basicinfo_add extends CI_Controller {

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
	    $role = $this->input->post('role');
		$iname = $this->input->post('iname'); 
		$icontactnumber = $this->input->post('icontactnumber');
		$iemailid  = $this->input->post('iemailid');
		$ipass = base64_encode($this->input->post('ipass'));
		$iconpass = base64_encode($this->input->post('iconpass'));
		
		$iaddres  = $this->input->post('iaddres');
		$itypeseller  = $this->input->post('itypeseller');
		$igstnumber  = $this->input->post('igstnumber');
		$icompanyname  = $this->input->post('icompanyname');
	    $iaddres  = $this->input->post('iaddres');
		$iicity  = $this->input->post('iicity');
		$istate  = $this->input->post('istate');
		$icountry  = $this->input->post('icountry');
		$ipincode  = $this->input->post('ipincode');
		$icontactperson  = $this->input->post('icontactperson');
      $iotp  = $this->input->post('iotp');
		
		
	
	
		
		
		$data = array('role'=>$role,'iname' => $iname, 'icontactnumber' => $icontactnumber,'iemailid' => $iemailid ,'ipass' => $ipass,
		'iconpass' => $iconpass,'igstnumber'=>$igstnumber, 'iaddres' => $iaddres,
		' iicity' => $iicity, 'istate' => $istate, 'icountry' => $icountry,
		'ipincode' => $ipincode,'icontactperson'=>$icontactperson,'itypeseller'=>$itypeseller,'icompanyname'=>$icompanyname,'iotp'=>$iotp);
		
		
		
		$datainserr = "Data Inserted Successfully";
		$status = $this->Admin_model->insert('sellerdetails',$data);
		header('location: '.base_url().'Admin_addbussiness/index/'.$datainserr);
		
		
		
	}
	}
}
	

	

    
		

