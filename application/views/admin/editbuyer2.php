 

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

   <form action="<?php echo base_url();?>Admin_buyer_basicinfo_update" method="post" enctype="multipart/form-data">   
                  <div class="row">
                 
                    <div class="col-md-12 mb-4 pb-2">

                      <div class="form-outline">
                      
											
											<input type="text" class="form-control form-control-lg" id="buyername" name="buyername" value="<?php echo $sqldata[0]->buyername ?>">
											
											
											<input type="hidden" class="form-control form-control-lg" id="buysl_no" name="buysl_no" value="<?php echo $sqldata[0]->buysl_no ?>">	
								<label> Full Name</label>			
                      </div>

                    </div>
                    
                      <div class="col-md-12 mb-4 pb-2">

                      <div class="form-outline">
                      
                    
	<input type="text" class="form-control form-control-lg buyercontactnumber" id="buyercontactnumber"maxLength="10" name="buyercontactnumber" value="<?php echo $sqldata[0]->buyercontactnumber ?>">

  <label> Contact Number*</label>

                      </div>

                    </div>
                    
                       
                      <div class="col-md-12 mb-4 pb-2">

                      <div class="form-outline">
            
											<input type="text" class="form-control form-control-lg" id="buyercontactperson" name="buyercontactperson" value="<?php echo $sqldata[0]->buyercontactperson ?>">
											        <label>Contact person*</label>
                      </div>

                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                  </div>

                  <div class="mb-4 pb-2">
                 
                 
                      <div class="form-outline">
                 
	<input type="text" class="form-control form-control-lg buyerasdharnumber" id ="buyerasdharnumber" name="buyerasdharnumber"maxLength="12" value="<?php echo $sqldata[0]->buyerasdharnumber ?>">
                   <label> Adhar Number*</label><br>
                 
                 
                  </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                 <input type="file" id="buyeradharcard" name="buyeradharcard[]" accept="image/*" value="$img">
					   <?php $img = unserialize($sqldata[0]->buyeradharcard)?>
                      
                     <?php if($img == NULL) { 
                     
                     echo "No Image"
                     ?>
                     
                     <?php } else {
                         ?>
                             
                              <?php $img = unserialize($sqldata[0]->buyeradharcard)?>
                 
                 
               <img class="model" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="50px" height="50px">    
                             
                             
                             
                     <?php } ?>
 <br>
                      <label class="form-label" for="form3Examplev4"> Aadhaar Card </label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">

                      <div class="form-outline">
 <input type="file" id="addressproof" accept="image/*" name="addressproof[]" value="$img">
					     <?php $img = unserialize($sqldata[0]->addressproof)?>
                      
                     <?php if($img == NULL) { 
                     
                     echo "No Image"
                     ?>
                     
                     <?php } else {
                         ?>
                             
                              <?php $img = unserialize($sqldata[0]->addressproof)?>
                 
                 
               <img class="model" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="50px" height="50px">    
                             
                             
                             
                     <?php } ?>
                 
                 
                  
                       
                      <br> <label class="form-label" for="form3Examplev5">Address Proof</label>
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
                  
											<input type="email" class="form-control form-control-lg" id="buyeremail" name="buyeremail" value="<?php echo $sqldata[0]->buyeremail ?>"readonly>
												<label> Email Id </label>
                    </div>
                  </div>

                  
                  
                  
                    <div class="row">
                    
                        <div class="col-md-12 mb-4 pb-2">

                      <div class="form-outline form-white">
   
											<input type="text" class="form-control form-control-lg" id="buyeraddress" name="buyeraddress" value="<?php echo $sqldata[0]->buyeraddress ?>">
											            <label> Address </label>
                      </div>

                    </div>
                    
                    <div class="col-md-12 mb-4 pb-2">

                      <div class="form-outline form-white">
                	
											<input type="text" class="form-control form-control-lg" id="bcity" name="bcity" value="<?php echo $sqldata[0]->bcity ?>">
											<label>City</label>
                      </div>

                    </div>
                    <div class="col-md-12 mb-4 pb-2">

                      <div class="form-outline form-white">
                      			  <select class="custom-select form-control form-control-lg form-control form-control-lg-lg" id="buyerstate" name="buyerstate" style="border-radius:20px;">
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
                  
											
	<input type="text" class="form-control form-control-lg"id="buyerpincode" name="buyerpincode" maxLength="6" value="<?php echo $sqldata[0]->buyerpincode ?>" >
											<label>Pincode*</label>
                      </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline form-white">
                     
											
											<input type="text" value="India" id="buyercountry" name="buyercountry" class="form-control form-control-lg" value="<?php echo $sqldata[0]->buyercountry ?>">
												<label>Country </label>
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
<button type="submit" name="submit" class="btn btn-light btn-lg" data-mdb-ripple-color="dark" onclick="return validatebuyer() ">Update</button>
						
				
						
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
 
<script type="text/javascript"> 

	$(".buyerasdharnumber ").change(function () {      
var inputvalues = $(this).val();      
  var regex = /^\d{12}$/;  
  if(!regex.test(inputvalues)){      
  $(".buyerasdharnumber").val("");    
  swal("Alert!","Invalid Aadhaar Number", "error");    
  return regex.test(inputvalues);    
  }    
}); 

</script> 

<script type="text/javascript">    
$(document).ready(function(){     
        
$(".buyercontactnumber").change(function () {      
var inputvalues = $(this).val();      
  var regex =/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;    
  if(!regex.test(inputvalues)){      
  $(".buyercontactnumber").val("");    
  swal("Alert!","Invalid Buyer Phone-Number no", "error");    
  return regex.test(inputvalues);    
  }    
});      
    
	
});    
</script>
