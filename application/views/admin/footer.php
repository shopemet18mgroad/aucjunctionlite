  <nav class="nav nav-pills nav-justified mobile-bottom-nav" style="background-color:#00C0A3;opacity:0.9;">
                 <a class="nav-item nav-link "style="color:#ffffff;"  data-toggle="tab" href="#nav-home"><i class="fas fa-home"   style="color:#ffffff;"></i><br> Home</a>
                <a class="nav-item nav-link "style="color:#ffffff;" data-toggle="tab" href="#nav-profile"><i class="fa-solid fa-gavel"style="color:#ffffff;"></i><br> Auctions</a>
                <a class="nav-item nav-link "style="color:#ffffff;" data-toggle="tab" href="#nav-profile2"><i class="fas fa-shopping-cart"style="color:#ffffff;"></i><br> Cart</a>
                <a class="nav-item nav-link "style="color:#ffffff;" data-toggle="tab" href="#nav-profile3"><i class="fas fa-heart"style="color:#ffffff;"></i><br> WishList</a>
            </nav>
           
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url()."Login/index/"?>">Logout</a>
        </div>
      </div>
    </div>
  </div>
   

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url()."web_files/";?>assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?php echo base_url()."web_files/";?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url()."web_files/";?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>assets/vendor/php-email-form/validate.js"></script>
<script>
 function home(){
	  window.location = "<?php echo base_url() .'admin_dashboard/'; ?>" 
 }
 function myauc(){
	 window.location = "<?php echo base_url() .'admin_dashboard/'; ?>" 
 }
 function cart(){
	  window.location = "<?php echo base_url() .'admin_dashboard/'; ?>" 
 }
 function wishlist(){
	  window.location = "<?php echo base_url() .'admin_dashboard/'; ?>" 
 }
</script>
  <!-- Template Main JS File -->
  <script src="<?php echo base_url()."web_files/";?>assets/js/main.js"></script>
      
	    <script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
function getdateforrep(){
      var to  = $('#to').val();
      var from = $('#from').val();
      if(to != '' && from != ''){
         window.location = "<?php echo base_url() .'Admin_transactionhistory/index/'; ?>"+to+"/"+from; 
      }else{
        alert("Please Select Date");
      }

    }
    function getdateforrepcom(){
      var to  = $('#to').val();
      var from = $('#from').val();
      if(to != '' && from != ''){
         window.location = "<?php echo base_url() .'Admin_totalcommissionrecived/index/'; ?>"+to+"/"+from; 
      }else{
        alert("Please Select Date");
      }

    }
    function approvewin(v){
     $.get('<?php echo base_url() .'Admin_winnerapproval/adminapprove/'; ?>'+v, function(data){
           if(data == "OK"){
            window.location = "<?php echo base_url() .'Admin_auctionwinapproval/'; ?>" 
           }else{
             alert(data);
           }
           
        });
    }
    function approvelos(v){
     $.get('<?php echo base_url() .'Admin_winnerapproval/adminreject/'; ?>'+v, function(data){
          if(data == "OK"){
            window.location = "<?php echo base_url() .'Admin_auctionwinapproval/'; ?>" 
           }else{
             alert(data);
           }
        });
    }
</script>
  
  
  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>


</html>