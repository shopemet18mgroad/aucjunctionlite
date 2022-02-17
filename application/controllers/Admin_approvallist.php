<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_approvallist extends CI_Controller {

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
		
		$ioption = array('ioption'=>false);
		$this->load->library('session');
				$this->load->model('Admin_model');

		$query = $this->Admin_model->getdatafromtable('individual',$ioption);
		
		$adac['data']  =  $query;
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active = array('ausername'=>$sess['sessi']);
		
		
		
		
		$this->load->view('admin/header');
		$this->load->view('admin/approvallist',$adac);
		$this->load->view('admin/footer');
	}
}
