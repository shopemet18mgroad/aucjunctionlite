<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_bussiness_basicinfo_add extends CI_Controller {

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
		
		$bname = $this->input->post('bname');
		$icontactnumber = $this->input->post('icontactnumber');
		$iadharnumber  = $this->input->post('iadharnumber');
		
		$iemailid  = $this->input->post('iemailid');
		$bpass = $this->input->post('bpass');
		
		$bconpass = base64_encode($this->input->post('bconpass'));
		$bgstnumber  = $this->input->post('bgstnumber');
		$baddress  = $this->input->post('baddress');
		$bcite  = $this->input->post('bcite');
		$bstate  = $this->input->post('bstate');
		$bcountry  = $this->input->post('bcountry');
		$bpincode  = $this->input->post('bpincode');
		
			if(!count($pic_array1)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
		}else{
			$pic_array1 = serialize($pic_array1);
		}
		if(!count($doc_array1)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
		}else{
			$doc_array1 = serialize($doc_array1);
		}
	
	
		
		
		$data = array('bname' => $bname, 'bcontactnumber' => $bcontactnumber, 'bemail' => $bemail,'btypeseller' => $btypeseller ,'bpass' => $bpass,'bconpass' => $bconpass,'bgstnumber'=> $bgstnumber, 'baddress' => $baddress,' bcite' => $bcite, 'bstate' => $bstate, 'bcountry' => $bemail , 'bphone' => $bphone, 'baddress' => $baddress, 'bpin' => $bpin, 'bpan' => $bpan, 'bstate' => $bcountry, 'bpincode' => $bpincode );
		$datainserr = "Data Inserted Successfully";
		$status = $this->Admin_model->insert('buyerprofile', $data);
		header('location: '.base_url().'admin_buyerreg/index/'.$datainserr);
		
		
		
	}
	
	public function validate_adminbcompany(){
		$dat = urldecode($this->uri->segment(3));
		$check_db = array('bcompany' => $dat);
		$this->load->model('Admin_model');
			  if($this->Admin_model->check('buyerprofile', $check_db)){
				  echo "BYE";
			  }else{
				  echo "HI";
			  }
		
	}
	private function upload_files($nameid)
    {	
	$countfiles = count($_FILES[$nameid]['name']);
      // Looping all files
      for($i=0;$i<$countfiles;$i++){
        if(!empty($_FILES[$nameid]['name'][$i])){
 
          // Define new $_FILES array - $_FILES['file']
          $_FILES['file']['name'] = $_FILES[$nameid]['name'][$i];
          $_FILES['file']['type'] = $_FILES[$nameid]['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES[$nameid]['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES[$nameid]['error'][$i];
          $_FILES['file']['size'] = $_FILES[$nameid]['size'][$i];

          // Set preference
           $config['upload_path'] = 'web_files/uploads/';
			$config['allowed_types'] = 'doc|docx|pdf|xlsx|jpg|png|gif';
          $config['max_size'] = '50000000'; // max_size in kb
          $config['file_name'] = $_FILES[$nameid]['name'][$i];
 
          //Load upload library
          $this->load->library('upload',$config); 
		$this->upload->initialize($config);
		
          // File upload
          if($this->upload->do_upload('file')){
            // Get data about the file
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
            // Initialize array
            $datar[] = $filename;
          }
        }
 
      }
	  return $datar;
    }
	
	
	
	
	

    
		
	
}
