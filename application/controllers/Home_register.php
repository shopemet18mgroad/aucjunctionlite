<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_register  extends CI_Controller {

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
		$error['errmsg'] = urldecode($this->uri->segment(3)); 
	
		$this->load->library('fileupload');
		$this->load->helper(array('url','form','file','html'));
		$this->load->model('Admin_model');
		
		
	
		$role = $this->input->post('role');
         $icontactperson = $this->input->post('icontactperson');
         $switchtwo = $this->input->post('switchtwo');
         $iemailid  = $this->input->post('iemailid');
          $ipass = base64_encode($this->input->post('ipass'));
         $iconpass = base64_encode($this->input->post('iconpass'));
		
		 $data = array('icontactperson'=>$icontactperson,'iemailid' => $iemailid,'ipass' => $ipass,'iconpass' => $iconpass,'role'=>$switchtwo);
		 //print_r($data);die;
		
		 
		 	$datainserr = "Data Inserted Successfully";
		$status = $this->Admin_model->insert('sellerdetails',$data);
		header('location: '.base_url().'Login/'.$datainserr);
		
		
		
		
		
		
	
		
	
		
		 
		
		
	
		
		
		
		
		
		
	

		 
		 
		
		 
		 
		$this->load->view('register', $error);

	}	
		
		
		
	}

