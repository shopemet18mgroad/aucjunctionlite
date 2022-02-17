<div class="main-panel">
          <div class="content-wrapper">
        
            
            
            <div class="row">
              <div class="col-lg-12 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  
                   <div class= "row">
				        
						
						
						
						
						<div class="col-md-12">
							<div class="card">
								<div class="card-header" id="grad">
									<center><h4 class="card-title mb-0" >Add User Details (All field's marked * are mandatory)</h4></center>
								</div>
								<div class="card-body">
							
										<div class="row">
											<div class="col-md-6">
											
										
										
									
	
										<div class="form-group">
										<label> <i class="fa fa-user mr-2 text-success fa-2x"></i>Full Name</label>
											
											<input type="text" class="form-control" id="buyername" name="buyername" value="<?php echo $sqldata[0]->buyername ?>">
										</div>
										<div class="form-group">
											<label> <i class="fa fa-mobile mr-2 text-success fa-2x"></i>Contact Number*</label>
											<input type="text" class="form-control" id="buyercontactnumber" name="buyercontactnumber" value="<?php echo $sqldata[0]->buyercontactnumber ?>">
										</div>
										<div class="form-group" >
											<label> <i class="fa fa-id-card mr-2 text-success fa-2x"></i>Adhar Number*</label><br>
											<input type="text" class="form-control" id ="buyerasdharnumber" name="buyerasdharnumber" value="<?php echo $sqldata[0]->buyerasdharnumber ?>">
										</div>
											
										
										<div class="form-group">
										<label> <i class="fa fa-envelope  mr-2 text-success fa-2x"></i>Email Id </label>
											<input type="email" class="form-control" id="buyeremail" name="buyeremail" value="<?php echo $sqldata[0]->buyeremail ?>">
										</div>
										<div class="form-group">
											<label> <i class="fa fa-map-marker  mr-2 text-success fa-2x"></i>Address </label>
											<input type="text" class="form-control" id="buyeraddress" name="buyeraddress" value="<?php echo $sqldata[0]->buyeraddress ?>">
										</div>
										
										
										<div class="form-group" >
											<label> <i class="fa fa-id-card mr-2 text-success fa-2x"></i>Aadhar card </label><br>
											<input type="file" id="buyeradharcard" name="buyeradharcard" value="<?php echo $sqldata[0]->buyeradharcard ?>" >
										</div>
											
										
	
										
										</div>
						
										<div class="col-md-6">
										
										
										<div class="form-group">
											<label><i class="fa fa-map-marker  mr-2 text-success fa-2x"></i>City</label>
											<input type="text" class="form-control" id="buyercity" name="buyercity" value="<?php echo $sqldata[0]->buyercity ?>">
										</div>
										<div class="form-group">
											<label>State/Union Ter.</label>
											  <select class="custom-select" id="buyerstate" name="buyerstate" style="border-radius:20px;" value="<?php echo $sqldata[0]->buyerstate ?>">
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
										<label> <i class="fa fa-flag mr-2 text-success fa-2x"></i>Country </label>
											
											<input type="text" value="India" id="buyercountry" name="buyercountry" class="form-control" value="<?php echo $sqldata[0]->buyercountry ?>">
										</div>
										<div class="form-group">
											
											<label><i class="fa fa-map-pin mr-2 text-success fa-2x"></i>Pincode*</label>
											<input type="text" class="form-control"id="buyerpincode" name="buyerpincode" value="<?php echo $sqldata[0]->buyerpincode ?>" >
										</div>
										
										
											<div class="form-group">
										<label><i class="fa fa-user mr-2 text-success fa-2x"></i>Contact person*</label>
											<input type="text" class="form-control" id="buyercontactperson" name="buyercontactperson" value="<?php echo $sqldata[0]->buyercontactperson ?>">
										</div>
										
												
										<div class="form-group" >
										<label> <i class="fa fa-id-card mr-2 text-success fa-2x"></i>Address proof</label>
										<br>
											<input type="file" id="addressproof" name="addressproof" value="<?php echo $sqldata[0]->addressproof ?>">
										</div>
										
										
												
										
									

											
											</div>
											</div>
											<div class="col-md-12">
											
										
										
											
											
											
												
											
											
											
											</div>
										</div>
								
							<div class="d-flex justify-content-around">
							<div class="Col-sm-4">
							<button type="button" class="btn btn-success btn-rounded btn-lg mb-4" onclick="return validatebuyer() ">Update</button>
						</div>
					<div class="Col-sm-4">
							<button type="button" class="btn btn-success btn-rounded btn-lg mb-4" onclick="return validatebuyer() ">Cancel</button>
							</div>
							
								
							</div>	
								
								
								
							
					</div>
					</div>
						
						
						
						
				   
				   
				   
				   
				   
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
	<script> 
function validatebuyer(){

	var buyername = document.getElementById("buyername").value;
	var buyercontactnumber = document.getElementById("buyercontactnumber").value;
	var buyerasdharnumber = document.getElementById("buyerasdharnumber").value;
	var buyeremail = document.getElementById("buyeremail").value;
	var buyerpass = document.getElementById("buyerpass").value;
	var bconpassword = document.getElementById("bconpassword").value;
	var buyeradharcard = document.getElementById("buyeradharcard").value;
	var buyeraddress = document.getElementById("buyeraddress").value;
	var buyercity = document.getElementById("buyercity").value;
	var buyerstate = document.getElementById("buyerstate").value;
	var buyercountry = document.getElementById("buyercountry").value;
	var buyerpincode = document.getElementById("buyerpincode").value;
	var buyercontactperson = document.getElementById("buyercontactperson").value;
	var addressproof = document.getElementById("addressproof").value;

	

if(buyername == '' || buyercontactnumber == '' ||  buyerasdharnumber == '' || buyeremail == '' ||  buyerpass == '' ||  bconpassword == '' || buyeradharcard == '' || buyeraddress == '' || buyercity == '' || buyerstate == '' || buyercountry == '' || buyerpincode == '' || buyercontactperson == '' || addressproof == ''){
		swal("Alert!",  "Buyer Name, Company Name, Company Type, Contact Person, Contact Number, E-Mail, User Name, Password , Repeat Password, Pan, GST, Address, Street, City, State, Pin  cannot leave any field blank!", "error");
		return false;
	}
	else{
        $.ajax({
            type:'submit',
            data: {buyername:buyername,buyercontactnumber:buyercontactnumber, buyerasdharnumber: buyerasdharnumber,buyeremail:buyeremail,buyerpass:buyerpass,bconpassword:bconpassword,buyeradharcard :buyeradharcard ,buyeraddress:buyeraddress,buyercity:buyercity, buyerstate: buyerstate,buyercountry:buyercountry,buyerpincode:buyerpincode,buyercontactperson :buyercontactperson ,addressproof:addressproof,},
           success:function(data){
                swal("Success", "Data Saved Successfully", "success");
            },
            error:function(xhr, thrownError, ajaxOptions){

            },
        });
    }
	
	if (buyercontactnumber.value.length < 10 || buyercontactnumber.value.length > 10) {
    swal("Alert!", "Mobile No. is not valid, Please Enter 10 Digit Mobile No.", "error");
    return false;
  }
  else if (buyercontactnumber.value == "") {
    swal("Alert!","Please enter your Mobile No.","error");
    return false;
  }
	
	if(buyerpass != bconpassword){
		swal("Alert!",  "Password and Confirm Password Should Match!", "error");
		return false;
	}
	
}
  </script>
 
  <script>
function validateForm() {
    //collect form data in JavaScript variables
    var pw1 = document.getElementById("buyerpass").value;
    var pw2 = document.getElementById("bconpassword").value;
   
  
    //check empty password field

    //minimum password length validation
    if(pw1.length < 8) {
      document.getElementById("message1").innerHTML = "**Password length must be atleast 8 characters";
      return false;
    }

    //maximum length of password validation
    if(pw1.length > 15) {
      document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";
      return false;
    }
  
    if(pw1 != pw2) {
      document.getElementById("message2").innerHTML = "**Passwords are not same";
      return false;
    } 
 }
</script> 