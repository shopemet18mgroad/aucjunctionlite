
 



    <div class="container-fluid card col-md-8 mt-5 mb-5">
	<center>  <div class="ab w-100" style="background-color:#2196f363;color:white; font-size:30px;" ><i><!--<?php //echo //$sqldata1[0]->role ?>--></i>AUCTION  DETAILS  </div></center>
	
   <table class="table" style="color:grey;font-size:8px;">
<tbody>
    <tr>   
   <td>Category   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   :</td>
   <td><?php echo $sqldata1[0]->icategory ?></td>
	  </tr>
	 <br>
    <tr>
     
      <td>Sub-category &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
	  <td><?php echo $sqldata1[0]->icontactperson ?></td>
      
    </tr><br>
    <tr>
     
      <td>product Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
	  <td><?php echo $sqldata1[0]->icompanyname ?></td>
      
    </tr><br>
	
	<tr>
     
      <td>Inspection Date :</td>
	    <td><?php echo $sqldata1[0]->iauctionid ?></td>
      
    </tr>
	<tr>
     
      <td>Current location &nbsp;&nbsp;&nbsp;&nbsp;:</td>
	   <td><?php echo $sqldata1[0]->iauction_start ?></td>
      
    </tr>
	<tr>
     
      <td>Expected price &nbsp;&nbsp;&nbsp;:</td>
	    <td><?php echo $sqldata1[0]->iauction_end ?></td>
      
    </tr>
	<tr>
     
      <td>Start  Auction Price &nbsp;&nbsp;&nbsp;:</td>
	   <td><?php echo $sqldata1[0]->iemailid ?></td>
      
    </tr>
	
	
	
	<tr>
	
	<td colspan=2><center>  <div class="ab w-100" style="background-color:#2196f363;color:white; font-size:30px;" ><i><!--<?php //echo //$sqldata1[0]->role ?>--></i>LOT  DETAILS  </div></center></td>
	</tr>
	
	
	<tr>
     
      <td>Category &nbsp;&nbsp;&nbsp;:</td>
	   <td><?php echo $sqldata1[0]->icategory ?></td>
      
    </tr>
	<tr>
     
      <td>Sub-category &nbsp;&nbsp;&nbsp;:</td>
	   <td><?php echo $sqldata1[0]->isubcategory ?></td>
      
    </tr>
	
	<tr>
     
      <td>product Description &nbsp;&nbsp;&nbsp;:</td>
	   <td><?php echo $sqldata1[0]->iproductdes ?></td>
      
    </tr>
	<tr>
     
      <td>Inspection Date &nbsp;&nbsp;&nbsp;:</td>
	   <td><?php echo $sqldata1[0]->inspectiondate ?></td>
      
    </tr>
	
		<tr>
     
      <td>Current location &nbsp;&nbsp;&nbsp;:</td>
	   <td><?php echo $sqldata1[0]->currentlocation ?></td>
      
    </tr>
	
		<tr>
     
      <td> Expected price&nbsp;&nbsp;&nbsp;:</td>
	   <td><?php echo $sqldata1[0]->imrp ?></td>
      
    </tr>
	
		<tr>
     
      <td> Expected price&nbsp;&nbsp;&nbsp;:</td>
	   <td><?php echo $sqldata1[0]->startaucprice ?></td>
      
    </tr>
	
		<tr>
     
      <td>entry free &nbsp;&nbsp;&nbsp;:</td>
	   <td><?php echo $sqldata1[0]->endaucprice ?></td>
      
    </tr>
	
		<tr>
     
      <td>Start  Auction Price &nbsp;&nbsp;&nbsp;:</td>
	   <td><?php echo $sqldata1[0]->entryfee ?></td>
      
    </tr>
	
	
	<tr>
     
      <td>End Auction Price &nbsp;&nbsp;&nbsp;:</td>
	   <td><?php echo $sqldata1[0]->iauction_start ?></td>
      
    </tr>
	<tr>
     
      <td>Inspection date and time &nbsp;&nbsp;&nbsp;&nbsp; :</td>
	   <td><?php echo $sqldata1[0]->iauction_end ?></td>
      
    </tr>
	
	<tr>
     
      <td>Upload photos* &nbsp;&nbsp;&nbsp;&nbsp;:</td>
	   <td><?php $img = unserialize($sqldata1[0]->imageupload)?>
<img class="model" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="200px" height="250px"  
 data-toggle="modal" data-target="#exampleModal">
	   
	   
	   
	   </td>
      
    </tr>
	
	  
    </div>
  </div>
</div>


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
    
	  
	   
 <?php $img = unserialize($sqldata1[0]->imageupload)?>
<img class="m-5" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="400px" height="250px">
		
		
		
		
		
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


