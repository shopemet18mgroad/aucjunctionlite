<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_addlotview extends CI_Controller {

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
		
		
         
         $sl_ano = urldecode($this->uri->segment(3));
		 $iauctionid = urldecode(str_ireplace('-','/',$this->uri->segment(4)));

		 $active1 = array( 'sl_ano'=>$sl_ano, 'iauctionid'=>$iauctionid,'aoption '=>true);
		
		
		
		
	
    
	
	$query = $this->Admin_model->getaddlotauctiondetails('addlot', $active1);
	
	$data['sqldata1']= $query;
	
//print_r($data['sqldata1']); die;


	$sess = array('sessi'=>$this->session->userdata('username'));
		$active = array('iemailid'=>$sess['sessi']);
	
	
	    $this->load->view('seller/header',$sess);
		$this->load->view('seller/addlotview',$data);
		$this->load->view('seller/footer');

		
}
}