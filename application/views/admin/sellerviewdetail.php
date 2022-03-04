
 
 <main id="main">

    <section id="hero" class="d-flex align-items-center">
     
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    
        

      
      <div class="container mt-5 mb-5">
        <div class="row border border-dark">
          
			<center>  <div class="ab w-100" style="background-color:#2196f363;color:white; font-size:30px;" ><i><?php echo $sqldata1[0]->role ?>&nbsp; DETAILS </i>  </div></center>
	
   <table class="table table-striped" style="color:grey;font-size:15px;margin:2px;">
<tbody>
    <tr>   
   
   	  <th scope="row">FULL NAME</th>
   <td><?php echo $sqldata1[0]->iname ?></td>
	  </tr>
	 <br>
    <tr>
   
	  
	  <th scope="row">CONTACT NUMBER</th>
	  <td><?php echo $sqldata1[0]->icontactnumber ?></td>
      
    </tr><br>
    <tr>
    
  
	  
	  <th scope="row">AADHAAR NUMBER</th>
	  <td>
	  
	  
  <?php $iadharnumber = $sqldata1[0]->iadharnumber ?>
		   
		<?php if ($iadharnumber == Null) { ?>
			 
		   
		  
<?php	 echo "NA" ; ?>

 
		<?php } else { ?>
			
			<?php echo "$iadharnumber" ; ?>
		
	
			
			
	<?php	} ?>

	  

	  
	  
	  </td>
      
    </tr><br>
	
	<tr>
   
	  <th scope="row">EMAIL ID</th>
	    <td><?php echo $sqldata1[0]->iemailid ?></td>
      
    </tr>
	<tr>
     
   
	  <th scope="row">ADDRESS</th>
	    <td><?php echo $sqldata1[0]->iaddres ?></td>
      
    </tr>
	
	<tr>
     
   
	  <th scope="row">STATE/UNION TERY </th>
	   <td><?php echo $sqldata1[0]->istate ?></td>
      
    </tr>
	<tr>
    
	  <th scope="row">COUNTRY</th>
	   <td><?php echo $sqldata1[0]->icountry ?></td>
      
    </tr>
	<tr>
     
   
	  <th scope="row">PINCODE</th>
	   <td><?php echo $sqldata1[0]->ipincode ?></td>
      
    </tr>
	
	<tr>
     
     
	  <th scope="row">CONTACT PERSON*</th>
	   <td><?php echo $sqldata1[0]->icontactperson ?></td>
      
    </tr>
	<tr>   

   
   
   	  <th scope="row">GST NUMBER <div style="font-size:10px;color:red;">( applicable ony for company)</div></th>

<td>

  <?php $gst = $sqldata1[0]->igstnumber ?>
		   
		<?php if ($gst == Null) { ?>
			 
		   
		  
<?php	 echo "NA" ; ?>

 
		<?php } else { ?>
			
			<?php echo "$gst" ; ?>
		
	
			
			
	<?php	} ?>



	</td>
  
	  </tr>
	  
	 
	  <tr>   
   <th scope="row">COMPANY TYPE  ( Applicable ony for company)<div style="font-size:10px;color:red;">( Applicable ony for company)</div> </th>
   <td><?php echo $sqldata1[0]->itypeseller ?></td>
	  </tr>
	
	
	<tr>
     
      <th scope="row">ADDRESS PROOF<div style="font-size:10px;color:red;">Click on image to view full image</div></th>
	   <td>
	 
	
	   
	   <?php $img = unserialize($sqldata1[0]->iaddresprof)?>
		   
		<?php if ($img == Null) {
			 
		   
		   echo "NA"

 ?>  
 
		<?php } else { ?>
			
			
			<img class="model" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="200px" height="250px"  
 data-toggle="modal" data-target="#exampleModal">
			
			
			
	<?php	} ?>
 
 </td>
    
    </tr>
	<tr>
     
      <th scope="row">AADHAAR CARD<div style="font-size:10px;color:red;">Click on image to view full image</div></th>


<td>

 <?php $img = unserialize($sqldata1[0]->iadharcardfile)?>
		   
		<?php if ($img == Null) {
			 
		   
		   echo "NA"

 ?>  
 
		<?php } else { ?>
			
			
			<img class="model" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="200px" height="250px"  
 data-toggle="modal" data-target="#exampleModal">
			
			
			
	<?php	} ?>


	</td>
      
   </tr>
	
	
	
  </tbody>
</table>
        </div>
          
      </div>
        
  

     
    </div>
  </section>

  </main><!-- End #main -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">AADHAAR CARD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
	  
	   
 <?php $img = unserialize($sqldata1[0]->iadharcardfile)?>
<img class="m-5" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="400px" height="250px">
		
		
		
		
		
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ADDRESS PROOF</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
	  
	   
 <?php $img = unserialize($sqldata1[0]->iaddresprof)?>
<img class="m-5" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="400px" height="250px">
		
		
		
		
		
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

