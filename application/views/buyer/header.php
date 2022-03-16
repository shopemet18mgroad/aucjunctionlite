<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AUCJUNCTION LITE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url()."web_files/";?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url()."web_files/";?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url()."web_files/";?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url()."web_files/";?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()."web_files/";?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url()."web_files/";?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url()."web_files/";?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url()."web_files/";?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url()."web_files/";?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url()."web_files/";?>assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
 
<style>


   
 @media only screen and (max-width: 600px) ,(min-device-width: 768px) and (max-device-width: 1024px){


	/*  Force table to not be like tables anymore  */
    table, thead, tbody, th, td, tr {  
		 display: block!important;  
		 width: 100%;
	
  } 

 } 
 
 
 html{
    overflow-y:scroll; 
}






.col{
border:1px solid #d3d3d3;
background-color:white;
width:50px;
height:100px;
}
#dp{
background-color:#f5f5f5;
color:#03AF463;
 list-style-type:none;
 font-size:20px;
margin-top:10px;
}

.ab{
	
color:black;	
font-size:30px;

}

.suma{
padding-left:600px;
margin-top:-600px;	  
  }
  
 .kk{
	font-size:30px;
	color:black;
 } 
 .sums{
  font-family: "Times New Roman", Times, serif;	 
	 
 } 
 .nan{
  font-family: "Times New Roman", Times, serif;	 
	 
 } 
   .sd{
  font-family: "Times New Roman", Times, serif;	 
	 
 } 
  
   .mode{
  font-family: "Times New Roman", Times, serif;	 
	 
 } 
   .ja{
  font-family: "Times New Roman", Times, serif;	 
	 
 } 
      
  
  
</style>





  
  

  
</head>

<body>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="#"
            ><img src="<?php echo base_url()."web_files/";?>assets/img/aucjunction.png" class="img-fluid"
          /></a>
		  
	          				  <i class="fas fa-arrow-left m-3"   onclick="goBack()" style="float:left;color:#808080; font-size:20px;"></i>                           

<script>
function goBack() {
  window.history.back();
}
</script>
         	  
		  
		  
		  
		  
		  
		  
		  
		  
		  </h1>
     

      <nav id="navbar" class="navbar">
        <ul>
          <li> 
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 
                  <img class="img-profile rounded-circle"  width="30px" src="<?php echo base_url()."web_files/";?>assets/img/user.png">
				  <div style="color:#124265"><?php echo $sessi;?></div>
              </a>
          <ul class="dropdown-menu">
                  <a class="dropdown-item" href="<?php echo base_url(); ?>#"  data-toggle="modal" data-target="#logoutModal">update Profile</a>
                
                <a class="dropdown-item" href="<?php echo base_url(); ?>#"  data-toggle="modal" data-target="#logoutModal"> Logout</a> 
                
                
                  
                </ul>
            
          </div>

          </li>
		  
		   <li class="dropdown"><a href="#"><span>Accounts</span><i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="<?php echo base_url();?>buyer_myaccount">My Account</a></li>
			
			
             <li><a href="<?php echo base_url();?>buyer_orderpayment">Orders & Payments</a></li>
			 
			 
                          <li><a href="<?php echo base_url();?>buyer_myauc">My auctions</a></li>
						  
						  
                                       <li><a href="<?php echo base_url();?>buyer_message"> Messages and Notification</a></li>
            </ul>
            </li>
          
		

		
		
		
<li class="dropdown"><a href="<?php echo base_url();?>buyer_categories"><span>Category</span><i class="bi bi-chevron-down"></i></a>
           
			</li>
			
			
         
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			
	
	   <li class="dropdown"><a href="<?php echo base_url();?>buyer_aboutus"><span>Reports</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
		
				
            <li><a href="<?php echo base_url();?>buyer_aucparticipate"> Auction participated</a></li>
             <li><a href="<?php echo base_url();?>buyer_bidsummary">Bid Summary</a></li>
			 <li><a href="<?php echo base_url();?>buyer_win">Win or Lost to be displayed</a></li>
			 <li><a href="<?php echo base_url();?>buyer_amount"> Winner name and amount to be displayed</a></li>
			 <li><a href="<?php echo base_url();?>buyer_payment">  Payment History</a></li>
			 
			 
            </ul>
            </li>
            
	
	
	
	
	
	
           
            </li>
          	
		
		
				
	<li class="dropdown"><a href="#"><span>Policies</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="<?php echo base_url();?>">Privacy Policy</a></li>
            
                  <li class="dropdown"><a href="<?php echo base_url();?>buyer_aboutus"><span>About Us</span><i class="bi bi-chevron-down"></i></a>
           
			</li>
			    
                   
		
		
<li class="dropdown"><a href="<?php echo base_url();?>buyer_contactus"><span>Contact Us</span><i class="bi bi-chevron-down"></i></a>
           
			</li>
			

				   
            </ul>
            </li>
          	
		
		
		
		
		
		
		
		
		
		
		
		
		

          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  
  
  