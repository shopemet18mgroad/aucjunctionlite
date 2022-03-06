
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
          /></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

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
    <div class="row d-flex justify-content-center align-items-center h-75">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="<?php echo base_url()."web_files/";?>assets/img/aucjunction.png" class="img-fluid mt-1 pt-5 "
          />
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
   <form class="user" action="<?php echo base_url()."ResetPassword";?>" method="post">
   <?php 
   if(isset($errmsg) && $errmsg != NULL){ ?>
 <div class="alert alert-danger" role="alert">
         <?php echo $errmsg?>
        </div>
        <?php
          }
        ?>
         

          <div class="divider d-flex align-items-center my-2">
            <p class="text-center fw-bold mx-3 mb-0">Forgot Password</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-2">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="" / name="user">
            <label class="form-label" for="form3Example3">Email address or Phone Number</label>
          </div>

          <!-- Password input -->
    

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
            
            </div>
           
          </div>
          
          
          
             <div class="d-flex justify-content-between">
               <div class="text-center text-lg-start mt-1 pt-2 pb-5">
            <button type="submit" name="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Reset</button>
              
             
             
             </div>  
                   <div class="container">
        <div class="row">
            <div class="switch-field justify-content-center py-3 ml-2" >
              <input type="radio" id="radio-three" name="switch-two" value="seller" checked/>
              <label for="radio-three">Seller</label>
              <input type="radio" id="radio-four" name="switch-two" value="buyer" />
              <label for="radio-four">Buyer</label>
              <input type="radio" id="radio-five" name="switch-two" value="admin" />
              <label for="radio-five">Admin</label>
              
          </div>
        </div>
          
      </div>
      </div>
          
          
          
          
          
          
          
          

          
              
              
              
                   <p class="small fw-bold mt-0 pt-1 mb-0">Don't have an account? <a href="<?php echo base_url()."Register";?>"
                class="link-primary">Register</a></p>
              
              
              
              
     
       
          
          
           
          
          
       
            
                
              
                

        </form>
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

  <!-- Template Main JS File -->
  <script src="<?php echo base_url()."web_files/";?>assets/js/main.js"></script>

</body>

</html>