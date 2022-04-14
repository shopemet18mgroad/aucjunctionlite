<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_startauction extends CI_Controller {

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
		
			$sess = array('sessi'=>$this->session->userdata('username'));
		
		
$query = $this->Admin_model->getdatafromtable('sellerdetails', $active);
	
	$data['sqldata1']= $query;
		
		
		
		
		
		
		
		$this->load->view('seller/header',$sess);
		$this->load->view('seller/startauction',$data);
		$this->load->view('seller/footer');
	}
	}
	 public function insert_auc(){
		 $date =  Date('Y-m-d'); 
			$this->load->library('fileupload');
			$this->load->helper(array('url','form','file','html'));
			$this->load->model('Admin_model');
			$irole = $this->input->post('irole');
			$icategory = $this->input->post('icategory');
			$icontactperson = $this->input->post('icontactperson');

			$icompanyname = $this->input->post('icompanyname');
			$iauctionid = $this->input->post('iauctionid');
			$iauction_start = $this->input->post('iauction_start');
			$iauction_end = $this->input->post('iauction_end');
			$iemailid = $this->input->post('iemailid');
	
$data = array('irole'=>$irole,'icategory' => $icategory, 
			'icontactperson' => $icontactperson,'iemailid' => $iemailid,
			'iauctionid' => $iauctionid,
			'icompanyname' => $icompanyname,
			'iauction_start' => $iauction_start,
			'iauction_end' => $iauction_end );
		
		  
	
			
	  
	$transfer = array('irole'=>$irole,'iauctionid' => $iauctionid,'icontactperson' =>$icontactperson,'date'=>$date,'iemailid'=>$iemailid,'icompanyname'=>$icompanyname,'iauction_start'=>$iauction_start,'iauction_end'=>$iauction_end);



	$status = $this->Admin_model->insert('auction',$data);			
	
	if($status){
	 $this->session->set_flashdata('txdata',$transfer);


	 header('location: '.base_url().'seller_addlot/lotmgt');
}else if(!$status){

header('location: ./seller_startauction/');
	}
	 }
	
public function get_seller_table(){
	$dataw = urldecode($this->uri->segment(3));
	$this->load->model('Admin_model');
	$search = $this->Admin_model->get_lookalike('sellerdetails','icompanyname',$dataw);
	
	
	
	if($search){
		foreach($search as $sear){
			echo "<li onclick=\"getPaging(this.id)\" id=\"".$sear['icompanyname'].'|'.$sear['icontactperson']."\" class=\"option\">".$sear['icompanyname']."</li>\n";
			
		}
	}else{
		echo "<li onclick=\"\" value=\"1\" class=\"option\">No Results</li>";
	}
	
}	
public function get_email_table(){
	$dataw1 = urldecode($this->uri->segment(3));
	$this->load->model('Admin_model');
	$search1 = $this->Admin_model->get_lookalike('sellerdetails','iemailid ',$dataw1);	
	
	if($search1){
		foreach($search1 as $sear1){
			echo "<li onclick=\"getPagin(this.id)\" id=\"".$sear1['iemailid'].'|'.$sear1['icontactperson']."\" class=\"option\">".$sear1['iemailid']."</li>\n";
			
		}
	}else{
		echo "<li onclick=\"\" value=\"1\" class=\"option\">No Results</li>";
	}
	
}	




	
}
