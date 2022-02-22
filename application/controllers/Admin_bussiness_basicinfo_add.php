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
		$icity  = $this->input->post('icity	');
		$istate  = $this->input->post('istate');
		$icountry  = $this->input->post('icountry');
		$ipincode  = $this->input->post('ipincode');
		$icontactperson  = $this->input->post('icontactperson');
		
	
	
		
		
		$data = array('role'=>$role,'iname' => $iname, 'icontactnumber' => $icontactnumber,'iemailid' => $iemailid ,'ipass' => $ipass,
		'iconpass' => $iconpass,'igstnumber'=>$igstnumber, 'iaddres' => $iaddres,
		' icity' => $icity, 'istate' => $istate, 'icountry' => $icountry,
		'ipincode' => $ipincode,'icontactperson'=>$icontactperson,'itypeseller'=>$itypeseller,'icompanyname'=>$icompanyname );
		
		
		
		$datainserr = "Data Inserted Successfully";
		$status = $this->Admin_model->insert('individual',$data);
		header('location: '.base_url().'Admin_addseller/index/'.$datainserr);
		
		
		
	}
	}
	
	

	

    
		

