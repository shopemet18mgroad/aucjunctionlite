<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AUCJUNCTION LITE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


   <!--Made with love by Mutiullah Samim -->
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

	<!--Bootsrap 4 CDN
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
     
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	
</head>
<style>

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('http://localhost/aucjunctionlite/web_files/assets/img/hero-bg.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
width:100%;
align-content: center;
}

.card{
height: 400px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}
@media only screen and (min-width: 600px) {
  .card {
	  margin-top:120px;
  }
}
.social_icon span{
font-size: 30px;
margin-left: 10px;
color: #FFC312;
margin-top:20px;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;

}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 80px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
</style>













<body>
 <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background-color:#00C0A3;opacity:0.9;">
    <div class="container d-flex align-items-center justify-content-between">


  
		  
      <h1 class="logo"<a href="#"
            ><i class="fas fa-arrow-left m-3"style="color:#ffffff;"   onclick="goBack()" style="float:left;color:#808080; font-size:20px;"></i><img src="<?php echo base_url()."web_files/";?>assets/img/aucjunction.png" class="img-fluid " style="width:50px"
          /></a>                           

<script>
function goBack() {
  window.history.back();
}
</script>	 </h1>
		  
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar" >
        <ul>
          <li> 

	  		
		
<li class="dropdown"  ><a href="<?php echo base_url();?>aboutus">About Us<i class="bi bi-chevron-down"style="color:#ffffff;" ></i></a>
           
			</li>
			
				
<li class="dropdown"><a href="<?php echo base_url();?>contactus"><span >Contact Us</span><i class="bi bi-chevron-down"style="color:#ffffff;" ></i></a>
           
			</li>
			 


				
<li class="dropdown"><a href="<?php echo base_url();?>Privacypolicy"><span >Privacy Policy</span><i class="bi bi-chevron-down"style="color:#ffffff;" ></i></a>
           
			</li>			 
		 
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

  
  <main id="main">
    <section class="vh-75">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
<div class="container">

	<div class="d-flex justify-content-center h-100">
		<div class="card"><form class="user" action="<?php echo base_url()."home_login";?>" method="post">
   <?php 
   if(isset($errmsg) && $errmsg != NULL){ ?>
 <div class="alert alert-danger" role="alert">
         <?php echo $errmsg?>
        </div>
        <?php
          }
        ?>
      
			<div class="card-header">
			
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
         <div class="divider d-flex align-items-center my-2"> 

          </div>
				
				<!--<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>-->
			</div>
			<div class="card-body">
				<form>
					
					  <div class="input-group form-group">
					  <div class="input-group-prepend">
					  <span class="input-group-text"><i class="fas fa-user"></i></span></div>
            <input type="email" id="user" class="form-control"
              placeholder="email id" name="user"/><br>
          
           
          </div>
		 
		   <div class="input-group form-group">
					  <div class="input-group-prepend">
					  <span class="input-group-text"><i class="bi bi-eye-slash errspan" id="togglePassword"style="color:##000000"></i></span></div>
                <input type="password" id="pass" class="form-control"
              placeholder="password"  name="pass"/><br>
          
           
          </div>
		 
		 
		 <div class="form-group">
					 <div class="d-flex justify-content-between">
               
             <div class="container">
        <div class="row">
           <center> <div class="switch-field justify-content-center py-3 ml-1" style="margin-right:50px; margin-top:-20px;width:200px;" >
              <input type="radio" id="radio-three" name="switch-two" value="seller" />
              <label for="radio-three">Seller</label>
              <input type="radio" id="radio-four" name="switch-two" value="buyer" checked/>
              <label for="radio-four">Buyer</label>
              <input type="radio" id="radio-five" name="switch-two" value="admin" />
              <label for="radio-five">Admin</label>
              
        <center>  </div>
        </div>
           
      </div> 

           <!-- <button type="submit" name="submit" class="btn btn-primary btn-sm"
              style="padding-left: 1.5rem; padding-right: 2.5rem; background-color:#6CA0DC; margin-top:-73px; margin-left:-48px;width:50px;font-size:10px;"><b>Login</b></button>!-->
              
             
             
               
      </div> 
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
		 
		 
		  
		  
		    
		  <div class="row align-items-center remember"style="margin-top:-10px; margin-right:-10px;">
						<input type="checkbox">Remember Me
					</div>
				
					
					
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account? <a href="<?php echo base_url()."Register";?>"
                class="link-primary" style="color:#fffff;"margin-top:-20px;"><b>Register</b></a></p> 
				</div>
				<div class="d-flex justify-content-center">
					<a href="<?php echo base_url()."ForgotPassword";?>"><b>Forgot your password?</b></a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>






















 <!-- ======= Footer ======= -->
 
            <nav class="nav nav-pills nav-justified mobile-bottom-nav" style="background-color:#00C0A3;opacity:0.9;">
                 <a class="nav-item nav-link "style="color:#ffffff;"  data-toggle="tab" href="#nav-home"><i class="fas fa-home"   style="color:#ffffff;"></i><br> Home</a>
                <a class="nav-item nav-link "style="color:#ffffff;" data-toggle="tab" href="#nav-profile"><i class="fa-solid fa-gavel"style="color:#ffffff;"></i><br> Auctions</a>
                <a class="nav-item nav-link "style="color:#ffffff;" data-toggle="tab" href="#nav-profile2"><i class="fas fa-shopping-cart"style="color:#ffffff;"></i><br> Cart</a>
                <a class="nav-item nav-link "style="color:#ffffff;" data-toggle="tab" href="#nav-profile3"><i class="fas fa-heart"style="color:#ffffff;"></i><br> WishList</a>
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

  <!-- Template Main JS File -->
  <script src="<?php echo base_url()."web_files/";?>assets/js/main.js"></script>

</body>

</html>
<script>
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#pass');
togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
</script>