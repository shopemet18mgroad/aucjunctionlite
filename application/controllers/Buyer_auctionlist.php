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
        $this->load->helper('url');
        $this->load->model('Admin_model');
        $this->load->library("pagination");
    }
	
	public function index()
	{ 
		$config = array();
        $config["base_url"] = base_url() . "buyer_auctionlist";
        echo $config["total_rows"] = $this->Admin_model->get_count('auction');
		//die;
        $config["per_page"] = 4;
        $config["uri_segment"] = 2;
		$this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['authors'] = $this->Admin_model->get_auctionlist($config["per_page"], $page);
		print_r($data);die;


     $active = array('aoption'=>true);
	$query = $this->Admin_model->auctionlist('auction', $active);
	$data['sqldata1']= $query;
	//print_r($data['sqldata1']);die;

		$this->load->view('buyer/header');
		$this->load->view('buyer/auctionlist',$data);
		$this->load->view('buyer/footer');
	
	}
}
