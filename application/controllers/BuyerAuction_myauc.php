<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuyerAuction_myauc extends CI_Controller {

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
		
		 $this->load->model('Admin_model');
		$this->load->library('session');	
		
	if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index/'.$datainserr);
			die;
			}else{
		$this->load->model('Admin_model');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$sqldata1 = $this->Admin_model->get_all_auctions_user($this->session->userdata('username'));
		$allaucarray =  array();

		foreach($sqldata1 as $sql){
			$aucdet = $this->Admin_model->get_singleauction($sql->auction_id);
			array_push($allaucarray,$aucdet);
		}
		$allauc['allaucdata'] = $allaucarray;
        $allauc['checked'] = "ALL";

		//$active = array('buyeremail'=>$sess['sessi']);
		$this->load->view('buyer/header',$sess);
		$this->load->view('buyer/auctionlist_myauc',$allauc);
		$this->load->view('buyer/footer');
	
		}
		}
        public function live(){
            $this->load->model('Admin_model');
            $this->load->library('session');	
            
        if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
                $datainserr = "Invalid Login Session";
                header('location: '.base_url().'login/index/'.$datainserr);
                die;
                }else{
            $this->load->model('Admin_model');
            $sess = array('sessi'=>$this->session->userdata('username'));
            $sqldata1 = $this->Admin_model->get_all_auctions_user($this->session->userdata('username'));
            $allaucarray =  array();
    
            foreach($sqldata1 as $sql){
                $aucdet = $this->Admin_model->get_singleauction($sql->auction_id);
                array_push($allaucarray,$aucdet);
            }
            $allauc['allaucdata'] = $allaucarray;
            $allauc['checked'] = "LIVE";
            //$active = array('buyeremail'=>$sess['sessi']);
            $this->load->view('buyer/header',$sess);
            $this->load->view('buyer/auctionlist_myauc',$allauc);
            $this->load->view('buyer/footer');
        
            }

        }
}
