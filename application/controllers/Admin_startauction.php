<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_startauction extends CI_Controller {

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
      
		$this->load->helper('url');
		$this->load->helper('date');
	
		date_default_timezone_set("Asia/Kolkata");
    }
	
	
	
	 
	 
	public function index()
	{ 
		   if($this->input->post('submit')){
			$date =  Date('Y-m-d'); 
			$this->load->library('fileupload');
			$this->load->helper(array('url','form','file','html'));
			$this->load->model('Admin_model');
			
			
				$icategory = $this->input->post('icategory');
			$icontactperson = $this->input->post('icontactperson');
			$irefid = $this->input->post('irefid');
			$icompanyname = $this->input->post('icompanyname');
			$iauctionid = $this->input->post('iauctionid');
			$iauction_start = $this->input->post('iauction_start');
			$iauction_end = $this->input->post('iauction_end');
			
			
			
			
		//$this->load->model('Admin_model');
			$data = array('icategory' => $icategory, 
			'icontactperson' => $icontactperson, 
			'irefid' => $irefid,
			'icompanyname' => $icompanyname,
			'iauction_start' => $iauction_start,
			'iauction_end' => $iauction_end );
			print_r($data);die;
			
			$status = $this->Admin_model->insert('auction', $data);
			
			 $transfer = array('icategory'=> $icategory, 'iauctionid'=>$iauctionid,'icontactperson' => $icontactperson,'date'=>$date);
			 
			   if($status){
				  $this->session->set_flashdata('txdata',$transfer);
				  redirect('../admin_addlot');
			  }else{
				   header('location: ./admin_startauction/');
			  }
			
			}	
			
		
		
		
		
		$this->load->view('admin/header');
		$this->load->view('admin/startauction');
		$this->load->view('admin/footer');
	}
	
	
public function get_seller_table(){
	$dataw = urldecode($this->uri->segment(3));
	$this->load->model('Admin_model');
	$search = $this->Admin_model->get_lookalike('individual','icompanyname',$dataw);	
	
	if($search){
		foreach($search as $sear){
			echo "<li onclick=\"getPaging(this.id)\" id=\"".$sear['icompanyname'].'|'.$sear['icontactperson']."\" class=\"option\">".$sear['icompanyname']."</li>\n";
			
		}
	}else{
		echo "<li onclick=\"\" value=\"1\" class=\"option\">No Results</li>";
	}
	
}	
	
	
}
