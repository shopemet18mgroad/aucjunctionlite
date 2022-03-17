<?php 
if($checked == "ALL"){
    $all = "checked";
    $live = "";
}else{
    $all = "";
    $live = "checked";
}
?>

  <main id="main">
    <section class="h-100 mt-5 cart">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">My Auctions</h3>
          
        </div>
        <div class="container mt-5 mb-2">
        <div class="row border border-dark">
            <div class="switch-field justify-content-center py-3">
              <input type="radio" id="radio-three" name="switch-two" onchange="window.location.href = '<?php echo base_url();?>BuyerAuction_myauc';return false;" value="ALL" <?php echo $all;?>/>
              <label for="radio-three">All Auctions</label>
              <input type="radio" id="radio-four" name="switch-two" onchange="window.location.href = '<?php echo base_url();?>BuyerAuction_myauc/live';return false;" value="LIVE" <?php echo $live;?>/>
              <label for="radio-four">&nbsp;&nbsp;&nbsp;Live Auctions&nbsp;&nbsp;&nbsp;&nbsp;</label>
              
          </div>
        </div>
          
      </div>
<?php if(count($allaucdata)){?>
       <?php $total = 0; $ctr = 1; foreach($allaucdata as $allauc){ $img = unserialize($allauc[0]->imageupload);?>

        <div class="card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img src="<?php echo base_url()."web_files/uploads/".$img[0];?>"
                  class="img-fluid rounded-3" alt="Cotton T-shirt">
              </div>
              <div class="col-md-7 col-lg-7 col-xl-7">
                <p class="lead fw-normal mb-2 text-primary"><?php echo $allauc[0]->icategory;?></p>
				 <p><span class="text-primary">Product Name: </span><?php echo $allauc[0]->iproductname ;?><span></p>
                <p><span class="text-primary">Auction id: </span><?php echo $allauc[0]->iauctionid;?><span></p>
                <p><span class="text-primary">Auction MRP: </span><?php echo $allauc[0]->imrp;?><span></p>
                <p><span class="text-primary">Auction Start: </span><?php echo $allauc[0]->startaucprice;?><span></p>
				 <p><span class="text-primary">Auction End: </span><?php echo $allauc[0]->endaucprice;?><span></p>
				
				<button type="button" class="btn btn-primary btn-sm my-2" data-toggle="modal" data-target="#1-<?php echo $ctr; ?>">View Details</button>
              </div>
              
             
              <div class="col-md-3 col-lg-3 col-xl-3 d-flex">
             

               
              </div>
            </div>
          </div>
        </div>
        <?php $ctr++;}?>
       <?php }else{?>
        <div class="card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-12 col-lg-12 col-xl-12">
                <p>You Dont Have any active Auctions<p>
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
    <?php $count = 1 ?>
   <?php foreach($allaucdata as $row){?>
  
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
	   <td><?php $img = unserialize($row[0]->imageupload)?>
	   

<img class="model" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="50px" height="50px">
 
	   
	   </td>
      
    </tr>
    <tr>   
   <th scope="row">Category </th>
   <td><?php echo $row[0]->icategory ?></td>
	  </tr>
	 <br>
    <tr>
     
      <th scope="row">Sub-category </th>
	  <td><?php echo $row[0]->isubcategory ?></td>
      
    </tr><br>
    <tr>
     
      <th scope="row">product Description  </th>
	  <td><?php echo $row[0]->iproductdes ?></td>
      
    </tr><br>
	
	<tr>
     
      <th scope="row">Auction Id </th>
	    <td><?php echo $row[0]->iauctionid ?></td>
      
    </tr>
	<tr>
     
      <th scope="row"> Auction Start and End Time</th>
	   <td><?php $aucs= $row[0]->iauction_start;
	   $temp = explode('.',$aucs);
       $aucs = $temp[0];
       echo  $aucs;	   
	   

	   ?>	   <br>to	   <br>
	   <?php $auce = $row[0]->iauction_end; 
       $cool = explode('.',$auce);
       $auce = $cool[0];
       echo  $auce;	 
	  ?>
	  </td>
	  
	  
    </tr>
	
	<tr>
	
	<td colspan=2><center>  <div class="ab w-100" style="background-color:#2196f363;color:white; font-size:20px;" ><i><!--<?php //echo //$sqldata1[0]->role ?>--></i>LOT  DETAILS  </div></center></td>
	</tr>
	
	
	<tr>
     
      <th scope="row">Inspection Date </th>

	   
	   <td><?php $insp= $row[0]->inspectiondate;
	   $ter = explode('.',$insp);
       $insp = $ter[0];
       echo  $insp;	   
	   

	   ?>
	     
	   </td>
      
    </tr>
	
		
		<tr>
     
      <th scope="row">MRP <i class="fa fa-inr" style="font-size:18px"></i></th>
	   <td><?php echo $row[0]->imrp ?></td>
      
    </tr>
	
		<!--<tr>
     
      <th scope="row"> Start  Auction Price</th>
	   <td><?php //echo $row->startaucprice ?></td>
      
    </tr>
	
		<tr>
     
      <th scope="row">End Auction Price  </th>
	   <td><?php //echo $row->endaucprice ?></td>
      
    </tr> 
	
		<tr>-->
     
      <th scope="row">Entry Fee </th>
	   <td><?php echo $row[0]->entryfee ?></td>
      
    </tr>
	
	
	
	<tr>
     
      <th scope="row">Inspection date and time  </th>
	     
	   <td><?php $inse= $row[0]->iauction_end ;
	   $ters = explode('.',$inse);
       $inse = $ters[0];
       echo  $inse;	   
	   

	   ?>
	   
	      	   <br>to	   <br>
	   <?php $aucn = $row[0]->iauction_start; 
       $coole = explode('.',$aucn);
       $aucn = $coole[0];
       echo  $aucn;	 
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