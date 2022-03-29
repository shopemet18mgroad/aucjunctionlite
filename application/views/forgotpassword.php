
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

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"<a href="#"
            ><img src="<?php echo base_url()."web_files/";?>assets/img/aucjunction.png" class="img-fluid"
          /></a><i class="fas fa-arrow-left m-3"   onclick="goBack()" style="float:left;color:#808080; font-size:20px;"></i>                           

<script>
function goBack() {
  window.history.back();
}
</script>	 </h1>
    

      <nav id="navbar" class="navbar">
        <ul>
          <li> 


          </li>
          <li><a class="nav-link scrollto" href="#">About Us</a></li>
          <li><a class="nav-link scrollto" href="#">Contact Us</a></li>
           <li><a class="nav-link scrollto" href="#">Privacy Policy</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <section class="vh-75 login">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="<?php echo base_url()."web_files/";?>assets/img/aucjunction.png" class="img-fluid mt-1 pt-1"
          />
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
  
   
   
   
   
   
   
   
   <?php 
   if(isset($errmsg) && $errmsg != NULL){ ?>
 <div class="alert alert-danger" role="alert">
         <?php echo $errmsg?>
        </div>
        <?php
          }
        ?>
         
      
            
            
            
            
            

          <div class="divider d-flex align-items-center my-0">
            <p class="text-center fw-bold mx-3 mb-0">Forgot Password</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-2">
            <input type="text" id="emailph" name="emailph" class="form-control form-control-lg"
              placeholder="" />
            <label class="form-label" for="form3Example3">Email address or Phone Number</label>
          </div>

          <!-- Password input -->
    

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
            
            </div>
           
          </div>
          
          
          
             <div class="d-flex justify-content-between">
               <div id="nb" class="text-center text-lg-start mt-1 pt-2 pb-5">
            <button type="submit" name="submit" class="btn btn-primary btn-lg" id="optbtn" onclick="return sendresetpassotp()"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>

             </div>  
                   <div class="container">
        <div class="row">
            <div class="switch-field justify-content-center py-3 ml-2" >
              <input type="radio" id="radio-three" name="switch-two" value="SELLER"/>
              <label for="radio-three">Seller</label>
              <input type="radio" id="radio-four" name="switch-two" value="BUYER" checked/>
              <label for="radio-four">Buyer</label>
          
              
          </div>
        </div>
         
      </div>
      </div>
       <div class="divider d-flex align-items-center my-2">
            <p class="text-center fw-bold mx-3 mb-0">Reset Password</p>
          </div>
          
           <div class="form-outline mb-2">
            <input type="text" id="otpph" name="otpph" class="form-control form-control-lg"
              placeholder="" />
            <label class="form-label" for="form3Example3">Enter OTP</label>
          </div>
           <div class="form-outline mb-2">
            <input type="text" id="npass" name="npass" class="form-control form-control-lg"
              placeholder="" />
            <label class="form-label" for="form3Example3">New Password</label>
          </div>
           <div class="form-outline mb-2">
            <input type="text" id="cpass" name="cpass" class="form-control form-control-lg"
              placeholder="" />
            <label class="form-label" for="form3Example3">Confirm Password</label>
          </div>
           <div class="form-outline mb-2">
            <button type="submit" name="submit2" id="submit2" onclick="validateotpfrrst()" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Reset Password</button>
          </div>
          
          
          
          
          
          

          
              
              
              
                   <p class="small fw-bold mt-0 pt-1 mb-5">Don't have an account? <a href="<?php echo base_url()."Register";?>"
                class="link-primary">Register</a></p>
              
              
              
              
     
       
          
          
           
          
          
       
            
                
              
                

      
      </div>
    </div>
  </div>
  
</section>


    <!-- ======= Breadcrumbs ======= -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 
            <nav class="nav nav-pills nav-justified mobile-bottom-nav ">
                 <a class="nav-item nav-link "  data-toggle="tab" href="#nav-home"><i class="fas fa-home"></i> Home</a>
                <a class="nav-item nav-link" data-toggle="tab" href="#nav-profile"><i class="fa-solid fa-gavel"></i> Auctions</a>
                <a class="nav-item nav-link" data-toggle="tab" href="#nav-profile2"><i class="fas fa-shopping-cart"></i> Cart</a>
                <a class="nav-item nav-link " data-toggle="tab" href="#nav-profile3"><i class="fas fa-heart"></i> WishList</a>
            </nav>
           
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Template Main JS File -->
  <script src="<?php echo base_url()."web_files/";?>assets/js/main.js"></script>
  <script>
    function sendresetpassotp(){
      var emailph = $("#emailph").val();
      var type = $('input[name="switch-two"]:checked').val();
      if(!validatePhone(emailph) && !validateEmail(emailph)){
        alert("Please enter vaild email address or phone number");
      }else{
         $("#optbtn").fadeOut(); 
          $("#emailph").prop("readonly", true);
        var nb = '<button class="btn btn-primary btn-lg" type="button" disabled>'+
                                    '  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'+
                                    ''+
                                    '</button>';
            $("#nb").html(nb);
         if(validatePhone(emailph)){
           //its Phone number
           $.get('<?php echo base_url(). 'Send_otp/checkph/'; ?>'+emailph+"/"+type, function(data){
                                if(data=="OK"){
                                    alert("OTP Has been send to you registered mobile no and email");
                                }else if(data=="FAIL"){
                                    alert("OTP Sending Failed, Try after 30 Min");
                                }else{
                                    alert("Phone number does not exists for "+type);
                                }
                            });
         }else{
            $.get('<?php echo base_url(). 'Send_otp/checkem/'; ?>'+encodeURIComponent(emailph)+"/"+type, function(data){
                                if(data=="OK"){
                                    alert("OTP Has been send to you registered mobile no and email");
                                }else if(data=="FAIL"){
                                    alert("OTP Sending Failed, Try after 30 Min");
                                }else{
                                   alert("Email does not exists for "+type);
                                }
                            });
         }
      }
    }
    function validatePhone(email)
        {
            var regex = /^\d{10}$/;
            return regex.test(email);
        }
    function validateEmail(email) 
      { 
          var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return regex.test(email);
      }
      function validateotpfrrst(){
    var emailph = $("#emailph").val();
    var otp = $("#otpph").val();
    var pass = $("#npass").val();
    var cpass = $("#cnpass").val();
    var type = $('input[name="switchtwo"]:checked').val();
    var emorph;
    if(validatePhone(emailph)){
      emorph = "PH";
    }else{
      emorph = "EL";
    }

    if(cpass == pass && otp != '' && pass != '' && cpass != ''){
      var formData = {
                'eorph': emailph,
                'otp': otp,
                'pass': pass,
                'type': type,
                'emorph': emorph
            };

    }else{
      alert("Invalid Otp or both passwords don't match");
     
    }
    if(email != '' && phone != '' && pass != '' &&  vphotp != '' && vemailotp != ''){
       //event.preventDefault();
       $.ajax({
                url: "<?php echo base_url(). 'Send_otp/validateotpfrst/'; ?>",
                type: "post",
                data: formData,
                success: function(d) {
                  alert(d); 
                  return false;
                    if(d == "FAIL"){
                      alert("OTP Invalid or Expired");
                    }else if(d == "EXT"){
                       alert("Email or Mobile no already exists");
                    }else if(d == "OK"){
                      alert("Password Reset Successfully");
                       window.location = "<?php echo base_url() .'LOGIN'; ?>" 
                    }else{
                      alert("Password Reset Failed");
                    }
                }
            });
       
  //$("#submit2").fadeOut();

    }else{
       alert("Non of the feilds can be left Blank");
       return false;
    }

} 
    </script>

</body>

</html>