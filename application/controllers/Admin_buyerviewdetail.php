<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_buyerviewdetail extends CI_Controller {

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

	$buysl_no = urldecode($this->uri->segment(3));
	
	$active = array('buysl_no'=>$buysl_no);
	
	$query = $this->Admin_model->getdatafromtable('buyerdetails', $active);
	
	$data['sqldata1']= $query;
		
	
	
		$this->load->view('admin/header');
		$this->load->view('admin/buyerviewdetail',$data);
		$this->load->view('admin/footer');
	}
}