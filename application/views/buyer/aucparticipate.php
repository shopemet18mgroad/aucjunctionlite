
  <main id="main">
    <section class="h-100 mt-5 cart">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">My Reports</h3>
          
        </div>

       <?php if(count($mycomauc)){ $i=0; foreach($mycomauc as $mycom){$worldata = explode("|",$worl[$i]);?>

        <div class="card rounded-3 mb-4" style="font-family: sans-serif;">
          <div class="card-body p-4" style="font-family: sans-serif;">
            <div class="row d-flex justify-content-between align-items-center" style="font-family: sans-serif;">
             
            
              <div class="col-md-3 col-lg-3 col-xl-3" style="font-family: sans-serif;">
                <p class="lead fw-normal mb-2 text-muted" style="font-size:16px;">Auction ID: <?php echo $mycom->iauctionid; ?></p>
                <p><span class="text-muted">Date: <?php echo str_ireplace(".000000","",$mycom->iauction_end);?></span></p>
              </div>
              
              <div class="col-md-5 col-lg-5 col-xl-5 offset-lg-1" style="font-family: sans-serif;">
			  <h5 class="mb-0 text-muted"style="font-size:16px;font-family:sans-serif;">Winning Bid Value :<span style="color:black;font-size:18px;"> <b><?php  echo $worldata[3]; ?></b></span></h5><br>
        <h5 class="mb-0 text-muted"style="font-size:16px;">Auction Winner : <?php  echo $worldata[2]; ?></h5><br>
               <h5> <span class="text-muted">Result:</span>&nbsp;<span class="mb-0  " style="color:green;font-size:18px;font-family: sans-serif; "><b><?php echo $worldata[0];?></span></b></h5>
              </div>
              <div class="col-md-2 col-lg-2 col-xl-2 text-end">
                  <div class="row">
                    <!-- Button trigger modal -->
                     <button type="button" class="btn btn-primary btn-sm my-2" data-toggle="modal" data-target="#viewdetail-<?php echo $i; ?>">View Detail</button>
                       <!-- Button trigger modal -->
                       <button type="button" class="btn btn-danger btn-sm my-2" data-toggle="modal" data-target="#bidsummary-<?php echo $i; ?>">Bid Summary</button>
                       <!-- Button trigger modal -->
			
        
                  </div>
                 
               
              </div>
            </div>
            
          </div>
        </div>
   <?php $i++;}}?>
        

      </div>
    </div>
  </div>
</section>
    <!-- ======= Breadcrumbs ======= -->


  </main><!-- End #main -->
  
  
  
<?php if(count($mycomauc)){$i=0;foreach($mycomauc as $mycom){?>

<!-- Modal -->
<div class="modal fade" id="viewdetail-<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">View Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      
      
     <main id="main mt-5">

    <section id="hero" class="d-flex align-items-center">
     
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    
        

      
      <div class="container mb-5">
        <div class="">
        <table class="table table-striped" style="">
          <tbody>
            <tr>
            <th scope="row"> Auction Images</th>
	          <td  data-toggle="modal" data-target="#exampleModal"><?php $img = unserialize($mycom->imageupload)?>
	              <?php foreach($img as $sql) { ?>
        <img class="model" src="<?php echo base_url()."web_files/uploads/".$sql;?>" 
        alt="Chania" width="50px" height="50px">
            <?php } ?> 
            </td>  
          </tr>
            <tr>   
              <th scope="row">Category </th>
              <td><?php echo $mycom->icategory;?></td>
            </tr>
            <tr>
              <th scope="row">Sub-category </th>
              <td><?php  echo $mycom->isubcategory;?></td>
            </tr>
            <tr>
              <th scope="row">product Description  </th>
              <td style="word-break:break-all;"><?php  echo $mycom->iproductdes;?></td>
            </tr>
            <tr>
                <th scope="row">Auction Id </th>
                <td><?php  echo $mycom->iauctionid;?></td>  
              </tr>	
            <tr>
              <th scope="row"> Auction Start Time</th>
            <td>
			
			<?php $aucs = $mycom->iauction_start;
	   $temp = explode('.',$aucs);
       $aucs = $temp[0];
       echo  $aucs;
			
			?>
			
             
            </td>
          </tr>
          <tr>
              <th scope="row"> Auction End Time</th>
            <td>
			
			
			
               
			   
			   <?php $auce = $mycom->iauction_end; 
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
          <td>
		  
		  
		  <?php $auce1 =$mycom->inspectiondate; 
       $cool1 = explode('.',$auce1);
       $auce1 = $cool1[0];
       echo  $auce;	 
	  ?>
		  
		  
		  
		  
		  
          </td>
          </tr>
              <tr>
                <th scope="row">MRP <i class="fa fa-inr" style="font-size:18px"></i></th>
              <td><?php echo $mycom->imrp;?></td>
              </tr>
			  <tr>
              <th scope="row">Entry Fee </th>
            <td><?php echo $mycom->entryfee;?></td>
            </tr>
            <tr>
              <th scope="row"> Start  Auction Price</th>
              <td><?php echo $mycom->startaucprice;?></td>  
            </tr>
            <tr>
              <th scope="row">End Auction Price  </th>
            <td><?php echo $mycom->cbid;?></td> 
            </tr>
            
           
	      <tbody>
	    </table>
       </div>          
      </div>
    </div>
  </section>
  </main><!-- End #main -->                       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>
<?php $i++;}}?>

<!-- Modal -->
<?php if(count($mybid)){$i=0;foreach($mybid as $mybi){?>
<div class="modal fade" id="bidsummary-<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bid Summary</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-striped" style="">
          <tbody>
              <tr>   
              <th scope="row">My Bid </th>
               <th scope="row">Date & Time</th>
              </tr>
              <?php if(count($mybi)){ foreach ($mybi as $myb){?>
              <tr>   
              <td><?php echo $myb->bidvalue;?></td>
               <td><?php  echo str_ireplace(".000000","",$myb->Date_time);?></td>
              </tr>
               <?php }} ?>
            </tbody>
	      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
      </div>
    </div>
  </div>
</div>
<?php $i++;}}?>

<!-- Modal -->




  