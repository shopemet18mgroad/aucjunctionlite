 <main id="main m-5">

    <section id="hero" class="d-flex align-items-center">
     
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    
        

      
      <div class="container mt-5 mb-5">
        <div class="row border border-dark">
   

	<center>  <div class="ab w-100" style="background-color:#2196f363;color:white; font-size:30px;" >BUYER DETAILS  
	<a  href="<?php echo base_url()."Buyer_buyereditprofile/index/".urldecode($sqldata1[0]->buysl_no);?>"><i class="fas fa-edit" style="font-size:28px;" ></i><a> </div></center>
	    
	
	

   <table class="table table-striped"  style="colorgrey;font-size8px;">
<tbody >
    <tr>
   <th scope="row">FULL NAME</th>
   <td><?php echo $sqldata1[0]->buyername ?></td>
 
	  </tr>
	 <br>
    <tr>
     
      <th scope="row">CONTACT NUMBER</th>
	  <td><?php echo $sqldata1[0]->buyercontactnumber ?></td>
      
    </tr><br>
    <tr>
     
      <th scope="row">AADHAAR NUMBER </th>
	  <td><?php echo $sqldata1[0]->buyerasdharnumber ?></td>
      
    </tr><br>
	
	<tr>
     
      <th scope="row">EMAIL ID </th>
	    <td><?php echo $sqldata1[0]->buyeremail ?></td>
      
    </tr>
	<tr>
     
      <th scope="row">ADDRESS</th>
	    <td><?php echo $sqldata1[0]->buyeraddress ?></td>
      
    </tr>
	<tr>
     
      <th scope="row">CITY</th>
	    <td><?php echo $sqldata1[0]->bcity ?></td>
      
    </tr>
	<tr>
     
      <th scope="row">STATE/UNION TERY</th>
	   <td><?php echo $sqldata1[0]->buyerstate ?></td>
      
    </tr>
	<tr>
     
      <th scope="row">COUNTRY</th>
	   <td><?php echo $sqldata1[0]->buyercountry ?></td>
      
    </tr>
	<tr>
     
      <th scope="row">PINCODE </th>
	   <td><?php echo $sqldata1[0]->buyerpincode ?></td>
      
    </tr>
	
	<tr>
     
      <th scope="row">CONTACT PERSON*</th>
	   <td><?php echo $sqldata1[0]->buyercontactperson ?></td>
      
    </tr>
	
	<tr>
     
      <th scope="row">AADHAR CARD<div style="font-size10px;colorred;">Click on image to view full image</div></th>
	   <td><?php $img = unserialize($sqldata1[0]->buyeradharcard)?>
<img class="model" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="100px" height="150px" data-toggle="modal" data-target="#exampleModalCenter"></td>
    
    </tr>
	<tr>
     
      <th scope="row">ADDRESS PROOF<div style="font-size10px;colorred;">Click on image to view full image</div></th>
	  <td><?php $img = unserialize($sqldata1[0]->addressproof)?>
<img class="model" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="100px" height="150px" data-toggle="modal" data-target="#exampleModal"></td>
      
   </tr>
	
	
	

  </tbody>
</table>
      </div>
          
      </div>
        
  

   </div>
   </section>
   </main>
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
	  <?php $img = unserialize($sqldata1[0]->addressproof)?>
<img class="model m-5" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="400px" height="250px">

 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>	


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
	  <?php $img = unserialize($sqldata1[0]->buyeradharcard)?>
<img class="model m-5" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="400px" height="250px">

 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
  </section>

  </main><!-- End #main -->










