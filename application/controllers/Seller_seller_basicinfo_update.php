<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_seller_basicinfo_update extends CI_Controller {

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
			
		if($this->input->post('role')== 'INDIVIDUAL'){
			
			
			
		
		
		
		$this->load->library('fileupload');
		$this->load->helper(array('url','form','file','html'));
		$this->load->model('Admin_model');
		
		
		
		 $igstnumber = $this->input->post('igstnumber');
 $icompanyname = $this->input->post('icompanyname'); 
 $itypeseller = $this->input->post('itypeseller');  
	   
		$sl_no = $this->input->post('sl_no');
		$icontactnumber = $this->input->post('icontactnumber');
		$iadharnumber  = $this->input->post('iadharnumber');
		$iemailid  = $this->input->post('iemailid');
		
		
		$iadharcardfile = $this->input->post('iadharcardfile');
		
		$iaddres  = $this->input->post('iaddres');
		$iicity  = $this->input->post('iicity');
		$istate  = $this->input->post('istate');
		$icountry  = $this->input->post('icountry');
		$ipincode  = $this->input->post('ipincode');
		$icontactperson  = $this->input->post('icontactperson');
		$iaddresprof  = $this->input->post('iaddresprof');
		
		
		
		$b = $_FILES['iaddresprof']['name'][0];
	     $a = $_FILES['iadharcardfile']['name'][0]; 
  
   
			 if($_FILES['iadharcardfile']['name'][0] && $_FILES['iaddresprof']['name'][0]  ){
				 $pic_array1 = self::upload_files('iadharcardfile');
				$pic_array2 = self::upload_files('iaddresprof'); 
				 
			 }
		 
		 
	   if(!count($pic_array1)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
		}else{
			$pic_array1 = serialize($pic_array1);
		
		}
		  
			  

		  
	   if(!count($pic_array2)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
		}else{
			$pic_array2 = serialize($pic_array2);
		}  
$this->load->model('Admin_model');
			 
if($_FILES['iadharcardfile']['name'][0] || $_FILES['iaddresprof']['name'][0]){
	
$data2 = array('icontactnumber' => $icontactnumber,
			 'iadharnumber' => $iadharnumber,'iemailid' => $iemailid ,
			 'iadharcardfile'=> $pic_array1, 'iaddres' => $iaddres,
			 'iicity' => $iicity,'istate' => $istate, 'icountry' => $icountry, 
			 'ipincode' => $ipincode,'icontactperson'=>$icontactperson,
			 'iaddresprof'=>$pic_array2);
			//print_r($data2);die;
			 }else{
				$data2 = array('icontactnumber' => $icontactnumber,
			 'iadharnumber' => $iadharnumber,'iemailid' => $iemailid ,'iaddres' => $iaddres,
			 'iicity' => $iicity,'istate' => $istate, 'icountry' => $icountry, 
			 'ipincode' => $ipincode,'icontactperson'=>$icontactperson,'itypeseller'=>$itypeseller,'igstnumber'=>$igstnumber,'icompanyname'=>$icompanyname);
		//print_r($data2);die;
			 }
			 

			 
			  $datainserr = "Data Inserted Successfully";
			  $updatech = array('sl_no' => $sl_no);

			 
			  $status = $this->Admin_model->update_custom('sellerdetails',$data2,$updatech,$updatech);
		
		header('location: '.base_url().'Seller_sellerviewdetail/index/'.$datainserr);
	
		
		}
		
			  else {
				 
				 		
		$this->load->library('fileupload');
		$this->load->helper(array('url','form','file','html'));
		$this->load->model('Admin_model');
		
		
		
		
	    $iname = $this->input->post('iname'); 
		$sl_no = $this->input->post('sl_no');
		$icontactnumber = $this->input->post('icontactnumber');
		$iadharnumber  = $this->input->post('iadharnumber');
		$iemailid  = $this->input->post('iemailid');
		
		
		$iadharcardfile = $this->input->post('iadharcardfile');
		
		$iaddres  = $this->input->post('iaddres');
		$iicity  = $this->input->post('iicity');
		$istate  = $this->input->post('istate');
		$icountry  = $this->input->post('icountry');
		$ipincode  = $this->input->post('ipincode');
		$icontactperson  = $this->input->post('icontactperson');
		$iaddresprof  = $this->input->post('iaddresprof');
		 $igstnumber = $this->input->post('igstnumber');
 $icompanyname = $this->input->post('icompanyname'); 
 $itypeseller = $this->input->post('itypeseller');
		
		
		 
$this->load->model('Admin_model');
			 
if($_FILES['iadharcardfile']['name'][0] && $_FILES['iaddresprof']['name'][0]){
	
$data2 = array('iname' => $iname, 'icontactnumber' => $icontactnumber,
			 'iadharnumber' => $iadharnumber,'iemailid' => $iemailid ,
			 'iadharcardfile'=> $pic_array1, 'iaddres' => $iaddres,
			 'iicity' => $iicity,'istate' => $istate, 'icountry' => $icountry, 
			 'ipincode' => $ipincode,'icontactperson'=>$icontactperson,
			 'iaddresprof'=>$pic_array2,'itypeseller'=>$itypeseller,'igstnumber'=>$igstnumber,'icompanyname'=>$icompanyname);
			
			 }else{
				$data2 = array('iname' => $iname, 'icontactnumber' => $icontactnumber,
			 'iadharnumber' => $iadharnumber,'iemailid' => $iemailid ,'iaddres' => $iaddres,
			 'iicity' => $iicity,'istate' => $istate, 'icountry' => $icountry, 
			 'ipincode' => $ipincode,'icontactperson'=>$icontactperson,'itypeseller'=>$itypeseller,'igstnumber'=>$igstnumber,'icompanyname'=>$icompanyname);
		
			 }
			 

			 
			  $datainserr = "Data Inserted Successfully";
			  $updatech = array('sl_no' => $sl_no);

			 
			  $status = $this->Admin_model->update_custom('sellerdetails',$data2,$updatech,$updatech);
		
		header('location: '.base_url().'Seller_sellerviewdetail/index/'.$datainserr);
	
		
		}
				 
				 
				 
				 
				 
			 }                   
		
		private function upload_files($nameid){
    	
 
	$datar = array();
      // Looping all files
	if(($cntfiles = count($_FILES['iadharcardfile']['name'])) && ($cntfiles = count($_FILES['iaddresprof']['name']))){
	
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
	
	