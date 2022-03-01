 
 <main id="main">

    <section id="hero" class="d-flex align-items-center">
     
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    
        

      
      <div class="container mt-5 mb-5">
        <div class="row border border-dark">
 


	<center>  <div class="ab w-100" style="background-color:#2196f363;color:white; font-size:30px;" ><i><!--<?php //echo //$sqldata1[0]->role ?>--></i>AUCTION  DETAILS  </div></center>
	
   <table class="table" style="colorgrey;font-size15px;">
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
     
      <th scope="row">Inspection Date </th>
	    <td><?php echo $sqldata1[0]->iauctionid ?></td>
      
    </tr>
	<tr>
     
      <th scope="row">Current location </th>
	   <td><?php echo $sqldata1[0]->iauction_start ?></td>
      
    </tr>
	<tr>
     
      <th scope="row">Expected price </th>
	    <td><?php echo $sqldata1[0]->iauction_end ?></td>
      
    </tr>
	<tr>
     
      <th scope="row">Start  Auction Price </th>
	   <td><?php echo $sqldata1[0]->iemailid ?></td>
      
    </tr>
	
	
	
	<tr>
	
	<td colspan=2><center>  <div class="ab w-100" style="background-color:#2196f363;color:white; font-size:30px;" ><i><!--<?php //echo //$sqldata1[0]->role ?>--></i>LOT  DETAILS  </div></center></td>
	</tr>
	
	
	<tr>
     
      <th scope="row">Category </th>
	   <td><?php echo $sqldata1[0]->icategory ?></td>
      
    </tr>
	<tr>
     
      <th scope="row">Sub-category </th>
	   <td><?php echo $sqldata1[0]->isubcategory ?></td>
      
    </tr>
	
	<tr>
     
      <th scope="row">product Description </th>
	   <td><?php echo $sqldata1[0]->iproductdes ?></td>
      
    </tr>
	<tr>
     
      <th scope="row">Inspection Date </th>
	   <td><?php echo $sqldata1[0]->inspectiondate ?></td>
      
    </tr>
	
		<tr>
     
      <th scope="row">Current location </th>
	   <td><?php echo $sqldata1[0]->currentlocation ?></td>
      
    </tr>
	
		<tr>
     
      <th scope="row"> Expected price</th>
	   <td><?php echo $sqldata1[0]->imrp ?></td>
      
    </tr>
	
		<tr>
     
      <th scope="row"> Expected price</th>
	   <td><?php echo $sqldata1[0]->startaucprice ?></td>
      
    </tr>
	
		<tr>
     
      <th scope="row">entry free </th>
	   <td><?php echo $sqldata1[0]->endaucprice ?></td>
      
    </tr>
	
		<tr>
     
      <th scope="row">Start  Auction Price </th>
	   <td><?php echo $sqldata1[0]->entryfee ?></td>
      
    </tr>
	
	
	<tr>
     
      <th scope="row">End Auction Price </th>
	   <td><?php echo $sqldata1[0]->iauction_start ?></td>
      
    </tr>
	<tr>
     
      <th scope="row">Inspection date and time  </th>
	   <td><?php echo $sqldata1[0]->iauction_end ?></td>
      
    </tr>
	
	<tr>
     
      <th scope="row">Upload photos* </th>
	   <td><?php $img = unserialize($sqldata1[0]->imageupload)?>
	   
	   
	   
	   

<img class="model" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="200px" height="250px"  
 data-toggle="modal" data-target="#exampleModal">
	   
	   
	   
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
    
	  <?php foreach($sqldata1 as $sqldat){?> 
	  
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


