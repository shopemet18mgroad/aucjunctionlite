<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuyerAuction_Payments extends CI_Controller {

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
        $sess = $this->session->userdata('username');
        $amt = $this->uri->segment(3);
        $txid = $this->uri->segment(4);
        $sfname = explode('@',$sess);
        $fname = $sfname[0];
        $MERCHANT_KEY = "r7qxJl";
        $SALT = "6jQGeOFFoAsiAyiAMb54fmcpr2CdLark";
        $hash_string = $MERCHANT_KEY."|". $txid."|".$amt."|auctions|".$fname."|".$sess."|||||||||||".$SALT;
        $hash = strtolower(hash('sha512', $hash_string));
        //===========================Update Database======================================================
                   $datafupotp = array('payment_init'=>true,'txn_id'=>$txid);
                   $comp = array('user_email'=>$sess, 'cart'=>true);
                   $this->Admin_model->update_custom('cart_payment', $datafupotp, $comp, $comp);
        //================================================================================================
        echo "HASH|".$hash;
       
	// 	 $this->load->model('Admin_model');
	// 	$this->load->library('session');	
		
	// if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
	// 		$datainserr = "Invalid Login Session";
	// 		header('location: '.base_url().'login/index/'.$datainserr);
	// 		die;
	// 		}else{
	// 	$this->load->model('Admin_model');
	// 	$sess = array('sessi'=>$this->session->userdata('username'));
	// 	$sqldata1 = $this->Admin_model->get_all_cart_user($this->session->userdata('username'));
	// 	$allaucarray =  array();

	// 	foreach($sqldata1 as $sql){
	// 		$aucdet = $this->Admin_model->get_singleauction_nd($sql->auction_id);
	// 		array_push($allaucarray,$aucdet);
	// 	}
	// 	$allauc['allaucdata'] = $allaucarray;
	// 	//$active = array('buyeremail'=>$sess['sessi']);
	// 	$this->load->view('buyer/header',$sess);
	// 	$this->load->view('buyer/auctionlist_cart',$allauc);
	// 	$this->load->view('buyer/footer');
	
	// 	}
		}
}
