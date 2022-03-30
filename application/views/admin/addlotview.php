 
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
	  <td><?php echo $sqldata1[0]->isubcategory ?></td>
      
    </tr><br>
    <tr>
     
      <th scope="row">product Description  </th>
	  <td><?php echo $sqldata1[0]->iproductdes ?></td>
      
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
	   

	   ?>	   <br>to	   <br>
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
     
      <th scope="row">Inspection Date </th>
	 
       
	   <td><?php $insp= $sqldata1[0]->inspectiondate;
	   $ter = explode('.',$insp);
       $insp = $ter[0];
       echo  $insp;	   
	   

	   ?>
	     
	   </td>
    </tr>
	
	<tr>
     
      <th scope="row">MRP <i class="fa fa-inr" style="font-size:18px"></i></th>
	   <td><?php echo $sqldata1[0]->imrp ?></td>
      
    </tr>	
	
	
	
		<tr>
     
      <th scope="row">entry free </th>
	   <td><?php echo $sqldata1[0]->endaucprice ?></td>
      
    </tr>
		<tr>
     
      <th scope="row">Inspection date and time  </th>
	     
	   <td><?php $inse= $sqldata1[0]->iauction_end ;
	   $ters = explode('.',$inse);
       $inse = $ters[0];
       echo  $inse;	   
	   

	   ?>
	   
	      	   <br>to<br>
	   <?php $aucn = $sqldata1[0]->iauction_start; 
       $coole = explode('.',$aucn);
       $aucn = $coole[0];
       echo  $aucn;	 
	  ?>
	  </td>
	  
	   </td>
       
    </tr>

	
	
	<tr>
     
      <th scope="row">Upload photos* </th>

	   <td>  <?php $img = unserialize($sqldata1[0]->imageupload);?>
	  
	  
	  <?php foreach($img as $sql){?>

	   <td><?php $img = unserialize($sqldata1[0]->imageupload)?>

	   
	   
	   
	   

<img class="model" src="<?php echo base_url()."web_files/uploads/".$sql;?>" 
 alt="Chania" width="50px" height="50px" data-toggle="modal" data-target="#exampleModal">

<img class="model" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="50px" height="50px">
	   

	   
	   
	  <?php }?>
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
        <h5 class="modal-title" id="example">IMAGES</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
	 
	  
	   <?php $img = unserialize($sqldata1[0]->imageupload);?>
	  
	  
	  <?php foreach($img as $sql){?> 
	  
<div class="col-12">
<img class="m-5" src="<?php echo base_url()."web_files/uploads/".$sql;?>" 
 alt="Chania" width="300px" height="250px">
</div>		
		
	  <?php } ?>	
		
	
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


