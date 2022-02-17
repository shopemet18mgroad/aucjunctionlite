<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_buyer_basicinfo_update extends CI_Controller {

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
	$buyername = $this->input->post('buyername');
			$buyercontactnumber= $this->input->post('buyercontactnumber');
			$buyerasdharnumber = $this->input->post('buyerasdharnumber');
			$buyeremail = $this->input->post('buyeremail');
			$buysl_no = $this->input->post('buysl_no');
			$buyeradharcard = $this->input->post('buyeradharcard');
			$buyeraddress = $this->input->post('buyeraddress');
		    $buyercity =$this->input->post('buyercity');
			$buyerstate = $this->input->post('buyerstate');
			$buyercountry = $this->input->post('buyercountry');
			$buyerpincode = $this->input->post('buyerpincode');
			$buyercontactperson = $this->input->post('buyercontactperson');
			$addressproof = $this->input->post('addressproof');
			
			$this->load->model('Admin_model');
			  $data2 = array('buyername' => $buyername, 'buyercontactnumber' => $buyercontactnumber, 'buyerasdharnumber' => $buyerasdharnumber, 'buyeremail' => $buyeremail,  'buyeradharcard'=> $buyeradharcard, 'buyeraddress' => $buyeraddress, 'buyercity' => $buyercity, 'buyerstate' =>$buyerstate,'buyercountry'=>$buyercountry,'buyerpincode' => $buyerpincode,'buyercontactperson' => $buyercontactperson, 'addressproof' => $addressproof);
			  
	
			

			  
			  $datainserr = "Data Inserted Successfully";
			  $updatech = array('buysl_no' => $buysl_no);
			 
			  $status = $this->Admin_model->update_custom('buyer_register',$data2,$updatech,$updatech);
		
		header('location: '.base_url().'Admin_addbuyerlist/index/'.$datainserr);
	}
}


	
