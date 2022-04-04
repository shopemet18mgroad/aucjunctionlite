<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetAuctionDetails extends CI_Controller {

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
        date_default_timezone_set("Asia/Kolkata"); 
		$date = date('Y-m-d H:i:s'); 
        $auctionid = str_ireplace('-','/', $this->uri->segment(3));
		$username = urldecode($this->uri->segment(4));
        $allauctres = $this->Admin_model->UpdateLive($username, $auctionid);
        $diff = strtotime($allauctres[0]['iauction_end']) - strtotime($date);
				//$diff = abs($time - $sqldata[0]->aucclosedate_time);  
			//$diff = strtotime($query[0]->aucclosedate_time)-strtotime($time);
		$years = floor($diff / (365*60*60*24));  
        $months = floor(($diff - $years * 365*60*60*24)/ (30*60*60*24));   
        $days = floor(($diff - $years * 365*60*60*24 -  $months*30*60*60*24)/ (60*60*24)); 
        $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60));  
        $minutes = floor(($diff - $years * 365*60*60*24  - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);  
        $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60)); 
        $Remaining = $hours." Hours: ".$minutes." Minutes: ".$seconds." Seconds: ";
        $cbid = $allauctres[0]['cbid'];
        $mybid = $allauctres[0]['mybid'];
        echo $diff."|".$Remaining."|".$cbid."|".$mybid;

}

}
