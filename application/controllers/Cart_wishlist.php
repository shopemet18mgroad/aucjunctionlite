<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_wishlist extends CI_Controller {

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
		$this->load->helper(array('url', 'html', 'date', 'cookie'));
		//Setting  default time zone
        $this->load->library('session');
		date_default_timezone_set('Asia/Kolkata');
		//initaliazing the current time 
		$time =  Date('Y-m-d H:i:s');
        $this->load->model('Admin_model');
		//Loading Admin Model
        $aucid = $this->uri->segment(3);
		$rid = $this->uri->segment(4);
        $aucid = str_ireplace("-","/",$aucid);
        //echo $aucid; die;
        $query = $this->Admin_model->get_singleauction($aucid);
        $auctionid = $query[0]->iauctionid;
        $auctionst = $query[0]->iauction_start;
        $auctioned = $query[0]->iauction_end;
        $auctionimrp = $query[0]->imrp;
        $auctionsub = $query[0]->isubcategory;
        $aucstartprice = $query[0]->startaucprice;
        $aucendprice = $query[0]->endaucprice;
        $sessi = $this->session->userdata('username');
		set_cookie($auctionid,$auctionid, 31536000); 
		//====================Store Value to cart===========
		$data = array('auction_id'=>$auctionid);
		if($this->Admin_model->check('cart_payment', $data)){
			echo "DE|".$rid;
		}else{
			$data = array('auction_id'=>$auctionid, 'entry_fee'=>$auctionimrp, 'cart'=>true, 'wishlist'=>false,'auction'=>false, 'user_email'=>$sessi);
		 	$this->Admin_model->insert('cart_payment', $data);
		 	echo "DI|".$rid;
		}
		//==============Setcookies========================


		//==================================================

       

		//print_r($query);
	}
	
}