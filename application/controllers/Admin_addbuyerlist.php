<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_addbuyerlist extends CI_Controller {

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
		
		
		
		
		$buyeroption = array('buyeroption'=>false);
		
	$query = $this->Admin_model->getdatafromtable('buyerdetails',$buyeroption);
		
		$adac['data'] = $query;
		
		
		$this->load->view('admin/header');
		$this->load->view('admin/addbuyerlist',$adac);
		$this->load->view('admin/footer');
		
		
		
		
	}	
	
	public function seller_delete(){

$buysl_no = urldecode($this->uri->segment(3));


$this->load->model('Admin_model');


$adaction2 = array('buysl_no'=>$buysl_no);


$query = $this->Admin_model->delete_data('buyerdetails',$adaction2);
$this->load->helper('url');
$this->load->library('session');


if($buysl_no){
header('location: '.base_url().'Admin_addbuyerlist/index/');
}else{
echo "BYE";
}

}	

	
	
	
	
	
	
	
	
	
}
