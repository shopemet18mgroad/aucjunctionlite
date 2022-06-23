<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  
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
  	
<style>

.suma{
	width:200px;
	height:200px;
	margin-top:-990px;
	margin-left:20px;
}

.cart{
padding-top:500px;
}
.cart{
padding-top:800px;
}


}
.slide-progress-bar {
            width: 1118px;
            background-color: red;
            transition: width 10s linear;
            display: inline-block;
            vertical-align: middle;
			
        }

        .progress-bar {
            height: 15px;
            background-color:#D2691E;
            width: 10%;
            position: relative;
            transition: linear;
			margin-top:-400px;
        }

</style>

  
</head>

<body>












  <main id="main">
    <section class="h-100 cart">
  <div class="container h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100">
 
		  


        <div class="modal-dialog modal-lg" role="document">
            
				
 <center><img src="<?php echo base_url()."web_files/";?>assets/img/aucjunction.png" class="suma">
  </center>        
            </div>
		   


 <div class="slide-progress-bar " >
        <div class="progress-bar" style="border-radius:20px;" id="progress-bar"></div>
        <!--progress-bar-->
 </div>
  
        </div>
    </div>


</section>
    <!-- ======= Breadcrumbs ======= -->
	

  </main><!-- End #main -->
  
  <script>
 var elem = document.getElementById("progress-bar");
    var width = 0;

    function progressBar() {
        resetProgressBar();

        id = setInterval(frame, 1000);

        function frame() {
            if (width >= 100) {
                clearInterval(id);
            } else {
                width+=20;
                elem.style.width = width + '%';
				 elem.innerHTML = width  + "%";
				 
		if(width >= 100){
				window.location = "Login";
			}		 
				 

				
				
            }
        }
    }

   

    function resetProgressBar() {
        width = 0;
      elem.style.width = width + '%';

		
		
    }
    
     progressBar();
  </script> 
   
  
  </body>

  </html>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 