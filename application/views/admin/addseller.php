 

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

  <form action= "<?php echo base_url();?>Admin_seller_basicinfo_add" method="post" enctype="multipart/form-data">
                  <div class="row">
                 
                    <div class="col-md-12 mb-4 pb-2">

                      <div class="form-outline">
                      <input type="text" class="form-control form-control-lg" id="iname" name="iname">
<label class="form-label" for="iname">Full Name</label>
                      </div>

                    </div>
                    
                      <div class="col-md-12 mb-4 pb-2">

                      <div class="form-outline">
                      
                      
                      
                 		<input type="text" id="icontactnumber" name="icontactnumber" maxLength="10" class="form-control form-control-lg icontactnumber">
<label class="form-label" for="icontactnumber">Contact Number</label>




                      </div>

                    </div>
                    
                       
                      <div class="col-md-12 mb-4 pb-2">

                      <div class="form-outline">
                     	<input type="text" class="form-control form-control-lg" id="icontactperson" name="icontactperson">
<label class="form-label" for="iname">Contact Person</label>
                      </div>

                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                  </div>

                  <div class="mb-4 pb-2">
                 
                 
                      <div class="form-outline">
                   <input type="text" id="iadharnumber" name="iadharnumber"  maxLength="12"  class="form-control form-control-lg iadharnumber" >
<label class="form-label" for="iname">Aadhaar Number</label>
                 
                 
                 
                  </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                 <input type="file" id="iadharcardfile" name="iadharcardfile[]" multiple>
                      <label class="form-label" for="form3Examplev4"> Aadhaar Card </label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">

                      <div class="form-outline">
                       <input type="file" id="iaddresprof" name="iaddresprof[]" multiple >
                        <label class="form-label" for="form3Examplev5">Address Proof</label>
                      </div>

                    </div>
              
                  </div>

                </div>
              </div>
              <div class="col-lg-6 bg-indigo text-white">
                <div class="p-5">
                  <h3 class="fw-normal mb-5">Contact Details</h3>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                  	<input type="text" id="iemailid" name="iemailid" class="form-control form-control-lg">
                      <label class="form-label" for="form3Examplea2">Email Id</label>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                   	<input type="password" class="form-control form-control-lg" id="ipass" name="ipass"  maxLength="15" placeholder="password should be maximum length 15 "><i class="bi bi-eye-slash errspan" id="togglePassword"></i>
                      <label class="form-label" for="form3Examplea3">Password</label>
                    </div>
                  </div>
                  
                  
                   <div class="mb-4 pb-2">
                    <div class="form-outline form-white mm">
                    <input type="password" class="form-control form-control-lg" id="iconpass" name="iconpass" maxLength="15" placeholder="Repeat password should be maximum length 15 ">
                      <label class="form-label" for="form3Examplea3"> Confirm Password</label>
                    </div>
                  </div>
                  
                  
                    <div class="row">
                    
                        <div class="col-md-12 mb-4 pb-2">

                      <div class="form-outline form-white">
                   <input type="text" class="form-control form-control-lg  " id="iaddres" name="iaddres">
                        <label class="form-label" for="form3Examplea4">Address</label>
                      </div>

                    </div>
                    
                    <div class="col-md-12 mb-4 pb-2">

                      <div class="form-outline form-white">
                	<input type="text" class="form-control form-control-lg" id="icity"name="icity" >
                        <label class="form-label" for="form3Examplea4">city</label>
                      </div>

                    </div>
                    <div class="col-md-12 mb-4 pb-2">

                      <div class="form-outline form-white">
                      			  <select class="custom-select form-control form-control-lg" id="istate" name="istate" style="border-radius:20px;">
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

										
										<div class="form-group">
											<label><i class="fa fa-flag mr-2 text-info fa-2x"></i>Country</label>
											<input type="text" value="India" id="icountry" name="icountry"  class="form-control">
										</div>
										<div class="form-group">
										
									
										
											<label><i class="fa fa-map-pin mr-2 text-info fa-2x"></i>Pincode</label>

											<input type="text" class="form-control" id="ipincode" name="ipincode" maxLength="6">
		
										</div>
										
										
											<div class="form-group">
											<label><i class="fa fa-user mr-2 text-info fa-2x"></i>Contact person*</label>
											<input type="text" class="form-control" id="icontactperson" name="icontactperson">
										</div>
									
												
										<div class="form-group">
											<label><i class="fa fa-id-card mr-2 text-info fa-2x"></i>Address proof</label><br>
											<input type="file" id="iaddresprof" name="iaddresprof[]" multiple >
										</div>
										
										
										<div class="form-group">
											
											<input type="hidden" id="role" name="role"  value="INDIVIDUAL">
										</div>
										
										
										
	
								
									

											
											</div>
											</div>
											<div class="col-md-12">
											
										
											<div class="d-flex justify-content-around">
							<div class="Col-sm-4">
							<button type="submit" name="submit" class="btn btn-info btn-rounded m-4 Col-sm-4" onclick="return validateindiviual()"  id="mm">Submit</button>
						</div>
					<div class="Col-sm-4">
							<button type="reset" name="reset" class="btn btn-info btn-rounded Col-sm-4  m-4">Cancel</button>
							</div>
							
								
							</div>
											
											
											
												
											
											
											
											</div>
										</div>
							
							
							
					</div>
					</div>
						
						
						
						
				
				   
				   
				   

                        <label class="form-label" for="form3Examplea5">State</label>
                      </div>

                    </div>
                  </div>
                  

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline form-white">
                   	<input type="text" class="form-control form-control-lg" id="ipincode" name="ipincode" maxLength="6">
                        <label class="form-label" for="form3Examplea4">PinCode</label>
                      </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline form-white">
                     	<input type="text" value="India" id="icountry" name="icountry"  class="form-control form-control-lg">
                        <label class="form-label" for="form3Examplea5">Country</label>
                      </div>

                    </div>
                  </div>
                  
                 	<input type="hidden" id="role" name="role"  value="INDIVIDUAL"> 
                  

                 

          

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

                  <button type="submit" name="submit" onclick="return validateindiviual()" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">Register</button>
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

