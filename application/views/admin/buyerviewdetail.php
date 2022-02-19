
   

    <div class="container card col-md-8 mt-5">
	<center>  <div class="ab w-100" style="background-color:#2196f363;color:white; font-size:30px;" >SELLER DETAILES  </div></center>
	
   <table class="table"  style="color:grey;font-size:8px;">
<tbody >
    <tr>
   <td>FULL NAME   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   :</td>
   <td><?php echo $sqldata1[0]->buyername ?></td>
	  </tr>
	 <br>
    <tr>
     
      <td>CONTACT NUMBER &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
	  <td><?php echo $sqldata1[0]->buyercontactnumber ?></td>
      
    </tr><br>
    <tr>
     
      <td>AADHAAR NUMBER &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
	  <td><?php echo $sqldata1[0]->buyerasdharnumber ?></td>
      
    </tr><br>
	
	<tr>
     
      <td>EMAIL ID :</td>
	    <td><?php echo $sqldata1[0]->buyeremail ?></td>
      
    </tr>
	<tr>
     
      <td>ADDRESS &nbsp;&nbsp;&nbsp;&nbsp;:</td>
	    <td><?php echo $sqldata1[0]->buyeraddress ?></td>
      
    </tr>
	<tr>
     
      <td>CITY &nbsp;&nbsp;&nbsp;:</td>
	    <td><?php echo $sqldata1[0]->buyercity ?></td>
      
    </tr>
	<tr>
     
      <td>STATE/UNION TERY &nbsp;&nbsp;&nbsp;:</td>
	   <td><?php echo $sqldata1[0]->buyerstate ?></td>
      
    </tr>
	<tr>
     
      <td>COUNTRY &nbsp;&nbsp;&nbsp;:</td>
	   <td><?php echo $sqldata1[0]->buyercountry ?></td>
      
    </tr>
	<tr>
     
      <td>PINCODE &nbsp;&nbsp;&nbsp;&nbsp; :</td>
	   <td><?php echo $sqldata1[0]->buyerpincode ?></td>
      
    </tr>
	
	<tr>
     
      <td>CONTACT PERSON* &nbsp;&nbsp;&nbsp;&nbsp;:</td>
	   <td><?php echo $sqldata1[0]->buyercontactperson ?></td>
      
    </tr>
	
	<tr>
     
      <td>ADDRESS PROOF &nbsp;&nbsp;&nbsp;&nbsp;:</td>
	   <td><?php $img = unserialize($sqldata1[0]->buyeradharcard)?>
<img class="model" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="200px" height="250px"></td>
    
    </tr>
	<tr>
     
      <td>AADHAAR PROOF &nbsp;&nbsp;&nbsp;&nbsp;:</td>


<td>	<?php $img = unserialize($sqldata1[0]->addressproof)?>
<img class="" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="200px" height="250px"></td>
 
	
      
   </tr>
	
	
	
	
  </tbody>
</table>
</div>
