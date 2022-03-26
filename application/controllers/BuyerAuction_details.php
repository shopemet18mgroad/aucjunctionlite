<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuyerAuction_details extends CI_Controller {

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
			$sess = array('sessi'=>$this->session->userdata('username'));
	
		
		
		date_default_timezone_set("Asia/Kolkata"); 
		$date = date('Y-m-d');
	
		$config = array();
        $config["base_url"] = base_url() . "BuyerAuction_details/index/".$this->uri->segment(3)."/";
		if($this->uri->segment(3) == "TA"){
			$config["total_rows"] = count($this->Admin_model->get_auction_today($date));
		}else{
			$config["total_rows"] = $this->Admin_model->get_count('auction');
		}
       
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
			$data['sqldata1'] = $this->Admin_model->get_auctionlist_today($config["per_page"], $page, $date);
		}else{
			$data['sqldata1'] = $this->Admin_model->get_auctionlist($config["per_page"], $page);
		}
  
		$this->load->view('buyer/header',$sess);
		$this->load->view('buyer/auctionlist_nc',$data);
		$this->load->view('buyer/footer');
		}
	
	}
	

public function get_product_table(){
	$dataw = urldecode($this->uri->segment(3));
	//print_r($dataw);die;
	$this->load->model('Admin_model');
	$search = $this->Admin_model->get_lookalike_search('addlot','iproductname','isubcategory',$dataw);	
	
	if($search){
		$tempArr = array_unique(array_column($search, 'iproductname'));
		$search = array_intersect_key($search, $tempArr);
		foreach($search as $sear){
			echo "<li onclick=\"getPaging(this.id)\" id=\"".$sear['iproductname'].'|'.$sear['isubcategory']."\" class=\"option\">".$sear['iproductname']."</li>\n";
			
		}
	}else{
		echo "<li onclick=\"getPagingnr()\" value=\"1\" class=\"option\">No Results</li>";
	}
	
}	
	
	
	
	
	
	
	
	
	
	
}
