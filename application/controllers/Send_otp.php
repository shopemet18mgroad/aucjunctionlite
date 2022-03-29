<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send_otp extends CI_Controller {

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
		//$this->load->helper(array('url', 'html', 'date', 'cookie'));
		//Setting  default time zone
        //$this->load->library('session');
		date_default_timezone_set('Asia/Kolkata');
		//initaliazing the current time 
		$time =  Date('Y-m-d H:i:s');
        $otpfailtime = date("Y-m-d H:i:s", strtotime("+30 minutes"));
        $user = $this->uri->segment(3);
        $user = urldecode($user);
        $userarray = explode('|',$user);
        $email = $userarray[0];
        $phone = $userarray[1];
        $otp = rand(00000,99999);
        $otpp = rand(00000,99999);
        $smsgatewaypass = "Aucjunction2020";
        $smsgatewayuser = "SHOPEMET";
        $smsgatewaysender = "AUCJUN";
        $smsgatewayMSG = "OTP%20for%20login%20transaction%20on%20Aucjunction%20Lite%20is%20%20".$otpp."%20and%20valid%20till%2030%20mins.%20Do%20not%20share%20this%20OTP%20with%20anyone%20for%20security%20reasons.";
         $subject = 'Welcome To Aucjunction';
        $from = 'Aucjunction Lite';              // Pass here your mail id
        $emailContent = '<!DOCTYPE><html><head>
        </head><body>
        <div class="container">
        <div class="card ml-5 mr-5">
        <img src="https://www.aucjunction.com/web_files/images/aucjuntn.jpg" class="responsive mt-4" alt="" width="20%;">
        <div class="card-body ml-4">
        <p>OTP for email Verification is : <h1>'.$otp.'</h1></p>
        <p>Note: This is a system generated mail. Please do not reply to it.</p></div>
        </div>
        </div></body></html>"';
        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '60';
        $config['smtp_user']    = 'shopemet18mgroad@gmail.com';    //Important
        $config['smtp_pass']    = '18mgroadnew';  //Important
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not 
        $dataval = array('email'=>$email,'phone'=>$phone);
        $datatotemp = array('email'=>$email,'phone'=>$phone,'phoneotp'=>$otpp,'emailotp'=>$otp,'validity'=>$otpfailtime);

        if(!$this->Admin_model->check('otp', $dataval)){
                $this->Admin_model->insert('otp', $datatotemp); 
                 $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->from($from);
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($emailContent);
            if($this->email->send()){
                //===========SMS Gateway==============
            $smsgatewaymsgcon = "http://bhashsms.com/api/sendmsg.php?user=".$smsgatewayuser."&pass=".$smsgatewaypass."&sender=".$smsgatewaysender."&phone=".$phone."&text=".$smsgatewayMSG."&priority=ndnd&stype=normal";
                if(file_get_contents($smsgatewaymsgcon)){
                    echo "OK";
                }else{
                    echo "FAIL";
                }
            }else{
                echo "FAIL";
            }
        }else{
            //Check OTP exiry
            $dataotpex = array('email'=>$email,'phone'=>$phone, 'validity <='=>$time);
            if($this->Admin_model->check('otp', $dataotpex)){
                   //$this->Admin_model->insert('otp', $datatotemp); 
                   $datafupotp = array('phoneotp'=>$otpp,'emailotp'=>$otp,'validity'=>$otpfailtime);
                   $comp = array('email'=>$email,'phone'=>$phone);
                   $this->Admin_model->update_custom('otp', $datafupotp, $comp, $comp);
                 $this->email->initialize($config);
                $this->email->set_mailtype("html");
                $this->email->from($from);
                $this->email->to($email);
                $this->email->subject($subject);
                $this->email->message($emailContent);
                if($this->email->send()){
                    //===========SMS Gateway==============
                $smsgatewaymsgcon = "http://bhashsms.com/api/sendmsg.php?user=".$smsgatewayuser."&pass=".$smsgatewaypass."&sender=".$smsgatewaysender."&phone=".$phone."&text=".$smsgatewayMSG."&priority=ndnd&stype=normal";
                    if(file_get_contents($smsgatewaymsgcon)){
                        echo "OK";
                    }else{
                        echo "FAIL";
                    }
                }else{
                    echo "FAIL";
                }
            }else{
                 echo "FAIL";
            }

        }
       
       
        // send Sms  
        // $this->session->set_flashdata('msg',"Mail has been sent successfully");
        // $this->session->set_flashdata('msg_class','alert-success');
       
        //die;
		
        
	}
    public function sendotpfn($emailfn,$phonefn){
        //$this->load->helper(array('url', 'html', 'date', 'cookie'));
		//Setting  default time zone
        //$this->load->library('session');
		date_default_timezone_set('Asia/Kolkata');
		//initaliazing the current time 
		$time =  Date('Y-m-d H:i:s');
        $otpfailtime = date("Y-m-d H:i:s", strtotime("+30 minutes"));
        //$user = $this->uri->segment(3);
        //$user = urldecode($user);
        //$userarray = explode('|',$user);
        $email = $emailfn;
        $phone = $phonefn;
        $otp = rand(00000,99999);
        $otpp = $otp;//rand(00000,99999);
        $smsgatewaypass = "Aucjunction2020";
        $smsgatewayuser = "SHOPEMET";
        $smsgatewaysender = "AUCJUN";
        $smsgatewayMSG = "OTP%20for%20login%20transaction%20on%20Aucjunction%20Lite%20is%20%20".$otpp."%20and%20valid%20till%2030%20mins.%20Do%20not%20share%20this%20OTP%20with%20anyone%20for%20security%20reasons.";
         $subject = 'Welcome To Aucjunction';
        $from = 'Aucjunction Lite';              // Pass here your mail id
        $emailContent = '<!DOCTYPE><html><head>
        </head><body>
        <div class="container">
        <div class="card ml-5 mr-5">
        <img src="https://www.aucjunction.com/web_files/images/aucjuntn.jpg" class="responsive mt-4" alt="" width="20%;">
        <div class="card-body ml-4">
        <p>OTP for email Verification is : <h1>'.$otp.'</h1></p>
        <p>Note: This is a system generated mail. Please do not reply to it.</p></div>
        </div>
        </div></body></html>"';
        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '60';
        $config['smtp_user']    = 'shopemet18mgroad@gmail.com';    //Important
        $config['smtp_pass']    = '18mgroadnew';  //Important
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not 
        $dataval = array('email'=>$email,'phone'=>$phone);
        $datatotemp = array('email'=>$email,'phone'=>$phone,'phoneotp'=>$otpp,'emailotp'=>$otp,'validity'=>$otpfailtime);

        if(!$this->Admin_model->check('otp', $dataval)){
                $this->Admin_model->insert('otp', $datatotemp); 
                 $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->from($from);
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($emailContent);
            if($this->email->send()){
                //===========SMS Gateway==============
            $smsgatewaymsgcon = "http://bhashsms.com/api/sendmsg.php?user=".$smsgatewayuser."&pass=".$smsgatewaypass."&sender=".$smsgatewaysender."&phone=".$phone."&text=".$smsgatewayMSG."&priority=ndnd&stype=normal";
                if(file_get_contents($smsgatewaymsgcon)){
                    return "OK";
                }else{
                    return "FAIL";
                }
            }else{
                return "FAIL";
            }
        }else{
            //Check OTP exiry
            $dataotpex = array('email'=>$email,'phone'=>$phone, 'validity <='=>$time);
            if($this->Admin_model->check('otp', $dataotpex)){
                   //$this->Admin_model->insert('otp', $datatotemp); 
                   $datafupotp = array('phoneotp'=>$otpp,'emailotp'=>$otp,'validity'=>$otpfailtime);
                   $comp = array('email'=>$email,'phone'=>$phone);
                   $this->Admin_model->update_custom('otp', $datafupotp, $comp, $comp);
                 $this->email->initialize($config);
                $this->email->set_mailtype("html");
                $this->email->from($from);
                $this->email->to($email);
                $this->email->subject($subject);
                $this->email->message($emailContent);
                if($this->email->send()){
                    //===========SMS Gateway==============
                $smsgatewaymsgcon = "http://bhashsms.com/api/sendmsg.php?user=".$smsgatewayuser."&pass=".$smsgatewaypass."&sender=".$smsgatewaysender."&phone=".$phone."&text=".$smsgatewayMSG."&priority=ndnd&stype=normal";
                    if(file_get_contents($smsgatewaymsgcon)){
                        return "OK";
                    }else{
                       return "FAIL";
                    }
                }else{
                   return "FAIL";
                }
            }else{
                 return "FAIL";
            }

        }
       
       
        // send Sms  
        // $this->session->set_flashdata('msg',"Mail has been sent successfully");
        // $this->session->set_flashdata('msg_class','alert-success');
       
        //die;
		
        

    }
    public function validateotp(){
        date_default_timezone_set('Asia/Kolkata');
		//initaliazing the current time 
		$time =  Date('Y-m-d H:i:s');
        if($this->input->post('email')){
              $email = $this->input->post('email');
              $phone = $this->input->post('phone');
              $pass = $this->input->post('pass');
              $vphotp = $this->input->post('vphotp');
              $vemailotp = $this->input->post('vemailotp');
              $type = $this->input->post('type');
               $dataotpex = array('email'=>$email, 'phone'=>$phone, 'phoneotp'=>$vphotp, 'emailotp'=>$vemailotp, 'validity >='=>$time);
                 if($this->Admin_model->check('otp', $dataotpex)){
                     //Insert into buyer or seller database;
                        if($type == "BUYER"){
                            $table = "buyerdetails";
                            $datbuye = array('buyeremail'=>$email);
                             $datbuyp = array('buyercontactnumber'=>$phone);
                            if($this->Admin_model->check($table, $datbuye) || $this->Admin_model->check($table, $datbuyp)){
                                    echo "EXT";
                            }else{
                                //insert into buyer
                                $databy = array('buyercontactnumber'=>$phone,'buyeremail'=>$email,'buyerpass'=>base64_encode($pass),'bconpassword'=>base64_encode($pass), 'buyeroption'=>true, 'bverifiedemail'=>true);
                                  $this->Admin_model->insert($table, $databy); 
                                  echo "OK";

                            }
                        }else{
                            $table = "sellerdetails";
                            $datselle = array('iemailid'=>$email);
                            $datsellp = array('icontactnumber'=>$phone);
                            if($this->Admin_model->check($table, $datselle)|| $this->Admin_model->check($table, $datsellp)){
                                 echo "EXT";
                            }else{
                                  $datasl = array('icontactnumber'=>$phone,'iemailid'=>$email,'ipass'=>base64_encode($pass),'iconpass'=>base64_encode($pass),'ioption'=>true,'sverifiedemail'=>true);
                                  $this->Admin_model->insert($table, $datasl); 
                                  echo "OK";
                            }
                        }
                 }else{
                     echo "FAIL";
                 }
        }else{
            echo "FAIL";
        }
      
    }
     public function validateotpfrst(){
        date_default_timezone_set('Asia/Kolkata');
		//initaliazing the current time 
		$time =  Date('Y-m-d H:i:s');
        if($this->input->post('eorph')){
              $emailph = $this->input->post('eorph');
              $otp = $this->input->post('otp');
              $pass = $this->input->post('pass');
              $type = $this->input->post('type');
              $emorph = $this->input->post('emorph');
              if($emorph == "EL"){
                $dataotpex = array('email'=>$emailph, 'emailotp'=>$otp, 'validity >='=>$time);
              }else{
                $dataotpex = array('phone'=>$emailph, 'phoneotp'=>$otp, 'validity >='=>$time);
              }
              if($this->Admin_model->check('otp', $dataotpex)){
                            if($type == "BUYER"){
                                $table = 'buyerdetails';
                                $passfeild = 'buyerpass';
                                $cpassfeild = 'bconpassword';
                                if($emorph == "EL"){
                                $fld = "buyeremail";
                                }else{
                                $fld = "buyercontactnumber";
                                }
                            }else{
                                $table = 'sellerdetails';
                                $passfeild = 'ipass';
                                $cpassfeild = 'iconpass';
                                if($emorph == "EL"){
                                    $fld = "iemailid";
                                    }else{
                                    $fld = "icontactnumber";
                                    }
                            }
                            $datachuser = array($fld=>$emailph);
                            if($this->Admin_model->check($table, $datachuser)){
                                $datafupotp = array($passfeild=>base64_encode($pass),$cpassfeild=>base64_encode($pass));
                                $comp = array($fld=>$emailph);
                                $this->Admin_model->update_custom('otp', $datafupotp, $comp, $comp);
                                echo "OK";
                            }else{
                                echo "BAD";
                            }
              }else{
                  echo "FAIL"; 
              }

              


               $dataotpex = array('email'=>$email, 'phone'=>$phone, 'phoneotp'=>$vphotp, 'emailotp'=>$vemailotp, 'validity >='=>$time);
                 if($this->Admin_model->check('otp', $dataotpex)){
                     //Insert into buyer or seller database;
                        if($type == "BUYER"){
                            $table = "buyerdetails";
                            $datbuye = array('buyeremail'=>$email);
                             $datbuyp = array('buyercontactnumber'=>$phone);
                            if($this->Admin_model->check($table, $datbuye) || $this->Admin_model->check($table, $datbuyp)){
                                    echo "EXT";
                            }else{
                                //insert into buyer
                                $databy = array('buyercontactnumber'=>$phone,'buyeremail'=>$email,'buyerpass'=>base64_encode($pass),'bconpassword'=>base64_encode($pass), 'buyeroption'=>true, 'bverifiedemail'=>true);
                                  $this->Admin_model->insert($table, $databy); 
                                  echo "OK";

                            }
                        }else{
                            $table = "sellerdetails";
                            $datselle = array('iemailid'=>$email);
                            $datsellp = array('icontactnumber'=>$phone);
                            if($this->Admin_model->check($table, $datselle)|| $this->Admin_model->check($table, $datsellp)){
                                 echo "EXT";
                            }else{
                                  $datasl = array('icontactnumber'=>$phone,'iemailid'=>$email,'ipass'=>base64_encode($pass),'iconpass'=>base64_encode($pass),'ioption'=>true,'sverifiedemail'=>true);
                                  $this->Admin_model->insert($table, $datasl); 
                                  echo "OK";
                            }
                        }
                 }else{
                     echo "FAIL";
                 }
        }else{
            echo "FAIL";
        }
      
    }
    public function checkph(){
        $phone = $this->uri->segment(3);
        $type = $this->uri->segment(4);
            if($type == "BUYER"){
                  $table = "buyerdetails";
                $data = array('buyercontactnumber'=>$phone);
            }else{
                 $table = "sellerdetails";
                $data = array('icontactnumber'=>$phone);
            }
            if($this->Admin_model->check($table, $data)){
                //===============================
                $indata = $this->Admin_model->getdatafromtable($table, $data);
                  if($type == "BUYER"){
                         echo self::sendotpfn($indata[0]->buyeremail,$indata[0]->buyercontactnumber);
                  }else{
                        echo self::sendotpfn($indata[0]->iemailid,$indata[0]->icontactnumber);
                  }
               
                //=================================================

            }else{
                echo "NEXT";
            }
            
    }
	public function checkem(){
      $email = $this->uri->segment(3);
        $type = $this->uri->segment(4);
            if($type == "SELLER"){
                $table = "sellerdetails";
                $data = array('iemailid'=>$email);
            }else{
                $table = "buyerdetails";
                $data = array('buyeremail'=>$email);
            }
            if($this->Admin_model->check($table, $data)){
                $indata = $this->Admin_model->getdatafromtable($table, $data);
                  if($type == "BUYER"){
                         echo self::sendotpfn($indata[0]->buyeremail,$indata[0]->buyercontactnumber);
                  }else{
                        echo self::sendotpfn($indata[0]->iemailid,$indata[0]->icontactnumber);
                  }
            }else{
                echo "NEXT";
            }
            //send otp ======

            //==================
    }
	
}
