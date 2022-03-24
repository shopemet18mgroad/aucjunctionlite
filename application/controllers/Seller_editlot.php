
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_editlot extends CI_Controller {

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
		$this->load->model('Admin_model');
		$this->load->library('session');
				
	if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index/'.$datainserr);
			die;
			}else{
		$this->load->model('Admin_model');
		
$iauctionid = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
$active = array('iauctionid'=>$iauctionid);

	$query = $this->Admin_model->getdatafromtable('addlot',$active);

	
	$data['sqldata']= $query;
		$sess = array('sessi'=>$this->session->userdata('username'));
	
	
		$this->load->view('seller/header',$sess);
		$this->load->view('seller/editlot',$data);
		$this->load->view('seller/footer');
	}
	
			}



public function seller_delete(){

$sl_ano  = urldecode($this->uri->segment(3));


$this->load->model('Admin_model');


$adaction2 = array('sl_ano'=>$sl_ano );


$query = $this->Admin_model->delete_data('auction',$adaction2);
$this->load->helper('url');
$this->load->library('session');


if($sl_ano){
header('location: '.base_url().'Seller_auctioneditlist/index/');
}else{
echo "BYE";
}
	
	
	
	
	
	
}
}
