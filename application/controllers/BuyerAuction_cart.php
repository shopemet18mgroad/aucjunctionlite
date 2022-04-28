<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuyerAuction_cart extends CI_Controller {

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
		$sqldata1 = $this->Admin_model->get_all_cart_user($this->session->userdata('username'));
		$allaucarray =  array();

		foreach($sqldata1 as $sql){
			$aucdet = $this->Admin_model->get_singleauction_nd($sql->auction_id);
			array_push($allaucarray,$aucdet);
		}
		$allauc['allaucdata'] = $allaucarray;
		$allauc['txnid'] = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
		$allauc['uname'] = $this->session->userdata('username');
		$ftemp = explode('@',$this->session->userdata('username'));
		$allauc['fname'] = $ftemp[0];
		$allauc['surl'] = base_url()."Payusta/succ";
		$allauc['furl'] = base_url()."Payusta/fail";
		$allauc['action'] = "https://secure.payu.in/_payment";
		$allauc['MERCHANT_KEY'] = "r7qxJl";

		//$active = array('buyeremail'=>$sess['sessi']);
		$fstatus['cart'] = true;
		$this->load->view('buyer/header',$sess);
		$this->load->view('buyer/auctionlist_cart',$allauc);
		$this->load->view('buyer/footer',$fstatus);
	
		}
		}
}
