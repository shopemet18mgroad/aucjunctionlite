<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_winnerapproval extends CI_Controller {

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
	
	}
	public function adminapprove()
	{
        	$this->load->model('Admin_model');
		    $this->load->library('session');
            if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "ADMIN"){
                    $datainserr = "Invalid Login Session";
                    header('location: '.base_url().'login/index_error/'.$datainserr);
                    die;
                    }else{
                $this->load->model('Admin_model');
                $sess = array('sessi'=>$this->session->userdata('username'));
                $active = array('aname'=>$sess['sessi']);
                $data = urldecode($this->uri->segment(3));
                $data2 = explode('|', $data);
                $aucid = str_ireplace('-','/',$data2[0]);
                $biduname = $data2[1];
                 if($biduname == ""){
                    echo "Unable to Approve";
                    die;
                }
            $datafoauc = array('winnerapproval'=>true);
                $comp = array('iauctionid'=>$aucid);
                $this->Admin_model->update_custom("auction", $datafoauc, $comp, $comp);
                $datafoauc2 = array('approvalstatus'=>true);
                $comp2 = array('auction_id'=>$aucid,'user_email'=>$biduname);
                $this->Admin_model->update_custom("cart_payment", $datafoauc2, $comp2, $comp2);
                echo "OK";
            }	
    }
    public function adminreject(){
        $this->load->model('Admin_model');
		    $this->load->library('session');
            if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "ADMIN"){
                    $datainserr = "Invalid Login Session";
                    header('location: '.base_url().'login/index_error/'.$datainserr);
                    die;
                    }else{
                $this->load->model('Admin_model');
                $sess = array('sessi'=>$this->session->userdata('username'));
                $active = array('aname'=>$sess['sessi']);
                $data = urldecode($this->uri->segment(3));
                $data2 = explode('|', $data);
                $aucid = str_ireplace('-','/',$data2[0]);
                $biduname = $data2[1];
                 if($biduname == ""){
                    echo "Unable to Approve";
                    die;
                }
            $datafoauc = array('winnerapproval'=>2);
                $comp = array('iauctionid'=>$aucid);
                $this->Admin_model->update_custom("auction", $datafoauc, $comp, $comp);
                $datafoauc2 = array('approvalstatus'=>0);
                $comp2 = array('auction_id'=>$aucid,'user_email'=>$biduname);
                $this->Admin_model->update_custom("cart_payment", $datafoauc2, $comp2, $comp2);
                echo "OK";
            }	
    }
    public function adminapproveseller()
	{
        	$this->load->model('Admin_model');
		    $this->load->library('session');
            if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
                    $datainserr = "Invalid Login Session";
                    header('location: '.base_url().'login/index_error/'.$datainserr);
                    die;
                    }else{
                $this->load->model('Admin_model');
                $sess = array('sessi'=>$this->session->userdata('username'));
                $active = array('aname'=>$sess['sessi']);
                $data = urldecode($this->uri->segment(3));
                $data2 = explode('|', $data);
                $aucid = str_ireplace('-','/',$data2[0]);
                $biduname = $data2[1];
                
                if($biduname == ""){
                    echo "Unable to Approve";
                    die;
                }
            $datafoauc = array('winnerapproval'=>true);
                $comp = array('iauctionid'=>$aucid);
                $this->Admin_model->update_custom("auction", $datafoauc, $comp, $comp);
                $datafoauc2 = array('approvalstatus'=>true);
                $comp2 = array('auction_id'=>$aucid,'user_email'=>$biduname);
                $this->Admin_model->update_custom("cart_payment", $datafoauc2, $comp2, $comp2);
                echo "OK";
            }	
    }
    public function adminrejectseller(){
        $this->load->model('Admin_model');
		    $this->load->library('session');
            if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
                    $datainserr = "Invalid Login Session";
                    header('location: '.base_url().'login/index_error/'.$datainserr);
                    die;
                    }else{
                $this->load->model('Admin_model');
                $sess = array('sessi'=>$this->session->userdata('username'));
                $active = array('aname'=>$sess['sessi']);
                $data = urldecode($this->uri->segment(3));
                $data2 = explode('|', $data);
                $aucid = str_ireplace('-','/',$data2[0]);
                $biduname = $data2[1];
                 if($biduname == ""){
                    echo "Unable to Approve";
                    die;
                }
            $datafoauc = array('winnerapproval'=>2);
                $comp = array('iauctionid'=>$aucid);
                $this->Admin_model->update_custom("auction", $datafoauc, $comp, $comp);
                $datafoauc2 = array('approvalstatus'=>0);
                $comp2 = array('auction_id'=>$aucid,'user_email'=>$biduname);
                $this->Admin_model->update_custom("cart_payment", $datafoauc2, $comp2, $comp2);
                echo "OK";
            }	
    }
	
	

}
