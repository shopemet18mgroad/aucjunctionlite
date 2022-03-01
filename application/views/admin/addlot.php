
  	  
        <main id="main">
    <section class="h-100 h-custom-2 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row m-5 m-5 d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row m-5 m-5 g-0">
			  <div class="col-lg-12">
                <div class="p-5">
                  
     
            
            
                  
                 <form action= "<?php echo base_url();?>Admin_addlot_info"
				 method="post" enctype="multipart/form-data"> 
				
				
				
                  <h4 class="card-title">ADD LOT </h4>
                  <p class="card-description">
                    
                  </p>
                  
				  
				  <input type="hidden" class="form-control form-control-lg" id="iauctionid" name="iauctionid" value="<?php 
				  if(isset($txdata['iauctionid'])){
					   echo $txdata['iauctionid'];
				  }else{
					  echo "NA";
				  }
				  
				 ?>">
					 
					  <input type="hidden" class="form-control form-control-lg" id="irole" name="irole" value="<?php 
				  if(isset($txdata['irole'])){
					   echo $txdata['irole'];
				  }else{
					  echo "NA";
				  }
				  
				 ?>"> 
					 
				  <input type="hidden" class="form-control form-control-lg" id="iemailid" name="iemailid" value="<?php 
				  if(isset($txdata['iemailid'])){
					   echo $txdata['iemailid'];
				  }else{
					  echo "NA";
				  }
				  
				 ?>">
					 
					 
					 	  <input type="hidden" class="form-control form-control-lg" id="icontactperson" name="icontactperson" value="<?php 
				  if(isset($txdata['icontactperson'])){
					   echo $txdata['icontactperson'];
				  }else{
					  echo "NA";
				  }
				  
				 ?>">
					 
					 
					 
					 	  <input type="hidden" class="form-control form-control-lg" id="icompanyname" name="icompanyname" value="<?php 
				  if(isset($txdata['icompanyname'])){
					   echo $txdata['icompanyname'];
				  }else{
					  echo "NA";
				  }
				  
				 ?>">
					 
					 
                  
                  
                    <div class="form-group row m-5">
                      <label for="" class="col-sm-3 col-form-label">Category</label>
                      <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="icategory" name="icategory">
				<option value="Select" selected>Select</option>
				<option value="Automobile">Automobile</option>
				<option value="Home Appliance">Home Appliance</option>
				<option value="Electronic Appliance">Electronic Appliance </option>
				<option value="Mobile">Mobile</option>
				
				
				
				</select>
                      </div>
                    </div>
                    
                    
                  <div class="form-group row m-5">
                      <label for="" class="col-sm-3 col-form-label">Sub-category</label>
                      <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="isubcategory" name="isubcategory">
				<option value="Select" selected>Select</option>
				<option value="Cars">Cars</option>
				<option value="Bikes">Bikes</option>
                <option value="Commercial">Commercial</option>
				<option value="Laptop" >Laptop</option>
				<option value="Mobile">Mobile</option>
                <option value="TV">TV</option>
                <option value="Washing Machine">Washing Machine</option>
                <option value="Fridge">Fridge</option>
				Sub Category
				
				
				</select>
                      </div>
                    </div>
                   
                    <div class="form-group row m-5">
                      <label for="" class="col-sm-3 col-form-label">product Description</label>
                      <div class="col-sm-9">
                        <textarea row m-5s="4" cols="5" class="form-control form-control-lg" id="iproductdes" name="iproductdes" placeholder="product Description " ></textarea>
                      </div>
                    </div>
					
					
					
					
                    <div class="form-group row m-5">
                      <label for="" class="col-sm-3 col-form-label">Inspection Date</label>
                      <div class="col-sm-9">
                        <input type="datetime-local" class="form-control form-control-lg" id="inspectiondate" name="inspectiondate" placeholder="Inspection Date ">
                      </div>
                    </div>
					
					<div class="form-group row m-5">
                      <label for="" class="col-sm-3 col-form-label">Current location </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="currentlocation" name="currentlocation" placeholder="current location ">
                      </div>
                    </div>
                   
					
					
                   
					 <div class="form-group row m-5">
                      <label for="" class="col-sm-3 col-form-label"> Expected price</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="imrp" name="imrp" placeholder=" Expectprice ">
                      </div>
                    </div>
                    
                    <div class="form-group row m-5">
                      <label for="" class="col-sm-3 col-form-label">Start  Auction Price</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="startaucprice" name="startaucprice" placeholder="Start Auction Price">
                      </div>
                    </div>
                    
                       <div class="form-group row m-5">
                      <label for="" class="col-sm-3 col-form-label">End Auction Price</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="endaucprice" name="endaucprice" placeholder="End Auction Price">
                      </div>
                    </div>
					
					     <div class="form-group row m-5">
                      <label for="" class="col-sm-3 col-form-label">entry free </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="entryfee" name="entryfee" placeholder="Entry Fee">
                      </div>
                    </div>
					
                   
				  
						 <div class="form-group row m-5">
                      <label for="" class="col-sm-3 col-form-label">Inspection date<br> and time</label>
                      <div class="col-sm-9">
                       From: 	
                        <input class="form-control form-control-lg" id="iauction_start" name="iauction_start" type="datetime-local" ><br>
                         To: 	
		<input class="form-control form-control-lg" id="iauction_end" name="iauction_end" type="datetime-local" >
                      </div>
                    </div>
					
					
					
					
			 <div class="form-group row m-5">
                      <label for="" class="col-sm-3 col-form-label">Upload photos</label>
                      <div class="col-sm-9">
                        <input type="file" class="mt-3" id="imageupload" name="imageupload[]" multiple placeholder="End Auction Price">
                      </div>
                    </div>
                   		
					
					
					
					
				
					
				
                 <center><button type="submit " onclick="return validateaddlot()" name="submit" class="btn btn-info mr-2 w-50">Submit</button>
                    <button class="btn btn-light">Cancel</button></center>
                  </form>
               
      </div>
		   </div>
		   </div>
		   </div>
		   </div>
		   </div>
		   </div>
		   </div>
		
		   </section>
         
      </main>

	<script> 
function validateaddlot(){

	var icategory = document.getElementById("icategory").value;
	var isubcategory = document.getElementById("isubcategory").value;
	var iproductdes = document.getElementById("iproductdes").value;
	var inspectiondate = document.getElementById("inspectiondate").value;
	var imrp = document.getElementById("imrp").value;
	var startaucprice = document.getElementById("startaucprice").value;
	var endaucprice = document.getElementById("endaucprice").value;
	var iauction_start = document.getElementById("iauction_start").value;
	var iauction_end = document.getElementById("iauction_end").value;
	var imageupload = document.getElementById("imageupload").value;
	
	

if(icategory == '' || isubcategory == '' || iproductdes == '' || inspectiondate == '' || imrp == '' || startaucprice == '' || endaucprice == '' || iauction_start == '' || iauction_end == ''|| imageupload == ''){
		swal("Alert!",  "Category, Sub-category, product Description, Inspection Date, Expected price, Start  Auction Price, End Auction Price , Inspection date and time,Upload photos, Pin  cannot leave any field blank!", "error");
		return false;
	}
	else{
        $.ajax({
            type:'submit',
            data: {icategory:icategory,isubcategory:isubcategory, iproductdes: iproductdes,inspectiondate:inspectiondate,imrp:imrp,startaucprice:startaucprice,endaucprice :endaucprice ,iauction_start:iauction_start,iauction_end:iauction_end, imageupload: imageupload},
           success:function(data){
                swal("Success", "Data Saved Successfully", "success");
            },
            error:function(xhr, throw m-5nError, ajaxOptions){

            },
        });
    }
}
</script>	
