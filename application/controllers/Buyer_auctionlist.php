<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer_auctionlist extends CI_Controller {

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
	public function __construct() {
        parent:: __construct();
        $this->load->helper(array('url','cookie'));
        $this->load->model('Admin_model');
        $this->load->library("pagination");
		$this->load->library('session');
		
    }
	
	public function index()
	{ 
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index/'.$datainserr);
			die;
		}else{
			$sess = array('sessi'=>$this->session->userdata('username'));
			//echo get_cookie('cookie_name'); die;
		$config = array();
        $config["base_url"] = base_url() . "buyer_auctionlist";
        $config["total_rows"] = $this->Admin_model->get_count('auction');
		$config['attributes'] = array('class' => 'page-link');
		$config['num_tag_open'] = '<li class="page-item">'; 
		$config['num_tag_close'] = '</li>'; 
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="javascript:void(0);">'; 
		$config['cur_tag_close'] = '</a></li>'; 
		$config['next_link'] = 'Next'; 
		$config['prev_link'] = 'Prev'; 
		$config['next_tag_open'] = '<li class="page-item">'; 
		$config['next_tag_close'] = '</li>'; 
		$config['prev_tag_open'] = '<li class="page-item">'; 
		$config['prev_tag_close'] = '</li>'; 
		$config['first_tag_open'] = '<li class="page-item">'; 
		$config['first_tag_close'] = '</li>'; 
		$config['last_tag_open'] = '<li class="page-item">'; 
		$config['last_tag_close'] = '</li>';
		//die;
        $config["per_page"] = 4;
        $config["uri_segment"] = 2;
		$this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['sqldata1'] = $this->Admin_model->get_auctionlist($config["per_page"], $page);
		//print_r($data["links"]);die;
     //$active = array('aoption'=>true);
	//$query = $this->Admin_model->auctionlist('auction', $active);
	//$data['sqldata1']= $query;
	//print_r($data['sqldata1']);die;

		$this->load->view('buyer/header',$sess);
		$this->load->view('buyer/auctionlist',$data);
		$this->load->view('buyer/footer');

	}
	
	}
}
