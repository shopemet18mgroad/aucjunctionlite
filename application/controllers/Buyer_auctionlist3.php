<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer_auctionlist3 extends CI_Controller {

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
     $active = array('aoption '=>true);
	
	$query = $this->Admin_model->auctionlist3('auction', $active);
	
	$data['sqldata1']= $query;
	//print_r($data['sqldata1']);die;

		$this->load->view('buyer/header');
		$this->load->view('buyer/auctionlist3',$data);
		$this->load->view('buyer/footer');
	
	}
}
