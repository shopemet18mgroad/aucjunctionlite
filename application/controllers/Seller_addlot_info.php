<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_addlot_info extends CI_Controller {

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
		
			$this->load->model('Admin_model');
		$this->load->library('session');
		
		
	if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$this->load->model('Admin_model');
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		
		$active = array('iemailid'=>$sess['sessi']);
		
		$this->load->view('seller/header',$sess);	
		
		
		$this->load->library('fileupload');
		$this->load->helper(array('url','form','file','html'));
		$this->load->model('Admin_model');
		
		 $iauctionid = $this->input->post('iauctionid');
		 //print_r($iauctionid);die;
	     $irole = $this->input->post('irole');
		  $iemailid = $this->input->post('iemailid');
		   $icontactperson = $this->input->post('icontactperson');
		    $icategory = $this->input->post('icategory');
	     $isubcategory = $this->input->post('isubcategory');
         $iproductdes = $this->input->post('iproductdes');
		 $inspectiondate  = $this->input->post('inspectiondate');
		 $imrp = $this->input->post('imrp');
		 $icompanyname = $this->input->post('icompanyname');
		 $startaucprice = $this->input->post('startaucprice');
	     $endaucprice  = $this->input->post('endaucprice');
		 $iauction_start  = $this->input->post('iauction_start');
		 $iauction_end  = $this->input->post('iauction_end');
		 $imageupload  = $this->input->post('imageupload');
		  $entryfee  = $this->input->post('entryfee');
		  $iproductname  = $this->input->post('iproductname');
		  $commission = $this->input->post('commission');
		
		
	
		$a = $_FILES['imageupload']['name'];
	    $pic_array1 = self::upload_files('imageupload');
		//print_r($a);die;
	   if(!count($pic_array1)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
		}else{
			$pic_array1 = serialize($pic_array1);
		}
		
		
		$data = array('iauctionid'=>$iauctionid,'irole'=>$irole,'iemailid'=>$iemailid,'icontactperson' =>  $icontactperson,'icategory'=>$icategory,'isubcategory' =>$isubcategory,'iproductdes' => $iproductdes, 'inspectiondate' => $inspectiondate,
		'imrp' => $imrp ,'startaucprice' => $startaucprice,
		'imageupload' => $pic_array1,'entryfee'=>$entryfee,'icompanyname'=>$icompanyname,'iproductname'=>$iproductname,'iauction_start'=>$iauction_start,'iauction_end'=>$iauction_end ,'commission'=>$commission); 
		
	
		
		$datainserr = "Data Inserted Successfully";
		$status = $this->Admin_model->insert('addlot',$data);
		header('location: '.base_url().'seller_startauction/index/'.$datainserr);
		
		
		
	}
	}
	
	private function upload_files($nameid){
    	
 
	$datar = array();
      // Looping all files
	if($cntfiles = count($_FILES['imageupload']['name'])){
	
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
	
	

    
		

