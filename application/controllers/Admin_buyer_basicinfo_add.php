<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_buyer_basicinfo_add extends CI_Controller {

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
			$buyerpass = base64_encode($this->input->post('buyerpass'));
			$bconpassword = base64_encode($this->input->post('bconpassword'));
			$buyeradharcard = $this->input->post('buyeradharcard');
			$buyeraddress = $this->input->post('buyeraddress');
		    $buyercity =$this->input->post('buyercity');
			$buyerstate = $this->input->post('buyerstate');
			$buyercountry = $this->input->post('buyercountry');
			$buyerpincode = $this->input->post('buyerpincode');
			$buyercontactperson = $this->input->post('buyercontactperson');
			$addressproof = $this->input->post('addressproof');
			
			
			$this->load->model('Admin_model');
			  $data2 = array('buyername' => $buyername, 'buyercontactnumber' => $buyercontactnumber, 'buyerasdharnumber' => $buyerasdharnumber, 'buyeremail' => $buyeremail, 'buyerpass' => $buyerpass, 'bconpassword' => $bconpassword, 'buyeradharcard'=> $buyeradharcard, 'buyeraddress' => $buyeraddress, 'buyercity' => $buyercity, 'buyerstate' =>$buyerstate,'buyercountry'=>$buyercountry,'buyerpincode' => $buyerpincode,'buyercontactperson' => $buyercontactperson, 'addressproof' => $addressproof);
			  
			  //print_r($data2); die;
			  
		$datainserr = "Data Inserted Successfully";
		$status = $this->Admin_model->insert('buyerdetails', $data2);
		header('location: '.base_url().'admin_addbuyer/index/'.$datainserr);
		
	
		
	}

}
