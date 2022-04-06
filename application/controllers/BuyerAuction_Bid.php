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
		$this->load->library(array('session','email'));
        //$this->load->library('email');
		$this->load->model('Admin_model');
    }
	
	public function index()
	{
		$auc = $this->uri->segment(3);
        $bid = $this->uri->segment(4);
        //=============================Check if higher or equal bid value exists if no update into cbid in add lot and update my bid======

        //=============================Check if my lower bid value exists in bidding cart if yes update or insert==========================


        //=================================================================================================================================
        
    }
	
}
