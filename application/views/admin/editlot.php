

           <main id="main">
    <section class="h-100 h-custom-2 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row m-4 m-5 m-5 d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
       
            
         


                  
				  
				  
				  
				  
				  
                 <form action= "<?php echo base_url();?>Admin_editlot_basicinfo_update"
				 method="post" enctype="multipart/form-data"> 
			
                  <h4 class="card-title">EDIT LOT </h4>
                  <p class="card-description">
                    
                  </p>
              
                  
                  
                    <div class="form-group row m-4">
                      <label for="" class="col-sm-3 col-form-label">Category</label>
                      <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="icategory" name="icategory" value="<?php echo $sqldata[0]->icategory ?>" >
						<option value="<?php echo $sqldata[0]->icategory ?>"><?php echo $sqldata[0]->icategory ?></option>
				
				
				<option value="Automobile">Automobile</option>
				<option value="Home Appliance">Home Appliance</option>
				<option value="Electronic Appliance">Electronic Appliance </option>
				<option value="Mobile">Mobile</option>
				<option value="Properties">Properties</option>
					<option value="Furniture">Furniture</option>
				<option value="Toys">Toys</option>
				<option value="Fashion">Fashion</option>
				
				
				
				</select>
                      </div>
                    </div>
                    
                    
                  <div class="form-group row m-4">
                      <label for="" class="col-sm-3 col-form-label">Sub-category</label>
                      <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="isubcategory" name="isubcategory" value="<?php echo $sqldata[0]->isubcategory ?>" >
				
				
				<option value="<?php echo $sqldata[0]->isubcategory ?>"><?php echo $sqldata[0]->isubcategory ?></option>
				
					<option value="Car">Car</option>
				<option value="Bike">Bike</option>
				<option value="Laptop">Laptop</option>
				<option value="Mobile">Mobile</option>
				<option value="Properties">Properties</option>
				<option value="TV">TV</option>
				<option value="Washing machine">Washing machine</option>
				<option value="Fridge">Fridge</option>
				<option value="Camera">Camera</option>
				<option value="Toys">Toys</option>
				<option value="Furniture">Furniture</option>
				<option value="Fashion">Fashion</option>
				
				
				</select>
                      </div>
                    </div>
                   
                    <div class="form-group row m-4">
                      <label for="" class="col-sm-3 col-form-label">product Description</label>
                      <div class="col-sm-9">
                        <textarea row m-4s="4" cols="5" class="form-control form-control-lg" id="iproductdes" name="iproductdes" placeholder="product Description " value= "<?php echo $sqldata[0]->iproductdes?>" ></textarea>
                      </div>
                    </div>
					
					 <div class="form-group row m-4">
					 
					 <label for="" class="col-sm-3 col-form-label">product Name</label>
                     
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="iproductname" name="iproductname"  value="<?php echo $sqldata[0]->iproductname ?>" >
                      </div>
                    </div>
					
				
					 <div class="form-group row m-4">
                     
                      <div class="col-sm-9">
                        <input type="hidden" class="form-control form-control-lg" id="sl_noadd" name="sl_noadd"  value="<?php echo $sqldata[0]->sl_noadd ?>" >
                      </div>
                    </div>
					
					
					
                    <div class="form-group row m-4">
                      <label for="" class="col-sm-3 col-form-label">Inspection Date</label>
                      <div class="col-sm-9">
                        <input type="datetime-local" class="form-control form-control-lg" id="inspectiondate" name="inspectiondate" placeholder="Inspection Date "  value="<?php echo date('Y-m-d\TH:i', strtotime($sqldata[0]->inspectiondate)); ?>">
                      </div>
                    </div>
					
					<div class="form-group row m-4">
                      <label for="" class="col-sm-3 col-form-label">Current location </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="currentlocation" name="currentlocation" placeholder="current location " value="<?php echo $sqldata[0]->currentlocation ?>" >
                      </div>
                    </div>
                   
					
					
                   
					 <div class="form-group row m-4">
                      <label for="" class="col-sm-3 col-form-label"> Expected price</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="imrp" name="imrp" placeholder=" Expectprice "value="<?php echo $sqldata[0]->imrp ?>" >
                      </div>
                    </div>
                    
                    <div class="form-group row m-4">
                      <label for="" class="col-sm-3 col-form-label">Start  Auction Price</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="startaucprice" name="startaucprice" placeholder="Start Auction Price"value="<?php echo $sqldata[0]->startaucprice ?>" >
                      </div>
                    </div>
                    
                       <div class="form-group row m-4">
                      <label for="" class="col-sm-3 col-form-label">End Auction Price</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="endaucprice" name="endaucprice" placeholder="endaucprice" value="<?php echo $sqldata[0]->endaucprice ?>">
                      </div>
                    </div>
					
					     <div class="form-group row m-4">
                      <label for="" class="col-sm-3 col-form-label">entry free </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="entryfee" name="entryfee" placeholder="entryfee" value="<?php echo $sqldata[0]->entryfee ?>" >
                      </div>
                    </div>
					
                   
				  
						 <div class="form-group row m-4">
                      <label for="" class="col-sm-3 col-form-label">Inspection date and time</label>
                      <div class="col-sm-9">
                       From: 	
                    
						
				  <input class="form-control form-control-lg " type="datetime-local"  id="iauction_start" name="iauction_start" value="<?php echo date('Y-m-d\TH:i', strtotime($sqldata[0]->iauction_start)); ?>">		
						
						<br>
                         

To: 
							
							
   <input class="form-control form-control-lg " type="datetime-local"  id="iauction_end" name="iauction_end" value="<?php echo date('Y-m-d\TH:i', strtotime($sqldata[0]->iauction_end)); ?>">
                      </div>
                    </div>
					
					

					
					
					
					
			 <div class="form-group row m-4">
                      <label for="" class="col-sm-3 col-form-label">Upload photos</label>
                      <div class="col-sm-9">
                        <input type="file" class="mt-3" id="imageupload" name="imageupload[]" multiple >
						  <?php $img = unserialize($sqldata[0]->imageupload)?>
						  
						<?php foreach($img as $sql){ ?>
							
						<img class="model" src="<?php echo base_url()."web_files/uploads/".$sql;?>" 
 alt="Chania" width="60px" height="60px">	
							
					<?php	} ?>  
						
						
						
						
                      </div>
                    </div>
                   		
					
					
					
					
				
					
				
                 <center><button type="submit " onclick="return validateaddlot()" name="submit" class="btn btn-info mr-2 w-50">Submit</button>
                    <button class="btn btn-light">Cancel</button></center>
                  </form>
           
      
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
            error:function(xhr, throw m-4nError, ajaxOptions){

            },
        });
    }
}
</script>	
