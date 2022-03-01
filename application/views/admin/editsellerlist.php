<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <!-- <section class="breadcrumbs">
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

    </section> -->
    
    <!-- End Breadcrumbs -->
    <!-- <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-12">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <a href="#"
                      ><img src="assets/img/aucjunction.png" width="220px"
                    /></a>
                   
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          

        </div>

      </div>
    </section> -->
    <section id="hero" class="d-flex align-items-center">
     
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center mt-5">
                <div class="col-xl-7 col-lg-9 text-center">
           <a href="#"
            ><img src="<?php echo base_url()."web_files/";?>assets/img/aucjunction.png" width="220px"
          /></a>
        </div>

        </div>
        
      <!-- <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
           <a href="#"
            ><img src="assets/img/aucjunction.png" width="220px"
          /></a>
          <h1>One Junction For All Auctions</h1>
        </div>
      </div>
      <div class="text-center">
        <a href="#about" class="btn-get-started scrollto">Start Auctioning</a>
      </div> -->
      
   <!--    <div class="container mt-5 ">
        <div class="row border border-dark">
            <div class="switch-field justify-content-center py-3">
              <input type="radio" id="radio-three" name="switch-two" value="yes" checked/>
              <label for="radio-three">Participate Auctions</label>
              <input type="radio" id="radio-four" name="switch-two" value="maybe" />
              <label for="radio-four">&nbsp;&nbsp;&nbsp;My Auctions&nbsp;&nbsp;&nbsp;&nbsp;</label>
              
          </div>
        </div>
          
      </div> -->
        
      <div class="row ">
        <table class="table table-striped">
  <thead>
  
  
  
    <tr>
      <th scope="col">Sl.No.</th>
      <th scope="col"> Name</th>
      <th scope="col">AADHAAR NUMBER*</th>
      <th scope="col">EMAIL</th>
      <th scope="col">ROLE</th>
      <th scope="col"> ACTION</th>
    </tr>
    
    
    
    
  </thead>
  <tbody>
      <?php  $count = 1;?>
					  
	<?php foreach($data as $row){?>
					  
                        <tr>
						
						
						 <td data-label="Sl.No.">  <?php echo $count;?> </td>
						 
						 
						 
                           <td data-label="Name"><?php echo $row->iname ?></td>
                          <td data-label="Adhar Number*"><?php echo $row->iadharnumber ?> 

						  </td>
                        <td data-label="EMAIL"><?php echo $row->iemailid ?></td>
                        
                         
						    <td data-label="ROLE"><?php echo $row->role ?> 

						  </td>
						  
						
						  <td>
						  
						  
						  
						<a href ="<?php echo base_url()."Admin_editseller/index/".urldecode($row->sl_no);?>"><i class="fa fa-edit m-2" style="font-size:18px;color:blue;"></i></a>
						
						<a href ="<?php echo base_url()."Admin_sellerviewdetail/index/".urldecode($row->sl_no);?>"><i class="fa fa-eye m-2" style="font-size:18px;color:grey"></i></a>
						
						<a href ="<?php echo base_url()."Admin_editsellerlist/seller_delete/".urldecode($row->sl_no);?>">
						<i class="fa fa-trash m-2" style="font-size:18px;color:red"></i></a>
				
						
						
						
						
						
						
                          </td>
                        </tr>
						
			<?php $count++;?>
						
	<?php }?>    
                
                      </tbody>
  </tbody>
</table>
        

      </div>

      <div class="row mb-5">
        <div class="col-12 p-5">
            <nav class="d-flex align-items-center justify-content-center">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
          </nav>
        </div>
          
      </div>
    </div>
  </section>

  </main><!-- End #main -->