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
	 
	 function __construct() {
        parent::__construct();
        
        // Load session library
        $this->load->library('session');
        // Load the captcha helper
		//$this->load->helper('captcha');
		$this->load->helper('url');
		$this->load->helper('date');
	
		date_default_timezone_set("Asia/Kolkata");
	 }
	public function index()
	{
		$this->load->library('fileupload');
		$this->load->helper(array('url','form','file','html'));
		$this->load->model('Admin_model');
		
		
	     $buyername = $this->input->post('buyername');
	     $buyercontactnumber = $this->input->post('buyercontactnumber');
	
		$buyerasdharnumber = $this->input->post('buyerasdharnumber');
		$buyeremail  = $this->input->post('buyeremail');
		$buyerpass = base64_encode($this->input->post('buyerpass'));
		$bconpassword = base64_encode($this->input->post('bconpassword'));
		
		
		
		$buyeradharcard  = $this->input->post('buyeradharcard');
		
		$buyeraddress  = $this->input->post('buyeraddress');
		$buyercity  = $this->input->post('buyercity	');
		$buyerstate  = $this->input->post('buyerstate');
		$buyercountry  = $this->input->post('buyercountry');
		$buyerpincode  = $this->input->post('buyerpincode');
		$buyercontactperson  = $this->input->post('buyercontactperson');
		$addressproof  = $this->input->post('addressproof');
		
	
		 $_FILES['buyeradharcard']['name'];
		 $_FILES['addressproof']['name'];
		  
		 
			
		      $pic_array1 = self::upload_files('buyeradharcard');
		
	   if(!count($pic_array1)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
		}else{
			$pic_array1 = serialize($pic_array1);
		}
		
	
			
		      $pic_array2 = self::upload_files('addressproof');
		//print_r($pic_array1); die;
	   if(!count($pic_array2)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
		}else{
			$pic_array2 = serialize($pic_array2);
		}
		
		
		
	
	
		
		
		$data = array('buyername'=>$buyername,'buyercontactnumber' => $buyercontactnumber, 
		'buyerasdharnumber' => $buyerasdharnumber, 'buyeremail' => $buyeremail,
		'buyerpass' => $buyerpass ,'bconpassword' => $bconpassword,'buyeradharcard' => $pic_array1,
		'buyeraddress'=> $buyeraddress, 'buyercity' => $buyercity,' buyerstate' => $buyerstate, 
		'buyercountry' => $buyercountry, 'buyerpincode' => $buyerpincode, 'buyercontactperson' => $buyercontactperson,
		'addressproof'=>$pic_array2 );
		
		
		
		$datainserr = "Data Inserted Successfully";
		$status = $this->Admin_model->insert('buyerdetails',$data);
		header('location: '.base_url().'Admin_addbuyer/index/'.$datainserr);
		
		
		
	}
	
	
	private function upload_files($nameid){
    	
 
	$datar = array();
      // Looping all files
	if(($cntfiles = count($_FILES['buyeradharcard']['name'])) && ($cntfiles = count($_FILES['addressproof']['name']))){
	
	//print_r($_FILES['uploadproductimage']['name']); die;
//print_r($cntfiles);die; 
      for($i=0;$i<$cntfiles;$i++){
        if(!empty($_FILES[$nameid]['name'][$i])){
 
          // Define new $_FILES array - $_FILES['file']
          $_FILES['file']['name'] = $_FILES[$nameid]['name'][$i];
          $_FILES['file']['type'] = $_FILES[$nameid]['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES[$nameid]['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES[$nameid]['error'][$i];
          $_FILES['file']['size'] = $_FILES[$nameid]['size'][$i];

          // Set preference
           $config['upload_path'] = 'web_files/uploads/';
			$config['allowed_types'] = 'doc|docx|pdf|xlsx|jpg|png|gif|jpeg';
          $config['max_size'] = '50000000'; // max_size in kb
          $config['file_name'] = $_FILES[$nameid]['name'][$i];
 
          //Load upload library
          $this->load->library('Upload',$config); 
		$this->upload->initialize($config);
          // File upload
          if($this->upload->do_upload('file')){
            // Get data about the file
            $uploadData = $this->upload->data();
		//print_r( $uploadData ); die;
            $filename = $uploadData['file_name'];
            // Initialize array
            $datar[$i] = $filename;
          }
        }
 
      }
	return $datar;
    }	
	
	
	
	
		  }
	
	
	
	
	
		  }
	
	

    
		

