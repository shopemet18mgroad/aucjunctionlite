 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_login extends CI_Controller {

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
		
		$this->load->helper('url');
		$this->load->library('session');
		$this->session->sess_expiration = '3600';
		//print_r($this->input->post('switch-two'));die;
		if($this->input->post('user')){
			if($this->input->post('switch-two')=="buyer"){
				$acctype = "Buyer";
				$table = "buyerdetails"; 
				$colname = "buyeremail";
				$colname2 = "buyerpass";
			     $status ="buyeroption";
			}else if($this->input->post('switch-two')=="seller"){
				$acctype = "Seller";
				$table = "sellerdetails"; 
				$colname = "iemailid";
				$colname2 = "ipass";
				$status ="ioption";
			}else{
				$acctype = "Admin";
				$table = "adminprofile";
				$colname = "ausername";
				$colname2 = "apassword";
				$status="aoptions";
			  }
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');
			$pass = base64_encode($pass);
			
			$check_db = array($colname => $user, $colname2 => $pass, $status=>true);
			$this->load->model('Admin_model');
			
			  if($this->Admin_model->check($table,$check_db)){
				  if($table == "buyerdetails"){
					  $newdata = array('username'=>$user,'auth'=>'BUYER','logged_in' => TRUE);
						$this->session->set_userdata($newdata);
					  header('location: '.base_url().'BuyerAuction_details');
					  die;
				      }else if($table == "sellerdetails"){
					  $newdata = array('username'=>$user,'auth'=>'SELLER','logged_in' => TRUE);
						$this->session->set_userdata($newdata);
					  header('location: '.base_url().'seller_indexm');
					  die;
				  }else if($table == "adminprofile"){
					  $newdata = array('username'=>$user,'auth'=>'ADMIN','logged_in' => TRUE);
						$this->session->set_userdata($newdata);
					 header('location: '.base_url().'admin_dashboard');
					 die; 
				  }
			  }else{
				  $datainserr = "Invalid Password For ".$acctype;
				  header('location: '.base_url().'Login/index/'.$datainserr);
				  die;
			  }
			  die;
		}else{

			$this->load->view('login');
			
		}
		
		
	}
	public function index_error(){
			$alertmsg = $this->uri->segment(3);
			$alertmsg = urldecode($alertmsg);
			echo '<script language="javascript">';
			echo 'alert("'.$alertmsg.'")';  //not showing an alert box.
			echo '</script>';
			//$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
			
	}
	
}
