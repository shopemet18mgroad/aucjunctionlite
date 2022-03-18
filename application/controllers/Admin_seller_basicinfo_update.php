<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_seller_basicinfo_update extends CI_Controller {

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
		
		
		
		
	    $buyername = $this->input->post('buyername'); 
		$buyercontactnumber = $this->input->post('buyercontactnumber');
		$buyerasdharnumber = $this->input->post('buyerasdharnumber');
		$buyeremail  = $this->input->post('buyeremail');
		$buyeradharcard  = $this->input->post('buyeradharcard');
		$buyeraddress  = $this->input->post('buyeraddress');
		$bcity  = $this->input->post('bcity');
		$buyerstate  = $this->input->post('buyerstate');
		$buyercountry  = $this->input->post('buyercountry');
		$buyerpincode  = $this->input->post('buyerpincode');
		$buyercontactperson  = $this->input->post('buyercontactperson');
		$addressproof  = $this->input->post('addressproof');
	    $buysl_no  = $this->input->post('buysl_no');
	
		
		
		
			 $a = $_FILES['buyeradharcard']['name']; 
			 if($_FILES['buyeradharcard']['name'][0]){
				 $pic_array1 = self::upload_files('buyeradharcard');
			 }
		 
		 
	   if(!count($pic_array1)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
		}else{
			$pic_array1 = serialize($pic_array1);
		
		}
		  
			  $b = $_FILES['addressproof']['name']; 
			  if($_FILES['addressproof']['name'][0]){
				$pic_array2 = self::upload_files('addressproof');
				}
		  
	   if(!count($pic_array2)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
		}else{
			$pic_array2 = serialize($pic_array2);
		}  
		  
		  
		  
		  
		  
		
		
	
			$this->load->model('Admin_model');
			 
			 if($_FILES['buyeradharcard']['name'][0] && $_FILES['addressproof']['name'][0]){
				 $data2 = array('buyername' => $buyername,'buyercontactnumber' => $buyercontactnumber,
			 'buyerasdharnumber' => $buyerasdharnumber,'buyeremail' => $buyeremail ,
			 'buyeradharcard'=> $pic_array1, 'buyeraddress' => $buyeraddress,
			 'bcity' => $bcity, 'buyerstate' => $buyerstate, 'buyercountry' => $buyercountry, 
			 'buyerpincode' => $buyerpincode,'buyercontactperson'=>$buyercontactperson,
			 'addressproof'=>$pic_array2 );
			 }else{
				 $data2 = array('buyername' => $buyername,'buyercontactnumber' => $buyercontactnumber,
			 'buyerasdharnumber' => $buyerasdharnumber,'buyeremail' => $buyeremail ,
			 'buyeraddress' => $buyeraddress,
			 'bcity' => $bcity, 'buyerstate' => $buyerstate, 'buyercountry' => $buyercountry, 
			 'buyerpincode' => $buyerpincode,'buyercontactperson'=>$buyercontactperson
			 );
			 }
			 

			 
			  $datainserr = "Data Inserted Successfully";
			  $updatech = array('buysl_no ' => $buysl_no );

			 
			  $status = $this->Admin_model->update_custom('buyerdetails',$data2,$updatech,$updatech);
		
		header('location: '.base_url().'Admin_addbuyerlist/index/'.$datainserr);
	
		
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
	
	