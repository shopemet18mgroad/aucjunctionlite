 
 <main id="main">

    <section id="hero" class="d-flex align-items-center">
     
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    
        

      
      <div class="container mt-5 mb-5">
        <div class="row border border-dark">
 


	<center>  <div class="ab w-100" style="background-color:#2196f363;color:white; font-size:30px;" ><i><!--<?php //echo //$sqldata1[0]->role ?>--></i>AUCTION  DETAILS  </div></center>
	
   <table class="table table-striped" style="colorgrey;font-size15px;">
<tbody>
    <tr>   
   <th scope="row">Category </th>
   <td><?php echo $sqldata1[0]->icategory ?></td>
	  </tr>
	 <br>
    <tr>
     
      <th scope="row">Sub-category </th>
	  <td><?php echo $sqldata[0]->isubcategory ?></td>
      
    </tr><br>
	  <tr>
     
      <th scope="row" style="font-size:16px;word-break:break-all;">product Description  </th>
	  <td><?php echo $sqldata[0]->iproductdes ?></td>
      
    </tr><br>
    <tr>
     
      <th scope="row">product Name  </th>
	  <td><?php echo $sqldata[0]->iproductname ?></td>
      
    </tr><br>
	
	<tr>
     
      <th scope="row">Auction Id </th>
	    <td><?php echo $sqldata1[0]->iauctionid ?></td>
      
    </tr>
<tr>
     
      <th scope="row"> Auction Start and End Time</th>
	   <td><?php $aucs= $sqldata1[0]->iauction_start;
	   $temp = explode('.',$aucs);
       $aucs = $temp[0];
       echo  $aucs;	   
	   

	   ?>	   <br>to <br>
	   <?php $auce = $sqldata1[0]->iauction_end; 
       $cool = explode('.',$auce);
       $auce = $cool[0];
       echo  $auce;	 
	  ?>
	  </td>
	  
	  
    </tr>
	
	
	
	
	
	
	<tr>
	
	<td colspan=2><center>  <div class="ab w-100" style="background-color:#2196f363;color:white; font-size:30px;" ><i><!--<?php //echo //$sqldata1[0]->role ?>--></i>LOT  DETAILS  </div></center></td>
	</tr>
	
	
	
	
	<tr>
     
      <th scope="row">Inspection Till </th>
	 
       
	   <td><?php $insp= $sqldata[0]->inspectiondate;
	   $ter = explode('.',$insp);
       $insp = $ter[0];
       echo  $insp;	   
	   

	   ?>
	     
	   </td>
    </tr>
	
	<tr>
     
      <th scope="row">MRP <i class="fa fa-inr" style="font-size:18px"></i></th>
	   <td><?php echo $sqldata[0]->imrp ?></td>
      
    </tr>	
	
	
	
		<tr>
     
      <th scope="row">commission</th>
	   <td><?php echo $sqldata[0]->commission ?></td>
      
    </tr>
		<tr>
   
	  
	   </td>
       
    </tr>

	
	
	<tr>
     
      <th scope="row"> Auction Images </th>
	  
	  
	  
	
	  
	  	   <td><?php $img = unserialize($sqldata[0]->imageupload)?>
		   
		   
	<?php 	if($img==Null ){ ?>
	
	
	<?php echo "No Image"; ?>
	
			
	<?php 	}else{ ?>  
		    <?php foreach($img as $sql) { ?>
		   <img class="model" src="<?php echo base_url()."web_files/uploads/".$sql;?>" 
 alt="Chania" width="50px" height="50px" data-toggle="modal" data-target="#exampleModal">
	   
	     
	   
	   


 
 
 
		<?php } ?> 
		<?php } ?>
	   
	 
	   
	   </td>
	  
	  
	  
	  
	  
      
    </tr>
	<tbody>
	</table>
	        </div>
          
      </div>
        
  

     
    </div>
  </section>

  </main><!-- End #main -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="example"> AUCTION IMAGES</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
	  <?php foreach($sqldata as $sqldat){?> 
	  
	   <?php $img = unserialize($sqldat->imageupload);?>
	  
	  
	  <?php foreach($img as $sql){?> 
	  
<div class="col-12">
<img class="m-5" src="<?php echo base_url()."web_files/uploads/".$sql;?>" 
 alt="Chania" width="300px" height="250px">
</div>		
		
	  <?php } ?>	
		
	  <?php } ?>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


