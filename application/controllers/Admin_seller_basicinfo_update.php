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
	    $iname = $this->input->post('iname'); 
		$sl_no = $this->input->post('sl_no');
		$icontactnumber = $this->input->post('icontactnumber');
		$iadharnumber  = $this->input->post('iadharnumber');
		$iemailid  = $this->input->post('iemailid');
		
		
		$iadharcardfile  = $this->input->post('iadharcardfile');
		
		$iaddres  = $this->input->post('iaddres');
		$icity  = $this->input->post('icity	');
		$istate  = $this->input->post('istate');
		$icountry  = $this->input->post('icountry');
		$ipincode  = $this->input->post('ipincode');
		$icontactperson  = $this->input->post('icontactperson');
		$iaddresprof  = $this->input->post('iaddresprof');
	
			$this->load->model('Admin_model');
			 $data2 = array('iname' => $iname, 'icontactnumber' => $icontactnumber, 'iadharnumber' => $iadharnumber,'iemailid' => $iemailid ,'iadharcardfile'=> $iadharcardfile, 'iaddres' => $iaddres,' icity' => $icity, 'istate' => $istate, 'icountry' => $icountry, 'ipincode' => $ipincode,'icontactperson'=>$icontactperson,'iaddresprof'=>$iaddresprof );

			  
			  $datainserr = "Data Inserted Successfully";
			  $updatech = array('sl_no' => $sl_no);

			 
			  $status = $this->Admin_model->update_custom('individual',$data2,$updatech,$updatech);
		
		header('location: '.base_url().'Admin_editsellerlist/index/'.$datainserr);
	}
}
