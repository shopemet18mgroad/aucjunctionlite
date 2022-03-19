<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_editlot_basicinfo_update extends CI_Controller {

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
		$icategory = $this->input->post('icategory');
		$isubcategory = $this->input->post('isubcategory');
		$iproductdes = $this->input->post('iproductdes');
		$inspectiondate	 = $this->input->post('inspectiondate');
		$imrp = $this->input->post('imrp');
		$sl_noadd  = $this->input->post('sl_noadd');
		$startaucprice  = $this->input->post('startaucprice');
		$endaucprice  = $this->input->post('endaucprice	');
		$iauction_start  = $this->input->post('iauction_start');
		$iauction_end  = $this->input->post('iauction_end');
		$imageupload  = $this->input->post('imageupload');
		$iauctionid  = $this->input->post('iauctionid');
        $entryfee  = $this->input->post('entryfee'); 
		 $iproductname  = $this->input->post('iproductname');
		
		
		
		
			 if($_FILES['imageupload']['name'][0]){
				 $pic_array1 = self::upload_files('imageupload');
			 } 
		 
	   if(!count($pic_array1)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
		}else{
			$pic_array1 = serialize($pic_array1);
		
		}
		  
		 if($_FILES['imageupload']['name'][0]){	  
		  
		  
		  $this->load->model('Admin_model');
		  $data2 = array('icategory'=>$icategory,'isubcategory' => $isubcategory, 
		'iproductdes' => $iproductdes, 'inspectiondate' => $inspectiondate,
		'imrp' => $imrp ,'startaucprice' => $startaucprice,'endaucprice' => $endaucprice,
		'iauction_start'=> $iauction_start, 'iauction_end' =>$iauction_end,'entryfee'=>$entryfee,'imageupload'=>$pic_array1,'iproductname'=>$iproductname);
		}else{
			  $this->load->model('Admin_model');
				$data2 = array('icategory'=>$icategory,'isubcategory' => $isubcategory,'iproductdes' => $iproductdes, 'inspectiondate' => $inspectiondate,
		'imrp' => $imrp ,'startaucprice' => $startaucprice,'endaucprice' => $endaucprice,'iauction_start'=> $iauction_start,'iauction_end' =>$iauction_end,'entryfee'=>$entryfee,'iproductname'=>$iproductname);
			
			
				}
	

			  
			  $datainserr = "Data Inserted Successfully";
			  $updatech = array('sl_noadd ' => $sl_noadd );

			 
			  $status = $this->Admin_model->update_custom('addlot',$data2,$updatech,$updatech);
		
		header('location: '.base_url().'Admin_auctioneditlist/index/'.$datainserr);
	
		
		}
		
		
	
		private function upload_files($nameid){
    	
 
	$datar = array();
      // Looping all files
	if(($cntfiles = count($_FILES['imageupload']['name'])) ){
	
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
	
	