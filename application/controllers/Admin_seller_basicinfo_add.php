<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_seller_basicinfo_add extends CI_Controller {

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
		
		
	     $iname = $this->input->post('iname');
	     $role = $this->input->post('role');
	
		$icontactnumber = $this->input->post('icontactnumber');
		$iadharnumber  = $this->input->post('iadharnumber');
		$iemailid  = $this->input->post('iemailid');
		$ipass = base64_encode($this->input->post('ipass'));
		$iconpass = base64_encode($this->input->post('iconpass'));
		
		$iadharcardfile  = $this->input->post('iadharcardfile');
		
		$iaddres  = $this->input->post('iaddres');
		$icity  = $this->input->post('icity	');
		$istate  = $this->input->post('istate');
		$icountry  = $this->input->post('icountry');
		$ipincode  = $this->input->post('ipincode');
		$icontactperson  = $this->input->post('icontactperson');
		$iaddresprof  = $this->input->post('iaddresprof');
		
		 $a = $_FILES['iadharcardfile']['name']; 
		 
		  $b = $_FILES['iaddresprof']['name']; 
		 
			
		      $pic_array1 = self::upload_files('iadharcardfile');
		//print_r($pic_array1); die;
	   if(!count($pic_array1)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
		}else{
			$pic_array1 = serialize($pic_array1);
		}
		
		
			
		      $pic_array2 = self::upload_files('iaddresprof');
		//print_r($pic_array1); die;
	   if(!count($pic_array2)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
		}else{
			$pic_array2 = serialize($pic_array2);
		}
		
		
		
	
	
		
		
		$data = array('role'=>$role,'iname' => $iname,'icontactnumber' => $icontactnumber, 'iadharnumber' => $iadharnumber,
		'iemailid' => $iemailid ,'ipass' => $ipass,'iconpass' => $iconpass,
		'iadharcardfile'=> $pic_array1, 'iaddres' => $iaddres,' icity' => $icity, 
		'istate' => $istate, 'icountry' => $icountry, 'ipincode' => $ipincode,
		'icontactperson'=>$icontactperson,'iaddresprof'=>$pic_array2 );
		
		
		
		$datainserr = "Data Inserted Successfully";
		$status = $this->Admin_model->insert('individual',$data);
		header('location: '.base_url().'Admin_addseller/index/'.$datainserr);
		
		
		
	}
	
	
	private function upload_files($nameid){
    	
 
	$datar = array();
      // Looping all files
	if(($cntfiles = count($_FILES['iaddresprof']['name'])) && ($cntfiles = count($_FILES['iaddresprof']['name']))){
	
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
	
	

    
		

