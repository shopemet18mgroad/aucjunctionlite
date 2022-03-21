<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuyerAuction_fridge extends CI_Controller {

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
		
		
		 $this->load->model('Admin_model');
		$this->load->library('session');
		
		
	if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index/'.$datainserr);
			die;
			}else{
		$this->load->model('Admin_model');
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		
		$active = array('buyeremail'=>$sess['sessi']);
		
		
		
		
		
		date_default_timezone_set("Asia/Kolkata"); 
		$date = date('Y-m-d');
		//$date = "2022-03-09";
		//$td = $this->Admin_model->get_auction_today($date);
		//print_r(count($alfa));die;
		$config = array();
        $config["base_url"] = base_url() . "BuyerAuction_fridge/index/".$this->uri->segment(3)."/";
		if($this->uri->segment(3) == "TA"){
			$config["total_rows"] = count($this->Admin_model->get_auction_today($date));
		}else{
			$config["total_rows"] = $this->Admin_model->get_count_cat('auction','Fridge');
		}
       //print_r($config["total_rows"]);die;
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
        $config["uri_segment"] = 4;
		$this->pagination->initialize($config);
        $data['checked'] = $this->uri->segment(3);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["links"] = $this->pagination->create_links();
		if($this->uri->segment(3) == "TA"){
			$data['sqldata1'] = $this->Admin_model->get_auctionlist_todayfridge($config["per_page"], $page, $date);
		}else{
			$data['sqldata1'] = $this->Admin_model->get_auctionlistfridge($config["per_page"], $page);
		}
        
	

		$this->load->view('buyer/header',$sess);
		$this->load->view('buyer/auctionlist_fridge',$data);
		$this->load->view('buyer/footer');
		}
	}
}
