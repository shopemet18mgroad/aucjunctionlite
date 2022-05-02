<?php 
// echo "<pre>";
//   print_r($allaucdata);
//   echo "<pre>";
//   die;
?>

  <main id="main">
    <section class="h-100 mt-5 cart">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">My Wishlist</h3>
          
        </div>
<?php if(count($allaucdata)){?>
       <?php $total = 0; foreach($allaucdata as $allauc){ $img = unserialize($allauc[0]->imageupload);?>

        <div class="card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img src="<?php echo base_url()."web_files/uploads/".$img[0];?>"
                  class="img-fluid rounded-3" alt="Cotton T-shirt">
              </div>
              <div class="col-md-5 col-lg-5 col-xl-5">
                <p class="lead fw-normal mb-2 text-primary"><?php echo $allauc[0]->icategory;?></p>
                <p><span class="text-primary">Auction id: </span><?php echo $allauc[0]->iauctionid;?><span></p>
                <p><span class="text-primary">Auction Start: </span><?php $aucs=$allauc[0]->iauction_start;
				 $temp = explode('.',$aucs);
       $aucs = $temp[0];
       echo  $aucs;	
	   ?>	<span></p>
                <p><span class="text-primary">Auction End: </span><?php $auce=$allauc[0]->iauction_end;
				 $cool = explode('.',$auce);
       $auce = $cool[0];
       echo  $auce;	
	   ?>	<span></p>
              </div>
              
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h5 class="mb-0 text-primary">₹<?php $total = $total + $allauc[0]->entryfee; echo $allauc[0]->entryfee;?></h5>
              </div>
              <div class="col-md-2 col-lg-2 col-xl-2 d-flex">
              <button type="button" id="<?php echo str_ireplace("/","-",$allauc[0]->iauctionid);?>" onclick="movetocart(this.id)" class="btn btn-outline-primary btn-sm ms-3"><i class="fa fa-shopping-cart fa-lg"></i></button>
              <button type="button" id="<?php echo str_ireplace("/","-",$allauc[0]->iauctionid);?>" onclick="removefromwishlist(this.id)" class="btn btn-outline-danger btn-sm ms-3"><i class="fa fa-trash fa-lg"></i></button>
               
              </div>
            </div>
          </div>
        </div>
        <?php }?>
       <?php }else{?>
        <div class="card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <p>WishList Empty<p>
              </div>
            </div>
          </div>
        </div>
        <?php }?>
        <!-- <div class="card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                  class="img-fluid rounded-3" alt="Cotton T-shirt">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2">Basic T-shirt</p>
                <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p>
              </div>
              
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h5 class="mb-0">$499.00</h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div> -->


        <!-- <div class="card mb-4">
          <div class="card-body p-4 d-flex flex-row">
            <div class="form-outline flex-fill">
              <input type="text" id="form1" class="form-control form-control-lg" />
              <label class="form-label " for="form1">Coupon Code </label>
            </div>
            <button type="button" class="btn btn-outline-primary btn-lg ms-3">Apply</button>
          </div>
        </div> -->

        

      </div>
    </div>
  </div>
</section>
    <!-- ======= Breadcrumbs ======= -->
