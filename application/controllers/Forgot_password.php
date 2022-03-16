<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_password extends CI_Controller {

		function __construct() {
        parent::__construct();
        
		$this->load->library('session');
		$this->load->library('email');
		
	}
	public function index()
	{
		
		$this->load->helper('url');
		$this->load->library('session');
		$this->session->sess_expiration = '3600';
		if($this->input->post('email')){
			if($this->input->post('switch-two')=="Buyer"){
				$table = "buyerdetails";
				$colname = "buyeremail";
				
			}else if($this->input->post('switch-two')=="Seller"){
				$table = "sellerdetails";
				$colname = "iemailid";
			}
				$email = $this->input->post('email');
			
	$check_db = array($colname =>$email);
	
	$this->load->model('Admin_model');
	
	 if($this->Admin_model->check($table, $check_db)){
		 
		 
	 if($table == "buyerdetails"){
				
		$newdata = $this->Admin_model->getdatafromtable('buyerdetails',$check_db);
		$buyeremail = $newdata[0]->buyeremail;
		$buyername= $newdata[0]->buyername;
		$buyerpass = base64_decode($newdata[0]->buyerpass);
		//$bpassword = $newdata[0]->bpassword;		
	     $to =  $this->input->post('email');  

	
	// User email pass here
    $subject = 'Welcome To Aucjunctionlite';

    $from = 'shopemet18mgroad';    // Pass here your mail id

    $emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:0px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="padding-left:0%"></td></tr>';
	$emailContent .='<tr style=""><td style="height:20px">Dear :'.$buyername.'</td></tr>';
    $emailContent .='<tr style=""><td style="height:20px">Your Buyer Email Id is:'.$buyeremail.'</td></tr>';
	$emailContent .='<tr style=""><td style="height:20px">Your password is:'.$buyerpass.'</td></tr>';


    $emailContent .= $this->input->post('message');  //   Post message available here


    $emailContent .='<tr><td style="height:20px"></td></tr>';
    $emailContent .= "<tr><td style='color:white;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><a href='http://aucjunctionlite.com/' target='_blank' style='text-decoration:none;color: orange;'><b>www.Aucjunctionlite24.com</b></a></p></td></tr></table></body></html>";
                
print_r($emailContent);die;

    $config['protocol']  = 'smtp';
    $config['smtp_host']  = 'ssl://smtp.gmail.com';
    $config['smtp_port']  = '465';
    $config['smtp_timeout'] = '60';

    $config['smtp_user']    = 'shopemet18mgroad';    //Important
    $config['smtp_pass']    = '18mgroad';  //Important

    $config['charset']    = 'utf-8';
    $config['newline']    = "\r\n";
    $config['mailtype'] = 'html'; // or html
    $config['validation'] = TRUE; // bool whether to validate email or not 

     

    $this->email->initialize($config);
    $this->email->set_mailtype("html");
    $this->email->from($from);
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($emailContent);
    $this->email->send();

    $this->session->set_flashdata('msg',"Mail has been sent successfully");
    $this->session->set_flashdata('msg_class','alert-success');
    return redirect('forgotpassword');
	}
	 
	
			  
		}
	  }
			
			$this->load->view('forgotpassword');
			
			
			
			
			

		
		

	
	
}
				 
	 }