  <nav class="nav nav-pills nav-justified mobile-bottom-nav ">
                 <a class="nav-item nav-link "  data-toggle="tab" href="#nav-home"><i class="fas fa-home"></i> Home</a>
                <a class="nav-item nav-link" data-toggle="tab" href="#nav-profile"><i class="fa-solid fa-gavel"></i> Auctions</a>
                <a class="nav-item nav-link" data-toggle="tab" href="#nav-profile2"><i class="fas fa-shopping-cart"></i><br> Cart</a>
                <a class="nav-item nav-link " data-toggle="tab" href="#nav-profile3"><i class="fas fa-heart"></i> WishList</a>
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
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="<?php echo base_url()."web_files/";?>assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?php echo base_url()."web_files/";?>assets/vendor/aos/aos.js"></script>
  <!-- <script src="<?php echo base_url()."web_files/";?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <script src="<?php echo base_url()."web_files/";?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url()."web_files/";?>assets/js/main.js"></script>
  
  
  	    <script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
  
  
  
  
  
  
  
  <script>
    function addtocart(id){
      var val = $('#ch-'+id).val();
      val = val.split('/').join('-');
      //alert(val);return false;
     var check = '<i class="fa fa-check" aria-hidden="true"></i> Added';
     
      $.get('<?php echo base_url() .'Cart_wishlist/index/'; ?>'+val+'/'+id, function(data){
            var res = data.split('|');
            $('#bt-'+res[1]).removeClass('btn-warning').addClass('btn-success');
             //$('#bt-'+res[1]).find("i").removeClass("fa fa-shopping-cart").addClass("fa fa-check");
            $('#bt-'+res[1]).html(check);
           
        });
    }
    function addtowishlist(id){
      $.get('<?php echo base_url() .'Cart_wishlist/addtowishlist/'; ?>'+id, function(data){
          if(data=="OK"){
            window.location = "<?php echo base_url() .'BuyerAuction_cart/'; ?>" 
          }
        });
      
    }
    function removefromcart(id){
        $.get('<?php echo base_url() .'Cart_wishlist/removefromcart/'; ?>'+id, function(data){
          if(data=="OK"){
            window.location = "<?php echo base_url() .'BuyerAuction_cart/'; ?>" 
          }
        });
    }
    function movetocart(id){
      $.get('<?php echo base_url() .'Cart_wishlist/movetocart/'; ?>'+id, function(data){
          if(data=="OK"){
            window.location = "<?php echo base_url() .'BuyerAuction_wishlist/'; ?>" 
          }
        });
    }
    function removefromwishlist(id){
      $.get('<?php echo base_url() .'Cart_wishlist/removefromwishlist/'; ?>'+id, function(data){
          if(data=="OK"){
            window.location = "<?php echo base_url() .'BuyerAuction_wishlist/'; ?>" 
          }
        });
    }
  </script>
</body>

</html>