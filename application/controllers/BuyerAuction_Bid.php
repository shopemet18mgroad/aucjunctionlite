<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuyerAuction_Bid extends CI_Controller {

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
        $this->load->helper(array('url', 'html', 'date', 'form', 'cookie'));
		$this->load->library(array('session','email', 'Currency'));
		$this->load->model('Admin_model');
    }
	
	public function index()
	{
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			echo "Please Login Again";
			die;
			}else{
				$sessi = $this->session->userdata('username');
				$auc = $this->uri->segment(3);
        		$bid = $this->uri->segment(4);
				$aucn = str_ireplace("-","/",$auc);

			}
        //=============================Check if higher or equal bid value exists if no update into cbid in add lot and update my bid======
		date_default_timezone_set("Asia/Kolkata"); 
			$date = date('Y-m-d H:i:s');
			$dataotpex = array('iauctionid'=>$aucn,'cbid >='=>$bid);
			if($this->Admin_model->check('addlot', $dataotpex)){
				echo "High or Same Bid Value Exists";
				die;
			}else{
				//===Update into AddLot Database===================
				$table = "addlot";
				$datadchk = array('iauctionid'=>$aucn,'iauction_end >'=>$date);
				if($this->Admin_model->check($table, $datadchk)){
					$table = "addlot";
					$comp = array('iauctionid'=>$aucn);
					$datafupbid = array('cbid'=>$bid);
					$table2 = "cart_payment";
					$comp2 = array('auction_id'=>$aucn, 'user_email'=>$sessi);
					$datafupbid2 = array('mybid'=>$bid);
					if($this->Admin_model->update_custom($table, $datafupbid, $comp, $comp)){
						echo "Bid Placed Failed";
					}else{
						$this->Admin_model->update_custom($table2, $datafupbid2, $comp2, $comp2);
						//insert to biding summary====================

						//============================================
						echo "Bid Placed Succesfully";
					}
				}else{
					echo "Auction Closed";
				}

				
				//=================================================

			}
        //=============================Check if my lower bid value exists in bidding cart if yes update or insert==========================


        //=================================================================================================================================
    }
	public function get_currency(){
		$data = urldecode($this->uri->segment(3));
		echo $this->currency->getIndianCurrency($data);
		die;
	}
}
