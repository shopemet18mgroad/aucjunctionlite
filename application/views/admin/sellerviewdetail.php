
 



    <div class="container-fluid card col-md-8 mt-5 mb-5">
	<center>  <div class="ab w-100" style="background-color:#2196f363;color:white; font-size:30px;" ><i><?php echo $sqldata1[0]->role ?>&nbsp; DETAILS </i>  </div></center>
	
   <table class="table" style="color:grey;font-size:8px;">
<tbody>
    <tr>   
   <td>FULL NAME   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   :</td>
   <td><?php echo $sqldata1[0]->iname ?></td>
	  </tr>
	 <br>
    <tr>
     
      <td>CONTACT NUMBER &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
	  <td><?php echo $sqldata1[0]->icontactnumber ?></td>
      
    </tr><br>
    <tr>
     
      <td>AADHAAR NUMBER &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
	  <td><?php echo $sqldata1[0]->iadharnumber ?></td>
      
    </tr><br>
	
	<tr>
     
      <td>EMAIL ID :</td>
	    <td><?php echo $sqldata1[0]->iemailid ?></td>
      
    </tr>
	<tr>
     
      <td>ADDRESS &nbsp;&nbsp;&nbsp;&nbsp;:</td>
	    <td><?php echo $sqldata1[0]->iaddres ?></td>
      
    </tr>
	
	<tr>
     
      <td>STATE/UNION TERY &nbsp;&nbsp;&nbsp;:</td>
	   <td><?php echo $sqldata1[0]->istate ?></td>
      
    </tr>
	<tr>
     
      <td>COUNTRY &nbsp;&nbsp;&nbsp;:</td>
	   <td><?php echo $sqldata1[0]->icountry ?></td>
      
    </tr>
	<tr>
     
      <td>PINCODE &nbsp;&nbsp;&nbsp;&nbsp; :</td>
	   <td><?php echo $sqldata1[0]->ipincode ?></td>
      
    </tr>
	
	<tr>
     
      <td>CONTACT PERSON* &nbsp;&nbsp;&nbsp;&nbsp;:</td>
	   <td><?php echo $sqldata1[0]->icontactperson ?></td>
      
    </tr>
	<tr>   
   <td>GST NUMBER <div style="font-size:10px;color:red;">( applicable ony for company)</div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   :</td>
   <td><?php echo $sqldata1[0]->igstnumber ?></td>
	  </tr>
	  <tr>   
   <td>COMPANY TYPE  ( Applicable ony for company)<div style="font-size:10px;color:red;">( Applicable ony for company)</div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   :</td>
   <td><?php echo $sqldata1[0]->itypeseller ?></td>
	  </tr>
	
	
	<tr>
     
      <td>ADDRESS PROOF &nbsp;&nbsp;&nbsp;&nbsp;:<div style="font-size:10px;color:red;">Click on image to view full image</div></td>
	   <td><?php $img = unserialize($sqldata1[0]->iaddresprof)?>
<img class="model" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="200px" height="250px"  
 data-toggle="modal" data-target="#exampleModal"></td>
    
    </tr>
	<tr>
     
      <td>AADHAAR CARD &nbsp;&nbsp;&nbsp;&nbsp;:<div style="font-size:10px;color:red;">Click on image to view full image</div></td>


<td>	
 
 
 
 
 <?php $img = unserialize($sqldata1[0]->iadharcardfile)?>
<img class="" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="200px" height="250px"     
 data-toggle="modal" data-target="#exampleModalCenter">

	</td>
      
   </tr>
	
	
	
  </tbody>
</table>
</div>
<!-- Button trigger modal -->


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

