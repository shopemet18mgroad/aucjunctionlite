 <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
        
        <div class="d-flex justify-content-between align-items-center">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-append">
              <button class="btn btn-secondary aliteblue" type="button">
                <i class="fa fa-search"></i>
              </button>
            </div>
        </div>
      </div>
    </div>

    </section><!-- End Breadcrumbs -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-12">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <a href="#"
                      ><img src="<?php echo base_url()."web_files/";?>assets/img/aucjunction.png" width="220px"
                    /></a>
                    <!-- <h1>One Junction For All Auctions</h1> -->
                </div>

                <div class="swiper-slide">
                  <img src="<?php echo base_url()."web_files/";?>assets/img/portfolio/portfolio-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?php echo base_url()."web_files/";?>assets/img/portfolio/portfolio-3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          

        </div>

      </div>
    </section>
    <section id="hero" class="d-flex align-items-center">
     
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
           <a href="#"
            ><img src="<?php echo base_url()."web_files/";?>assets/img/aucjunction.png" width="220px"
          /></a>
          <h1>One Junction For All Auctions</h1>
        </div>
      </div>
      <div class="text-center">
        <a href="#about" class="btn-get-started scrollto">Start Auctioning</a>
      </div>
      
      <div class="container mt-5 ">
        <div class="row border border-dark">
            <div class="switch-field justify-content-center py-3">
              <input type="radio" id="radio-three" name="switch-two" onchange="window.location.href = '<?php echo base_url();?>BuyerAuction_details/index/TA';return false;" value="TA" checked/>
              <label for="radio-three">Today's Auctions</label>
              <input type="radio" id="radio-four" name="switch-two" onchange="window.location.href = '<?php echo base_url();?>BuyerAuction_details/index/AA';return false;" value="ALL" />
              <label for="radio-four">&nbsp;&nbsp;&nbsp;All Auctions&nbsp;&nbsp;&nbsp;&nbsp;</label>
              
          </div>
        </div>
          
      </div>
      
        <div class="row icon-boxes">
     
      <?php $ctr=1; foreach($sqldata1 as $row){?>
      <input type="hidden" id="<?php echo "ch-".$ctr; ?>" value="<?php echo $row->iauctionid; ?>">
      
        
    
        <div class="col-md-12 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box w-100">
            <div class="icon d-flex justify-content-center"><?php $img = unserialize($sqldata1[0]->imageupload)?>
	   
	   
	   
	   

<img class="model" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="100px" height="100px"></div>
            <h4 class="title d-flex justify-content-center"><a href=""></a></h4>
            <p class="description d-flex justify-content-center">MRP Price:<?php echo $row->imrp ?></p>
            <p class="description d-flex justify-content-center">Start Price:<?php echo $row->startaucprice ?></p>
            <p class="description d-flex justify-content-center">End Price:<?php echo $row->endaucprice ?></p>
    
             
            <div class="row">
            <button type="button" class="btn btn-primary btn-sm my-2" data-toggle="modal" data-target="#1">View Details</button>
            <?php if(get_cookie($row->iauctionid) == NULL){?>
            <button type="button" id="bt-<?php echo $ctr; ?>" class="btn btn-warning btn-sm" onclick="addtocart(<?php echo $ctr; ?>)"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to Cart</button>
             <?php }else{?>
               <button type="button" id="bt-<?php echo $ctr; ?>" class="btn btn-success btn-sm" onclick="addtocart(<?php echo $ctr; ?>)"><i class="fa fa-check" aria-hidden="true"></i> Added</button>
                 <?php }?>
            </div>
           
          </div>
        </div>
        
     


       

 
        <?php $ctr++; } ?>
    
       </div>
     
      
      
 <div class="row mb-5">
        <div class="col-12 p-5">
            <nav class="d-flex align-items-center justify-content-center">
              <ul class="pagination">
                <?php echo $links; ?>
              </ul>
          </nav>
        </div>
          
      </div>
      
    </div>
  </section>
  <div id="1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Auction Tittle</h4>
        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Auction Details </p>
      </div>
      <div class="modal-footer">
         
        </div>
     
    </div>

  </div>
</div>
  </main><!-- End #main -->
  <script>
  
  </script>
  
  