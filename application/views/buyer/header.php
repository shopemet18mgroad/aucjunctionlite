<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CelestialUI Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="<?php echo base_url()."web_files/";?>vendors/typicons.font/font/typicons.css">
    <link rel="stylesheet" href="<?php echo base_url()."web_files/";?>vendors/css/vendor.bundle.base.css">
    <!-- endinject --> 
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url()."web_files/";?>css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo base_url()."web_files/";?>images/favicon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

 

    
    
	    <script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<style>

	.card-header{
		border-radius:20px;
	
	}
    body{
        font-family:Serif;
       
    }
    
 @media only screen and (max-width: 600px) ,(min-device-width: 768px) and (max-device-width: 1024px)  {


	/*  Force table to not be like tables anymore  */
    table, thead, tbody, th, td, tr {  
		 display: block!important;  
		 width: 100%;
	
  } 

 } 
 
 
 html{
    overflow-y:scroll; 
}

.card{
     border-radius:20px;
     font-family: Times New Roman;
}
#grad{
     background-image: linear-gradient(90deg,#35D6ED,#7AE5F5,#97EBF4);
border-radius:20px;
font-family:monospace;
font-size:large;
border:none;
}
input[type=text] {
  width: 100%;
  padding: 12px 10px;
  margin: 8px 0;
  
  border: none;
  border-bottom: 2px solid blue;
}
.circle-icon {
    background: #ffc0c0;
    padding:30px;
    border-radius: 50%;
}
input[type=email] {
  width: 100%;
  padding: 12px 10px;
  margin: 8px 0;
  
  border: none;
  border-bottom: 2px solid blue;
}
input[type=password] {
  width: 100%;
  padding: 12px 10px;
  margin: 8px 0;
  
  border: none;
  border-bottom: 2px solid blue;
}
input[type=text] {
  width: 100%;
  padding: 12px 10px;
  margin: 8px 0;
  
  border: none;
  border-bottom: 2px solid blue;
}
@font-face {
  font-family: 'dentco';
  src:  url('fonts/dentco.eot?291lp8');
  src:  url('fonts/dentco.eot?291lp8#iefix') format('embedded-opentype'),
    url('fonts/dentco.ttf?291lp8') format('truetype'),
    url('fonts/dentco.woff?291lp8') format('woff'),
    url('fonts/dentco.svg?291lp8#dentco') format('svg');
  font-weight: normal;
  font-style: normal;
}

[class^="icon-"], [class*=" icon-"] {
  /* use !important to prevent issues with browser extensions that change fonts */
  font-family: 'dentco' !important;
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;

  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.icon-placeholder:before {
  content: "\e91d";
}






  
</style>
  </head>
  <body>
  
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="<?php echo base_url()."web_files/";?>images/aucjunction.png" alt="logo"/></a>
              <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo base_url()."web_files/";?>images/aucjunction.png" alt="logo"/></a>
      
          <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex text-info" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu text-info"></span>
          </button>
           <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="typcn typcn-th-menu text-info"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
           




        
          <ul class="navbar-nav navbar-nav-right">
           <li class="nav-item d-none d-lg-flex ">
    <input type="text" class="form-control w-75" placeholder="Search">
    <div class="input-group-append">
      <button class="btn btn-success" type="submit">Go</button>  
     </div>
  </li>
            <li class="nav-item d-none d-lg-flex  mr-2">
              <a class="nav-link" href="#">
                Help
              </a>
            </li>
           
            
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle  pl-0 pr-0" href="#" data-toggle="dropdown" id="profileDropdown">
                <i class="typcn typcn-user text-info mr-0"></i>
                <span class="nav-profile-name">Evan Morales</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                <i class="typcn typcn-cog text-info"></i>
                Settings
                </a>
                <a class="dropdown-item">
                <i class="typcn typcn-power text-info"></i>
                Logout
                </a>
              </div>
            </li>
            
            
          </ul>

        
      </nav>

      <div class="container-fluid page-body-wrapper">
    
        <nav class="sidebar sidebar-offcanvas bg-white" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <div class="d-flex sidebar-profile">
              <div class="sidebar-profile-image">
                <img src="<?php echo base_url()."web_files/";?>images/faces/face29.png" alt="image">
                <span class="sidebar-status-indicator"></span>
              </div>
              <div class="sidebar-profile-name">
                <p class="sidebar-name">
                  Megha
                </p>
                <p class="sidebar-designation">
                  Welcome
                </p>
              </div>
            </div>
            
            <p class="sidebar-menu-title">Dash menu</p>
          </li>
          
          <i class="icon-placeholder"></i>
          
       
               <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic12" aria-expanded="false" aria-controls="ui-basic12">
              <i class="typcn typcn-user menu-icon text-info"></i>
              <span class="menu-title">ACCOUNT</span>
              <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic12">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="#"> My Account</a></li>
           <li class="nav-item"><a class="nav-link" href="#">  Orders & Payments</a></li>
             <li class="nav-item"><a class="nav-link" href="#"> My auctions </a></li>
             <li class="nav-item"><a class="nav-link" href="#"> Messages and Notification</a></li>
                
               
                
              
              </ul>
            </div>
          </li>   
      
          
          
          
       
          
          
          
          
          
          
          
          
        
          
          
          
          
           
             
            <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#ui-meg" aria-expanded="false" aria-controls="ui-meg">
            
           
            
              <i class="typcn  typcn-th-small menu-icon  text-info"  ></i>
              <span class="menu-title">CATEGORIES</span>
              <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-meg">
              <ul class="nav flex-column sub-menu">
              
              
               <li class="nav-item"><a class="nav-link" href="#"> <i class="fa fa-car mr-2"></i> Cars</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-motorcycle mr-2"></i> Bike</a></li>
              <li class="nav-item"><a class="nav-link" href="#"> <i class="fa fa-bed mr-2"></i>   Furniture & Decor</a></li>
                   
        <li class="nav-item"><a class="nav-link" href="#"> <i class="fa fa-television mr-2"></i>  Electronics & Appliances</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-home mr-2"></i>   Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-mobile mr-2"></i>    Mobile & Tablets</a></li>
              <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-futbol-o mr-2" aria-hidden="true"  ></i> Kids & Toys</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-motorcycle mr-2"></i>  More Categories</a></li>
              
                
               
                
              
              </ul>
            </div>
          </li>
          
          
          
          
     
 
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">
              <i class="typcn typcn-clipboard menu-icon text-info"></i>
              <span class="menu-title">REPORTS</span>
              <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
                  
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>">  Auction Participated</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>">Bid Winner</a></li>
               
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>">Bid Loser </a></li>
                
              </ul>
            </div>
          </li>
          
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic6">
              <i class="typcn typcn-news menu-icon text-info"></i>
              <span class="menu-title">POLICIES</span>
              <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic6">
              <ul class="nav flex-column sub-menu">
                  
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>">  Privacy Policy</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>">About Us</a></li>
               
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>">Contact Us </a></li>
                
              </ul>
            </div>
          </li>
  
          
          
          

      </nav>
        <!-- partial -->