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
			$scategory = $this->input->post('scategory');
			$sauctionid = $this->input->post('sauctionid');
			$sname = $this->input->post('sname');
			$srefid = $this->input->post('srefid');
			$scompanyname = $this->input->post('scompanyname');
			$sfrominpectdate_time = $this->input->post('sfrominpectdate_time');
			$stoinpectdate_time  = $this->input->post('stoinpectdate_time');
			$semddetail = $this->input->post('semddetail');
			$slastdateemdsub = $this->input->post('slastdateemdsub');
			$svinspection = $this->input->post('svinspection');
			
			
		//$this->load->model('Admin_model');
			$data = array('scategory' => $scategory, 'sauctionid' => $sauctionid, 'sname' => $sname,'srefid' => $srefid, 'scompanyname' => $scompanyname, 'sfrominpectdate_time' => $sfrominpectdate_time, 'stoinpectdate_time' => $stoinpectdate_time,'semddetail' => $semddetail,'slastdateemdsub' => $slastdateemdsub, 'svinspection'=> $svinspection, 'saucstartdate_time' => $saucstartdate_time,'saucclosedate_time' => $saucclosedate_time,'sterms_condiaccept'=>$sterms_condiaccept,'sterms_condiupload' => $pic_array1 , 'sterms_text' => $sterms_text);
			
			$status = $this->Admin_model->insert('auction', $data);
			
			 $transfer = array('category'=> $scategory, 'auctionid'=>$sauctionid,'sname' => $sname,'date'=>$date);
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
