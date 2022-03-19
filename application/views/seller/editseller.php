 

  <main id="main">
    <section class="h-100 h-custom-2 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="p-5">
                  <h3 class="fw-normal mb-5 text-primary">General Infomation</h3>

     <form action="<?php echo base_url();?>Seller_seller_basicinfo_update" method="POST"  enctype="multipart/form-data">
                 





				 <div class="row">
                 
                    <div class="col-md-12 mb-4 pb-2">

                      <div class="form-outline">
<input type="text" class="form-control form-control-lg" id="iname" name="iname" value="<?php echo $sqldata[0]->iname ?>">
											
											
<input type="hidden" class="form-control form-control-lg" id="sl_no" name="sl_no" value="<?php echo $sqldata[0]->sl_no ?>">	
								<label> Full Name</label>			
                      </div>

                    </div>
                    
                      <div class="col-md-12 mb-4 pb-2">

                      <div class="form-outline">
                      
                    
<input type="text" class="form-control form-control-lg" id="icontactnumber" name="icontactnumber" value="<?php echo $sqldata[0]->icontactnumber ?>">

  <label> Contact Number*</label>

                      </div>

                    </div>
                    
                       
                      <div class="col-md-12 mb-4 pb-2">

                      <div class="form-outline">
<input type="text" class="form-control form-control-lg" id="icontactperson" name="icontactperson" value="<?php echo $sqldata[0]->icontactperson ?>">
											        <label>Contact person*</label>
                      </div>

                    </div>
                    
                    
               

<?php  $meg = $sqldata[0]->role ?>
 <?php if($meg == "INDIVIDUAL"){?>
 
                  <div class="mb-4 pb-2">
                 
                 
                      <div class="form-outline">
                 
<input type="text" class="form-control form-control-lg" id ="iadharnumber" name="iadharnumber" value="<?php echo $sqldata[0]->iadharnumber ?> " >
                   <label> Aadhaar Number*</label><br>
                 
                 
                  </div>
                  </div>

        


                  <div class="mb-4 pb-2">
                    <div class="form-outline">
<input type="file" id="iadharcardfile" name="iadharcardfile[]"  accept="image/*" value="$img">
 <?php $img = unserialize($sqldata[0]->iadharcardfile)?>
 
 
 
 
 
 
 
 
 

                      
                     <?php if($img == NULL){ 
                     
                     echo "No Image";
                     ?>
                     
                     <?php }else{
                         ?>
                             
                              
                 
                 
               <img class="model" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="50px" height="50px">    
                             
                             
                             
                     <?php } ?>
                 
                 
                 
                 
                 
                      <br><label class="form-label" for="form3Examplev4"> Aadhaar Card </label>
                    </div>
                  </div>

               
                

                      <div class="form-outline">
                       <input type="file" id="iaddresprof" name="iaddresprof[]" multiple accept="image/*" value="$img">
                      <?php $img = unserialize($sqldata[0]->iaddresprof)?>
                      
                     <?php if($img == NULL) { 
                     
                     echo "No Image";
                     ?>
                     
                     <?php } else {
                         ?>
                             
                              <?php $img = unserialize($sqldata[0]->iaddresprof)?>
                 
                 
               <img class="model" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="50px" height="50px">    
                             
                             
                             
                     <?php } ?>
                      
             
                  
                      <br>  <label class="form-label" for="form3Examplev5">Address Proof</label>
                      </div>

              
      
	 
 
       
             
	
			  
			  
			  <?php }?> 
              
              
              
              <?php if ($meg == "COMPANY"){ ?> 
			  
			  
			  
			     <div class="mb-4 pb-2">
                 
                 
                      <div class="form-outline">
                 	<input type="text" class="form-control form-control-lg igstnumber" id="igstnumber"  name="igstnumber" value="<?php echo $sqldata[0]->igstnumber ?>">
<label class="form-label" for="iname">GST Number</label>
                 
                 
                 
                  </div>
                  </div>   
                    
                    
              
                  <div class="mb-4 pb-2">
                    <div class="form-outline">
					
					
               		<input type="text" class="form-control form-control-lg" id="icompanyname"  name="icompanyname" onclick = "return validate_usergst()" value="<?php echo $sqldata[0]->icompanyname ?>"> 
                      <label class="form-label" for="form3Examplev4">Company Name</label>
					
                    </div>
                  </div>
      
                 
                  <div class="mb-4 pb-2">
                    <div class="form-outline">
					
                       							  <select class="custom-select form-control form-control-lg " id="itypeseller"  name="itypeseller" style="border-radius:20px;">
    <option value="<?php echo $sqldata[0]->itypeseller ?>"><?php echo $sqldata[0]->itypeseller ?></option>
    <option value="Govt Regd Company">Govt Regd Company </option>
    <option value="Ltd , Pvt Ltd , LLP, Corp">Ltd , Pvt Ltd , LLP, Corp</option>
    <option value="Partnership,Proprietorship , OPC">Partnership,Proprietorship , OPC</option>
	 <option value="Other">Other</option>
  </select>
                        <label class="form-label" for="form3Examplev5">Type of Seller</label>
                      </div>

                    </div>
            
                 
	  
	  
              

			  <?php }?>
</div>



</div>

</div>




			  
			  
			  
              <div class="col-lg-6 bg-indigo text-white">
                <div class="p-5">
				
                  <h3 class="fw-normal mb-5">Contact Details</h3>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                  
											<input type="email" class="form-control form-control-lg" id="iemailid" name="iemailid" value="<?php echo $sqldata[0]->iemailid ?>">
												<label> Email Id </label>
                    </div>
                  </div>

                  
                  
                  
                    <div class="row">
                    
                        <div class="col-md-12 mb-4 pb-2">

                      <div class="form-outline form-white">
   
											<input type="text" class="form-control form-control-lg" id="iaddres" name="iaddres" value="<?php echo $sqldata[0]->iaddres ?>">
											            <label> Address </label>
                      </div>

                    </div>
                    
                    <div class="col-md-12 mb-4 pb-2">

                     
                    </div>
                    <div class="col-md-12 mb-4 pb-2">

                      <div class="form-outline form-white">
                      			  <select class="custom-select form-control form-control-lg form-control form-control-lg-lg" id="istate" name="istate" style="border-radius:20px;">
                                    <option value="<?php echo $sqldata[0]->istate ?>"><?php echo $sqldata[0]->istate ?></option>
                      <option value="Karnataka" selected>Karnataka</option>
                      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                      <option value="Assam">Assam</option>
                      <option value="Bihar">Bihar</option>
                      <option value="Chhattishgarh">Chhattishgarh</option>
                      <option value="Delhi">Delhi</option>
                      <option value="Goa">Goa</option>
                      <option value="Gujarat">Gujarat</option>
                      <option value="Harayana">Harayana</option>
                      <option value="Himachal Pradesh">Himachal Pradesh</option>
                      <option value="Eleven">Jharkhand</option>
                      <option value="Jharkhand">Andhra Pradesh</option>
                      <option value="Kerala">Kerala</option>
                      <option value="Madhya Pradesh">Madhya Pradesh</option>
                      <option value="Maharashtra">Maharashtra</option>
                      <option value="Manipur">Manipur</option>
                      <option value="Meghalaya">Meghalaya</option>
                      <option value="Mizoram">Mizoram</option>
                      <option value="Nagaland">Nagaland</option>
                      <option value="Odisha">Odisha</option>
                      <option value="Punjab">Punjab</option>
                      <option value="Rajasthan">Rajasthan</option>
                      <option value="Sikkim">Sikkim</option>
                      <option value="Tamil Nadu">Tamil Nadu</option>
                      <option value="Telangana">Telangana</option>
                      <option value="Tripura">Tripura</option>
                      <option value="Uttar Pradesh">Uttar Pradesh</option>
                      <option value="Uttarakhand">Uttarakhand</option>
                      <option value="West Bengal">West Bengal</option>
                    </select>
                        <label class="form-label" for="form3Examplea5">State</label>
                      </div>

                    </div>
                  </div>
                  

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline form-white">
                  
											
											<input type="text" class="form-control form-control-lg"id="ipincode" name="ipincode" value="<?php echo $sqldata[0]->ipincode ?>" >
											<label>Pincode*</label>
                      </div>
                      
                      
                            <div class="form-outline form-white">
                  
											
											<input type="hidden" class="form-control form-control-lg"id="role" name="role" value="<?php echo $sqldata[0]->role ?>" >
											
                      </div>
                      
                      
                      
                      

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline form-white">
                     
											
											<input type="text" value="India" id="icountry" name="icountry" class="form-control form-control-lg" value="<?php echo $sqldata[0]->icountry ?>">
												<label>Country </label>
                      </div>

                    </div>
                  </div>
                  
                 
                  

                 

          

                  <div class="form-check d-flex justify-content-start mb-4 pb-3">
                    <input
                      class="form-check-input me-3"
                      type="checkbox"
                      value=""
                      id="form2Example3c"
                    />
                    <label class="form-check-label text-white" for="form2Example3">
                      I do accept the <a href="#!" class="text-white"><u>Terms and Conditions</u></a> of your site.
                    </label>
                  </div>
                  
<button type="submit" name="submit" class="btn btn-light btn-lg" data-mdb-ripple-color="dark" onclick="return validatebuyer()">Update</button>
						
				
						
						<button type="reset" name="reset" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">Cancel</button>
						</div>
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

    <!-- ======= Breadcrumbs ======= -->
 
