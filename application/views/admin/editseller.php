
        
        
        
        <div class="main-panel">
          <div class="content-wrapper">
		  
		  <form name="myForm"  action="<?php echo base_url();?>admin_seller_basicinfo_add" method="POST" enctype="multipart/form-data">
		  
		  
        <form action="<?php echo base_url();?>Admin_seller_basicinfo_add" method="POST"  enctype="multipart/form-data">
            
            
            <div class="row">
              <div class="col-lg-12 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  
                   <div class= "row">
				        
						
						
						
						
						<div class="col-md-12">
							<div class="card">
							
								<div class="card-header bg-info" id="grad">
									<center><h2 class="card-title mb-0">Add Seller Details (All field's marked * are mandatory)</h2></center>
								</div>
								<div class="card-body">
							
										<div class="row">
											<div class="col-md-6">
											
										
										
									
	
										<div class="form-group">
										
											<label> <i class="fa fa-user mr-2 text-info fa-2x"></i>Full Name</label>
											<input type="text" class="form-control" id="iname" name="iname">
										</div>
										<div class="form-group">
											<label> <i class="fa fa-mobile mr-2 text-info fa-2x"></i>Contact Number*</label>
											<input type="text" id="icontactnumber" name="icontactnumber" class="form-control">
										</div>
										<div class="form-group" >
											<label> <i class="fa fa-id-card mr-2 text-info fa-2x"></i>Adhar Number*</label><br>
											<input type="text" id="iadharnumber" name="iadharnumber" class="form-control" >
										</div>
											
										
										<div class="form-group">
											<label> <i class="fa fa-envelope  mr-2 text-info fa-2x"></i>Email Id </label>
											<input type="email" id="iemailid" name="iemailid" class="form-control">
										</div>
										<div class="form-group">
											<label> <i class="fa fa-key mr-2 text-info fa-2x"></i>Password *</label>
											<input type="password" class="form-control" id="ipass" name="ipass">
										</div>
										
											<div class="form-group">
											<label> <i class="fa fa-key mr-2 text-info fa-2x"></i>Confirm Password*</label>
											<input type="password" class="form-control" id="iconpass" name="iconpass">
										</div>
										<div class="form-group" >
											<label> <i class="fa fa-id-card mr-2 text-info fa-2x"></i>Aadhar card </label><br>
											<input type="file" id="iadharcardfile" name="iadharcardfile" >
										</div>
											
										
	
										
										</div>
						
										<div class="col-md-6">
										<div class="form-group">
											<label> <i class="fa fa-map-marker  mr-2 text-info fa-2x"></i>Address </label>
											<input type="text" class="form-control" id="iaddres" name="iaddres">
										</div>
										
										<div class="form-group">
											<label><i class="fa fa-map-marker mr-2 text-info fa-2x"></i>City</label>
											<input type="text" class="form-control" id="icity"name="icity">
										</div>
										<div class="form-group">
											<label> <i class="fa fa-state mr-2 text-info fa-2x"></i>State/Union Ter.</label>
											  <select class="custom-select" id="istate" name="istate" style="border-radius:20px;">
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
										</div>
										<div class="form-group">
											<label><i class="fa fa-country mr-2 text-info fa-2x"></i>Country</label>
											<input type="text" value="India" id="icountry" name="icountry" class="form-control">
										</div>
										<div class="form-group">
											<label><i class="fa fa-pincode mr-2 text-info fa-2x"></i>Pincode</label>
											<input type="text" class="form-control" id="ipincode" name="ipincode">
										</div>
										
										
											<div class="form-group">
											<label><i class="fa fa-user mr-2 text-info fa-2x"></i>Contact person*</label>
											<input type="text" class="form-control" id="icontactperson" name="icontactperson">
										</div>
										
												
										<div class="form-group">
											<label><i class="fa fa-id-card mr-2 text-info fa-2x"></i>Address proof</label><br>
											<input type="file" id="iaddresprof" name="iaddresprof" >
										</div>
										
										
												
								
									

											
											</div>
											</div>
											<div class="col-md-12">
											
										
											<div class="d-flex justify-content-around">
							<div class="Col-sm-4">
							<button type="button" class="btn btn-success btn-rounded m-4 btn-lg Col-sm-4" onclick="return validateindiviual()" id="mm">Update</button>
						</div>
					<div class="Col-sm-4">
							<button type="button" class="btn btn-success btn-rounded btn-lg  Col-sm-4  m-4">Cancel</button>
							</div>
							
								
							</div>
											
											
											
												
											
											
											
											</div>
										</div>
							
							
							
					</div>
					</div>
						
						
						
						
				</form>   
				   
				   
				   
				   
                  </div>
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
                </div>
              </div>
            </div>
          
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
       
          <!-- partial -->
        </div>
     
        
        
        
        
        
        
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
