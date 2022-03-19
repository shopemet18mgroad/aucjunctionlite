
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
            <?php 
                if($checked == "TA"){
                    $chstata = "checked";
                    $chstaaa = "";
                }else{
                    $chstata = "";
                    $chstaaa = "checked";
                }
            ?>
            <div class="switch-field justify-content-center py-3">
              <input type="radio" id="radio-three" name="switch-two" onchange="window.location.href = '<?php echo base_url();?>BuyerAuction_fashion/index/TA';return false;" value="TA" <?php echo $chstata;?>/>
              <label for="radio-three">Today's Auctions</label>
              <input type="radio" id="radio-four" name="switch-two" onchange="window.location.href = '<?php echo base_url();?>BuyerAuction_fashion/index/AA';return false;" value="ALL" <?php echo $chstaaa;?> />
              <label for="radio-four">&nbsp;&nbsp;&nbsp;All Auctions&nbsp;&nbsp;&nbsp;&nbsp;</label>
              
          </div>
        </div>
          
      </div>
      
        <div class="row icon-boxes">
     
      <?php $ctr=1; foreach($sqldata1 as $row){?>
	  
  <?php $meg = $row->isubcategory ?>
      
   <?php if($meg == 'Fashion'){
	   ?>
	  
      <input type="hidden" id="<?php echo "ch-".$ctr; ?>" value="<?php echo $row->iauctionid; ?>">
	  
	  
        
    
        <div class="col-md-12 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box w-100">
            <div class="icon d-flex justify-content-center"><?php $img = unserialize($row->imageupload)?>
	   
	   
	   
	   

<img class="model" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="100px" height="100px"></div>
            <h4 class="title d-flex justify-content-center"><a href=""></a></h4>
			<p class="description d-flex justify-content-center"><b>Product Name:&nbsp;&nbsp;</b><?php echo $row->iproductname ?></p>
            <p class="description d-flex justify-content-center"><b>MRP Price: </b>&nbsp;<i class="fa fa-inr mt-2" style="font-size:16px"></i><?php echo $row->imrp ?></p>
      <p class="description d-flex justify-content-center"><b>Start Price:</b>&nbsp;&nbsp;<?php echo $row->startaucprice ?></p>
            <p class="description d-flex justify-content-center"><b>Auction Id:</b><?php echo $row->iauctionid ?></p>
			  <p class="description d-flex justify-content-center"><b>Product Description:&nbsp;&nbsp;</b><?php echo $row->isubcategory ?></p>
    
                      <div class="row">
            <button type="button" class="btn btn-primary btn-sm my-2" data-toggle="modal" data-target="#1-<?php echo $ctr; ?>">View Details</button>
            <?php if(get_cookie($row->iauctionid) == NULL){?>
            <button type="button" id="bt-<?php echo $ctr; ?>" class="btn btn-warning btn-sm" onclick="addtocart(<?php echo $ctr; ?>)"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to Cart</button>
             <?php }else{?>
               <button type="button" id="bt-<?php echo $ctr; ?>" class="btn btn-success btn-sm" onclick="addtocart(<?php echo $ctr; ?>)"><i class="fa fa-check" aria-hidden="true"></i> Added</button>
                 <?php }?>
            </div>
          </div>
        </div>
        
     

<?php $ctr++; } ?>
		<?php } ?>
    
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
  
    <?php $count = 1 ?>
      <?php foreach($sqldata1 as $row){?>
	  <?php $meg = $row->isubcategory ?>
      
   <?php if($meg == 'Fashion'){
	   ?>
  
  <div id="1-<?php echo $count; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">








    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
<center>  <div class="ab w-100" style="background-color:#2196f363;color:white; font-size:20px;" ><i><!--<?php //echo //$sqldata1[0]->role ?>--></i>AUCTION  DETAILS  </div></center>
        <button type="button" class="btn btn-outline-info" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
       
		
	
	
   <table class="table table-striped" style="colorgrey;font-size15px;margin-top:-70px;">
<tbody>
	<tr>
     
      <th scope="row"> Auction Images</th>
	  
	   <td><?php $img = unserialize($row->imageupload)?>
	   
	      <?php foreach($img as $sql) { ?>
	   
	   

<img class="model" src="<?php echo base_url()."web_files/uploads/".$sql;?>" 
 alt="Chania" width="50px" height="50px">
 
 
 
		<?php } ?> 
	   
	   
	   
	   </td>
      
    </tr>
    <tr>   
   <th scope="row">Category </th>
   <td><?php echo $row->icategory ?></td>
	  </tr>
	 <br>
    <tr>
     
      <th scope="row">Sub-category </th>
	  <td><?php echo $row->isubcategory ?></td>
      
    </tr><br>
    <tr>
     
      <th scope="row">product Description  </th>
	  <td><?php echo $row->iproductdes ?></td>
      
    </tr><br>
	
	<tr>
     
      <th scope="row">Auction Id </th>
	    <td><?php echo $row->iauctionid ?></td>
      
    </tr>
	
	
	<tr>
     
      <th scope="row"> Auction Start and End Time</th>
	   <td><?php $ab= $row->iauction_start;
	   $abc = explode('.',$ab);
       $ab = $abc[0];
       echo  $ab;	   
	   

	   ?>	   <br>to	   <br>
	   <?php $ba = $row->iauction_end; 
       $cba = explode('.',$ba);
       $ba = $cba[0];
       echo  $ba;	 
	  ?>
	  </td>
	  
	  
    </tr>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<tr>
	
	<td colspan=2><center>  <div class="ab w-100" style="background-color:#2196f363;color:white; font-size:20px;" ><i><!--<?php //echo //$sqldata1[0]->role ?>--></i>LOT  DETAILS  </div></center></td>
	</tr>
	
	

	
			<tr>
     
      <th scope="row">Inspection Date </th>

	   
	   <td><?php $insp1= $row->inspectiondate;
	   $ter1 = explode('.',$insp1);
       $insp1 = $ter1[0];
       echo  $insp1;	   
	   ?>
	     
	   </td>
      
    </tr>
	
		
		
		
		
		
		
		
		
		
		<tr>
          <th scope="row">MRP <i class="fa fa-inr" style="font-size:18px"></i></th>
	   <td><?php echo $row->imrp ?></td>
      
    </tr>
	
		<tr>
     
      <th scope="row"> Start  Auction Price</th>
	   <td><?php echo $row->startaucprice ?></td>
      
    </tr>
	
		<tr>
     
      <th scope="row">End Auction Price  </th>
	   <td><?php echo $row->endaucprice ?></td>
      
    </tr>
	
		<tr>
     
      <th scope="row">Entry Fee </th>
	   <td><?php echo $row->entryfee ?></td>
      
    </tr>
	
	
	
	
	
		<tr>
     
      <th scope="row">Inspection date and time  </th>
	     
	   <td><?php $inse11= $row->iauction_end ;
	   $ters22 = explode('.',$inse11);
       $inse11 = $ters22[0];
       echo  $inse11;	   
	   

	   ?>
	   
	      	   <br>to	   <br>
	   <?php $aucn1 = $row->iauction_start; 
       $coolee = explode('.',$aucn1);
       $aucn1 = $coolee[0];
       echo  $aucn1;	 
	  ?>
	  </td>
	  
	   </td>
       
    </tr>
	
	
	
	
	
	
	
	
	
	
	
	
	<tbody>
	</table>
		
		
		
		
      </div>
      <div class="modal-footer">
         
        </div>
     
    </div>

  </div>
</div>
    <?php $count++ ?>

 
        <?php } ?>
		<?php } ?>




  </main><!-- End #main -->
  <script>
  
  </script>
  
  