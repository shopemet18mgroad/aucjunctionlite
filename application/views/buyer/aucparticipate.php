
  <main id="main">
    <section class="h-100 mt-5 cart">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">My Reports</h3>
          
        </div>

       

        <div class="card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
             
            
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2" style="font-size:18px;">Auction ID:<br>22/feb/2020/98/78</p>
                <p><span class="text-muted">Date:23-23-2909</span></p>
              </div>
              
              <div class="col-md-5 col-lg-5 col-xl-5 offset-lg-1">
			  <h5 class="mb-0"style="font-size:18px;">Auction Name :Scopio</h5><br>
                Result:<span class="mb-0" style="color:green;font-size:18px; ">Won</span>
              </div>
              <div class="col-md-2 col-lg-2 col-xl-2 text-end">
                  <div class="row">
                    <!-- Button trigger modal -->
                     <button type="button" class="btn btn-primary btn-sm my-2" data-toggle="modal" data-target="#viewdetail">View Detail</button>
                       <!-- Button trigger modal -->
                       <button type="button" class="btn btn-danger btn-sm my-2" data-toggle="modal" data-target="#bidsummary">Bid Summary</button>
                       <!-- Button trigger modal -->
			
        
                  </div>
                 
               
              </div>
            </div>
            
          </div>
        </div>
   
        

      </div>
    </div>
  </div>
</section>
    <!-- ======= Breadcrumbs ======= -->


  </main><!-- End #main -->
  
  
  


<!-- Modal -->
<div class="modal fade" id="viewdetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
        <div class="row border border-dark">
          
			
	
	
	<center>  <div class="ab w-100" style="background-color:#2196f363;color:white; font-size:30px;" > <?php echo $sqldata1[0]->role ?>    DETAILS  
	 </div></center>
	
	
	
	
	
	
	
	
	
	
   <table class="table table-striped" style="font-size:12px;">
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
    	<?php $role = $sqldata1[0]->role ?>
	
	<?php if($role == "INDIVIDUAL" ){ ?>
  
	  
	  <th scope="row">AADHAAR NUMBER</th>
	  <td>
	  
	  
  <?php $iadharnumber = $sqldata1[0]->iadharnumber ?>
		   
		<?php if ($iadharnumber == Null) { ?>
			 
		   
		  
<?php	 echo "NA" ; ?>

 
		<?php } else { ?>
			
			<?php echo "$iadharnumber" ; ?>
		
	
			
			
	<?php	} ?>

	  

	  
	  
	  </td>
      
    </tr>
		<?php	} ?>
	
	
	<br>
	
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
	
	
	<?php $role = $sqldata1[0]->role ?>
	
	<?php if($role == "COMPANY" ){ ?>
		
	
	
	
	
	<tr>   

   
   
   	  <th scope="row">GST NUMBER <div style="font-size:10px;color:#FF4500;">(applicable ony for company)</div></th>

<td>

  <?php $gst = $sqldata1[0]->igstnumber ?>
		   
		<?php if ($gst == Null) { ?>
			 
		   
		  
<?php	 echo "NA" ; ?>

 
		<?php } else { ?>
			
			<?php echo "$gst" ; ?>
		
	
			
			
	



	</td>
  
	  </tr>
	  <?php }?>
	  
	 
	  <tr>   
   <th scope="row">COMPANY TYPE  ( Applicable ony for company)<div style="font-size:10px;color:#FF4500;">( Applicable ony for company)</div> </th>
   <td>
   
    <?php $gst1 = $sqldata1[0]->itypeseller ?>
		   
		<?php if ($gst1 == Null) { ?>
			 
		   
		  
<?php	 echo "NA" ; ?>

 
		<?php } else { ?>
			
			<?php echo "$gst1" ; ?>
   
   <?php	} ?>

   
   </td>
   
   
   
	  </tr>
	
	
	
			  <tr>   
   <th scope="row">COMPANY NAME<div style="font-size:10px;color:#FF4500;">( Applicable ony for company)</div> </th>
   <td>
   
    <?php $gst2 = $sqldata1[0]->icompanyname ?>
		   
		<?php if ($gst2 == Null) { ?>
			 
		   
		  
<?php	 echo "NA" ; ?>

 
		<?php } else { ?>
			
			<?php echo "$gst2" ; ?>
   
   <?php	} ?>

   
   </td>
   
   
   
	  </tr>
	
	
	<?php	} ?>
	
	
	
	
	
	<?php $role = $sqldata1[0]->role ?>
	
	<?php if($role == "INDIVIDUAL" ){ ?>
	
	
	
	
	
	<tr>
     
      <th scope="row">ADDRESS PROOF<div style="font-size:10px;color:#FF4500;">Click on image to view full image</div></th>
	   <td>
	 
	
	   
	   <?php $img = unserialize($sqldata1[0]->iaddresprof)?>
		   
		<?php if ($img == Null) {
			 
		   
		   echo "NA"

 ?>  
 
		<?php } else { ?>
			
			
			<img class="model" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="50px" height="50px"  style="border-radius:50%"
 data-toggle="modal" data-target="#exampleModal">
			
			
			
	<?php	} ?>
 
 </td>
    
    </tr>
	<?php	} ?>
	
	
	<?php $role = $sqldata1[0]->role ?>
	
	<?php if($role == "INDIVIDUAL" ){ ?>
	
	<tr>
     
      <th scope="row">AADHAAR CARD<div style="font-size:10px;color:#FF4500;">Click on image to view full image</div></th>


<td>

 <?php $img = unserialize($sqldata1[0]->iadharcardfile)?>
		   
		<?php if ($img == Null) {
			 
		   
		   echo "NA"

 ?>  
 
		<?php } else { ?>
			
			
			<img class="model" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="50px" height="50px" style="border-radius:50%"  
 data-toggle="modal" data-target="#exampleModalCenter">
			
			
			
	<?php	} ?>


	</td>
      
   </tr>
	
	<?php	} ?>
	
  </tbody>
</table>
        </div>
          
      </div>
        
  

     
    </div>
  </section>

  </main><!-- End #main -->  
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      

                
                
                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="bidsummary" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bid Summary</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Auction ID:<br>22/feb/2020/98/78</p>
                <p><span class="text-muted">Date:23-23-2909<br>Auction Name :Scopio</h5><br>
                Result:<span class="mb-0" style="color:green;font-size:18px; ">Won</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="bidwinner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bid Winner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     Auction ID:<br>22/feb/2020/98/78</p>
                <p><span class="text-muted">Date:23-23-2909<br>Auction Name :Scopio</h5><br>
                Result:<span class="mb-0" style="color:green;font-size:18px; ">Won</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



  