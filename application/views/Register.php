<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AUCJUNCTION LITE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url()."web_files/";?> assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url()."web_files/";?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()."web_files/";?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url()."web_files/";?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url()."web_files/";?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url()."web_files/";?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url()."web_files/";?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url()."web_files/";?>assets/css/style.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"<a href="#"><img src="<?php echo base_url()."web_files/";?>assets/img/aucjunction.png" class="img-fluid"
          /></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
   
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <section class="vh-75 login">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-75">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="<?php echo base_url()."web_files/";?>assets/img/aucjunction.png" class="img-fluid mt-1 pt-5 "
          />
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      
      
      
  
   
   
 <form action="<?php echo base_url();?>" method="post" enctype="multipart/form-data">    
   
   
   <?php 
   if(isset($errmsg) && $errmsg != NULL){ ?>
 <div class="alert alert-danger" role="alert">
         <?php echo $errmsg?>
        </div>
        <?php
          }
        ?>
         

          <div class="divider d-flex align-items-center my-3 pt-5">
            <p class="text-center fw-bold mx-3 mb-0">New User Registration</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-2">
            <input type="email" id="iemailid" class="form-control form-control-lg"
              placeholder=""  name="iemailid"/>
            <label class="form-label" for="form3Example3">Email address </label>
            <input type="text" class="form-control form-control-lg"
              placeholder="" name="icontactnumber" id="icontactnumber" />
            <label class="form-label" for="form3Example3">Phone Number</label>
             <input type="password"  class="form-control form-control-lg"
              placeholder=""  name="ipass" id="ipass"/><i class="bi bi-eye-slash errspan" id="togglePassword"></i>
            <label class="form-label" for="form3Example3">Password</label>
			
			 <div class="mb-4 pb-2">
                    <div class="form-outline form-white mm">
                    <input type="password" class="form-control form-control-lg" id="iconpass" name="iconpass" maxLength="15" placeholder=""/><i class="bi bi-eye-slash errspan" id="togglePassword1"></i>
                      <label class="form-label" for="form3Examplea3"> Confirm Password</label>
                    </div>
                  </div>
			
			
			
			
			
			
			
            

          <!-- Password input -->
    

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
            
            </div>
           
          </div>
          
          
          
             <div class="d-flex justify-content-between">
               <div id="nb" class="text-center">
            <button type="submit" name="submit" id="optbtn" class="btn btn-primary "
              style="padding-left: 2.5rem; padding-right: 2.5rem;" onclick="return sendotp()">Validate</button>
              
      
             
             </div> 
             
             
                     </form>

                   <div class="container">
        <div class="row">
            <div class="switch-field" >
                 <input type="radio" id="radio-three" name="switchtwo" value="BUYER" checked/>
              <label for="radio-three">BUYER</label>
              <input type="radio" id="radio-four" name="switchtwo" value="SELLER"/>
              <label for="radio-four">SELLER</label>
              
          </div>
        </div>
        
          
      </div>
      </div>
       <div class="divider d-flex align-items-center my-1">
            <p class="text-center fw-bold mx-3 mb-0">Validate Email & Phone Number</p>
          </div>

          <div class="form-outline mb-0">
        
            <input type="email" id="vphotp" class="form-control form-control-lg"
              placeholder=""  name="vphotp">
            <label class="form-label" for="form3Example3">Phone Number OTP</label>
            <input type="text" id="vemailotp" class="form-control form-control-lg"
              placeholder=""  name="vemailotp">
            <label class="form-label" for="form3Example3">E-mail OTP</label>
            
          </div>
           <button type="submit" name="submit2" id="submit2" onclick="return validateotp()" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
  

      </div>
    </div>
  </div>
  
</section>


    <!-- ======= Breadcrumbs ======= -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 
         
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url()."web_files/";?>assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?php echo base_url()."web_files/";?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url()."web_files/";?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>assets/vendor/php-email-form/validate.js"></script>
	
  <!-- Template Main JS File -->
  <script src="<?php echo base_url()."web_files/";?>assets/js/main.js"></script>
  <script src="<?php echo base_url()."web_files/";?>assets/js/custom.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
    function sendotp() {
	var email = $("#iemailid").val();
	if (
		email
			.toLowerCase()
			.match(
				/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
			)
	) {
		var phone = $("#icontactnumber").val();
		if (phone.match(/^\d{10}$/)) {
			var password = $("#ipass").val();
			var confirmpassv = $("#iconpass").val();
			if (password.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$/)) {
				if (confirmpassv == password) {
					//==============AJAX======================================
                            //Disable Button and add Loadiing
                            $("#optbtn").fadeOut(); 
                            $("#iemailid").prop("readonly", true);
                            $("#icontactnumber").prop("readonly", true);
                            $("#ipass").prop("readonly", true);
                            $("#iconpass").prop("readonly", true);
                            var nb = '<button class="btn btn-primary btn-lg" type="button" disabled>'+
                                    '  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'+
                                    ''+
                                    '</button>';
                            $("#nb").html(nb);
                         $.get('<?php echo base_url(). 'Send_otp/index/'; ?>'+encodeURIComponent(email)+'|'+phone, function(data){
                                if(data=="OK"){
                               swal("Alert!", "Please enter OTP sent to your Email and Phone Number, Kindly do check Email in Spam Folder as well", "info");    
                              }else{
                                 swal("Alert!", "OTP Send Failed, Please Try After 30 Minutes", "error"); 
                                 
                                }
                            });
					//=======================================================
				} else {
swal("Alert!", "Password and confirm Password Does Not Match", "error"); 
                    
				}
			} else {
    swal("Alert!","Password Should Contain 8 to 15 characters With one uppercase and at least one numeric digit and an special character", "error"); 
             	
			}
		} else {
swal("Please Enter an Valid Phone Number With Out Country code(Ex:+91)","warning");       
            
			
		}
		//alert(email);
		return false;
	}
}
function validateotp(){
  	var email = $("#iemailid").val();
    var phone = $("#icontactnumber").val();
    var pass = $("#ipass").val();
    var vphotp = $("#vphotp").val();
    var vemailotp = $("#vemailotp").val();
   
    var type = $('input[name="switchtwo"]:checked').val();
    if(email != '' && phone != '' && pass != '' &&  vphotp != '' && vemailotp != ''){
       //event.preventDefault();
            var formData = {
                'email': email,
                'phone': phone,
                'pass': pass,
                'vphotp': vphotp,
                'vemailotp': vemailotp,
                'type': type
            };
       $.ajax({
                url: "<?php echo base_url(). 'Send_otp/validateotp/'; ?>",
                type: "post",
                data: formData,
                success: function(d) {
                    if(d == "FAIL"){
           swal("Email or Mobile no OTP wrong or Expired","warning");       
             }else if(d == "EXT"){
                              
			swal("Email or Mobile no already exists","warning");       
            }else if(d == "OK"){
                       window.location = "<?php echo base_url() .'login'; ?>" 
                    }else{
     swal("Email or Mobile no OTP wrong or Expired","warning");    

                    }
                }
            });
  $("#submit2").fadeOut();

    }else{
        
        swal("Non of the feilds can be left Blank","warning"); 
        

       return false;
    }

} 
    </script>
	<script>
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#ipass');
togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
</script>
<script>
const togglePassword1 = document.querySelector('#togglePassword1');
const password1 = document.querySelector('#iconpass');
togglePassword1.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
    password1.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
</script>

</body>

</html>