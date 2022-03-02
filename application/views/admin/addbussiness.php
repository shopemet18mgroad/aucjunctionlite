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

  <form action= "<?php echo base_url();?>Admin_bussiness_basicinfo_add" method="post" enctype="multipart/form-data">
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
                 	<input type="text" class="form-control form-control-lg igstnumber" id="igstnumber"  name="igstnumber">
<label class="form-label" for="iname">GST Number</label>
                 
                 
                 
                  </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
					
					
               		<input type="text" class="form-control form-control-lg" id="icompanyname"  name="icompanyname"> 
                      <label class="form-label" for="form3Examplev4">Company Name</label>
					
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">

                      <div class="form-outline">
                       							  <select class="custom-select form-control form-control-lg " id="itypeseller"  name="itypeseller" style="border-radius:20px;">
    <option selected>Type of Seller</option>
    <option value="Govt Regd Company">Govt Regd Company </option>
    <option value="Ltd , Pvt Ltd , LLP, Corp">Ltd , Pvt Ltd , LLP, Corp</option>
    <option value="Partnership,Proprietorship , OPC">Partnership,Proprietorship , OPC</option>
	 <option value="Other">Other</option>
  </select>
                        <label class="form-label" for="form3Examplev5">Type of Seller</label>
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
                   <input type="text" class="form-control form-control-lg" id="iaddres" name="iaddres">
                        <label class="form-label" for="form3Examplea4">Address</label>
                      </div>

                    </div>
                    
                    <div class="col-md-12 mb-4 pb-2">

                      <div class="form-outline form-white">
                	<input type="text" class="form-control form-control-lg" id="iicity" name="iicity" >
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
                  
                 	<input type="hidden" id="role" name="role"  value="BUSSINESS"> 
                  

                 

          

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

                  <button type="submit" name="submit" onclick="return validatecompany()" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">Register</button>
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


  </main><!-- End #main -->
  
<script type="text/javascript"> 

	$(".iadharnumber ").change(function () {      
var inputvalues = $(this).val();      
  var regex = /^\d{12}$/;  
  if(!regex.test(inputvalues)){      
  $(".iadharnumber").val("");    
  swal("Alert!","Invalid Aadhaar Number", "error");    
  return regex.test(inputvalues);    
  }    
}); 

</script> 

<script type="text/javascript">    
$(document).ready(function(){     
        
$(".icontactnumber").change(function () {      
var inputvalues = $(this).val();      
  var regex =/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;    
  if(!regex.test(inputvalues)){      
  $(".icontactnumber").val("");    
  swal("Alert!","Invalid Seller Phone-Number no", "error");    
  return regex.test(inputvalues);    
  }    
});      
    
});    
</script>	
	
<script>
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#ipass');
togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
</script>	
     <script>
  
function validatecompany(){

	var iname = document.getElementById("iname").value;
	var icontactnumber = document.getElementById("icontactnumber").value;
	var iadharnumber = document.getElementById("iadharnumber").value;
	var iemailid = document.getElementById("iemailid").value;
	var ipass = document.getElementById("ipass").value;
	var iconpass = document.getElementById("iconpass").value;
    var iaddres = document.getElementById("iaddres").value;
	var iicity = document.getElementById("iicity").value;
	var istate = document.getElementById("istate").value;
	var icountry = document.getElementById("icountry").value;
	var icontactperson = document.getElementById("icontactperson").value;
    var igstnumber = document.getElementById("igstnumber").value;
	var icompanyname = document.getElementById("icompanyname").value;
	var ipincode = document.getElementById("ipincode").value;
	var itypeseller = document.getElementById("itypeseller").value;

if(iname == '' || icontactnumber == '' || iadharnumber == '' || iemailid == '' || ipass == '' || iconpass == '' || iaddres == '' || iicity == '' || istate == '' || icountry == '' || icontactperson == '' || igstnumber == '' || icompanyname == '' || ipincode == '' || itypeseller == ''){
		swal("Alert!",  "Seller Name, Company Name, aahdar card, aahdar Number, Contact Number, E-Mail, User Name, Password , Repeat Password, Pan, GST, Address, Street, City, State, Pin  cannot leave any field blank!", "error");
		return false;
	}
	else{
        $.ajax({
            type:'submit',
            data: {iname:iname,icontactnumber:icontactnumber,iadharnumber:iadharnumber,iemailid:iemailid,ipass:ipass,iconpass:iconpass,iaddres:iaddres,icity:icity,istate:istate,icountry:icountry,icontactperson:icontactperson,itypeseller:itypeseller,igstnumber:igstnumber,icompanyname:icompanyname,ipincode:ipincode},
           success:function(data){
                swal("Success", "Data Saved Successfully", "success");
            },
            error:function(xhr, thrownError, ajaxOptions){

            },
        });
    }
	
	if (icontactnumber.value.length < 10 || icontactnumber.value.length > 10) {
    swal("Alert!", "Mobile No. is not valid, Please Enter 10 Digit Mobile No.", "error");
    return false;
  }
  else if (icontactnumber.value == "") {
    swal("Alert!","Please enter your Mobile No.","error");
    return false;
  }
	
	if(ipass != iconpass){
		swal("Alert!",  "Password and Confirm Password Should Match!", "error");
		return false;
	}
	
}
  </script>
<script>
function validateForm() {
    //collect form data in JavaScript variables
    var pw1 = document.getElementById("ipass").value;
    var pw2 = document.getElementById("iconpass").value;
   
  
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
	  
    