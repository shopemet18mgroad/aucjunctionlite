<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_editsellerlist extends CI_Controller {

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
		
		
		
		$this->load->library('session');

	    $ioption = array('ioption'=>false);
		//print_r( $ioption); die;
		$this->load->model('Admin_model');
		
		$query = $this->Admin_model->getdatafromtable('sellerdetails',$ioption);
		
		$adac['data']  =  $query;
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active = array('ausername'=>$sess['sessi']);
		
        $this->load->view('admin/header');
		$this->load->view('admin/editsellerlist',$adac);
		$this->load->view('admin/footer');
		
		
		
	}
	
	
	public function seller_delete(){

$sl_no = urldecode($this->uri->segment(3));


$this->load->model('Admin_model');


$adaction2 = array('sl_no'=>$sl_no);


$query = $this->Admin_model->delete_data('sellerdetails',$adaction2);
$this->load->helper('url');
$this->load->library('session');


if($sl_no){
header('location: '.base_url().'Admin_editsellerlist/index/');
}else{
echo "BYE";
}

}

}
