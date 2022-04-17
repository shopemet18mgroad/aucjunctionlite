<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payusta extends CI_Controller {

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
		
    }
        public function succ(){
            $status=$this->input->post('status'); 
            $firstname= $this->input->post('firstname'); 
            $amount= $this->input->post('amount');
            $txnid= $this->input->post('txnid'); 
            $posted_hash= $this->input->post('hash');
            $key= $this->input->post('key');
            $productinfo=$this->input->post('productinfo');
            $email=$this->input->post('email'); 
            $salt="6jQGeOFFoAsiAyiAMb54fmcpr2CdLark";

// Salt should be same Post Request 

            If(isset($this->input->post('additionalCharges'))) {
            $additionalCharges=$this->input->post('additionalCharges');
                $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
            }else {
             $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
            }
		    $hash = hash("sha512", $retHashSeq);
            if ($hash != $posted_hash) {
            echo "Invalid Transaction. Please try again";
                $datafupotp = array('payment_fail'=>true);
                $comp = array('user_email'=>$email, 'cart'=>true, 'txn_id'=>$txnid);
                $this->Admin_model->update_custom('cart_payment', $datafupotp, $comp, $comp);
                 header('Location: ' . base_url() . '/BuyerAuction_cart/index/'$txnid.'/FAILED');
		    } else {
                $datafupotp = array('payment_status'=>true,'auction'=>true,'cart'=>false,'wishlist'=>false);
                $comp = array('user_email'=>$email, 'cart'=>true, 'txn_id'=>$txnid);
                $this->Admin_model->update_custom('cart_payment', $datafupotp, $comp, $comp);
                 header('Location: ' . base_url() . '/BuyerAuction_cart/index/'$txnid.'/SUCCESS');
		   }
        }
        public function fail(){
            $status=$this->input->post('status'); 
            $firstname= $this->input->post('firstname'); 
            $amount= $this->input->post('amount');
            $txnid= $this->input->post('txnid'); 
            $posted_hash= $this->input->post('hash');
            $key= $this->input->post('key');
            $productinfo=$this->input->post('productinfo');
            $email=$this->input->post('email'); 
            $salt="6jQGeOFFoAsiAyiAMb54fmcpr2CdLark";

// Salt should be same Post Request 

            If(isset($this->input->post('additionalCharges'))) {
                $additionalCharges=$this->input->post('additionalCharges');
                    $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
            } else {
             $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
            }
		     $hash = hash("sha512", $retHashSeq);
            if ($hash != $posted_hash) {
            //echo "Invalid Transaction. Please try again";
                $datafupotp = array('payment_fail'=>true);
                $comp = array('user_email'=>$email, 'cart'=>true, 'txn_id'=>$txnid);
                $this->Admin_model->update_custom('cart_payment', $datafupotp, $comp, $comp);
                header('Location: ' . base_url() . '/BuyerAuction_cart/index/'$txnid.'/FAILED');
		    } else {
                $datafupotp = array('payment_status'=>true,'auction'=>true,'cart'=>false,'wishlist'=>false);
                $comp = array('user_email'=>$email, 'cart'=>true, 'txn_id'=>$txnid);
                $this->Admin_model->update_custom('cart_payment', $datafupotp, $comp, $comp);
                header('Location: ' . base_url() . '/BuyerAuction_cart/index/'$txnid.'/SUCCESS');
		   }
        }
}
