
 



    <div class="container-fluid card col-md-8 mt-5 mb-5">
	<center>  <div class="ab w-100" style="background-color:#2196f363;color:white; font-size:30px;" >SELLER DETAILES  </div></center>
	
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
     
      <td>CITY &nbsp;&nbsp;&nbsp;:</td>
	    <td><?php echo $sqldata1[0]->icity ?></td>
      
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
	
  </tbody>
</table>
</div>

