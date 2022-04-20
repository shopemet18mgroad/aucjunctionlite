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
     <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

   
   
   
 



<style>





#dp{
background-color:#f5f5f5;
color:#03AF463;
 list-style-type:none;
 font-size:20px;
margin-top:10px;
}

#dpp{
background-color:#f5f5f5;
color:#03AF463;
list-style-type:none;
font-size:20px;
margin-top:10px;
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
                Hello <?php echo $sessi; ?>
                  <img class="img-profile rounded-circle"  width="30px" src="<?php echo base_url()."web_files/";?>assets/img/user.png">
              </a>
                <ul class="dropdown-menu">
              
                               
                <a class="dropdown-item" href="<?php echo base_url(); ?>#"  data-toggle="modal" data-target="#logoutModal"> Logout</a> 
                
                
                  
                </ul>
          </div>

          </li>
        
     
        

		   <li class="dropdown"><a href="#"><span>Accounts</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="<?php echo base_url();?>Seller_sellerviewdetail">My account</a></li>

            
            </ul>
            </li>
        
        
        
        
        
        
         
         
		  
          
		     <li class="dropdown"><a href="#"><span>Auction</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="<?php echo base_url();?>Seller_startauction">Start Auction</a></li>
             <li><a href="<?php echo base_url();?>Seller_auctioneditlist">Edit Auction</a></li>
			 <li><a href="<?php echo base_url();?>Seller_auctionwinner">Approval Auctionwinner</a></li>
            </ul>
            </li>
			  
			 
			     <li class="dropdown"><a href="<?php echo base_url();?>"><span>Reports</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
		
				
            <li><a href="<?php echo base_url();?>Seller_aucparticipate"> My Auction</a></li>
            
			 
			 
            </ul>
            </li>
			  <li class="dropdown"><a href="<?php echo base_url();?>"><span>Policy</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
		
				
            <li><a href="<?php echo base_url();?>Seller_aboutus"><span>About Us</span></a>
           
			</li>
			    
                   
		
		
<li><a href="<?php echo base_url();?>Seller_contactus"><span>Contact Us</span></a>
           
			</li>
			 
			 
            </ul>
            </li>
			 
            </ul>
            </li>
            
            
            
            
            
            
		  

          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        
    
        
        
        
      </nav><!-- .navbar -->
      
      
      
      
      

    </div>
  </header><!-- End Header -->

  
  
  