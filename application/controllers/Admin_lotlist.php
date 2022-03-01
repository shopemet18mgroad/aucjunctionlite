<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_lotlist extends CI_Controller {

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
		
		
	
			$iauctionid = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
			
		
		$iauctionid = array('iauctionid'=>$iauctionid);
		
	
		
	$query = $this->Admin_model->getdatafromtable('addlot',$iauctionid);
		
		$adac['data'] = $query;
		
		
		$this->load->view('admin/header');
		$this->load->view('admin/lotlist',$adac);
		$this->load->view('admin/footer');
		
		
		
		
	}	
	
	public function seller_delete(){

$sl_ano  = urldecode($this->uri->segment(3));


$this->load->model('Admin_model');


$adaction2 = array('sl_ano'=>$sl_ano );


$query = $this->Admin_model->delete_data('auction',$adaction2);
$this->load->helper('url');
$this->load->library('session');


if($sl_ano){
header('location: '.base_url().'Admin_auctioneditlist/index/');
}else{
echo "BYE";
}

}	

	
	
	
	
	
	
	
	
	
}