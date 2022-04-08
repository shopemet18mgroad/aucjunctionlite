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
<label class="form-label" for="">GST Number</label>
                 
                 
                 
                  </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
					
					
               		<input type="text" class="form-control form-control-lg" id="icompanyname"  name="icompanyname" onclick = "return validate_usergst12()"> 
                      <label class="form-label" for="form3Examplea4">Company Name</label>
					  
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
	 <option value="Public Financial Institutions">Public Financial Institutions</option>
	 <option value="Foreign Companies">Foreign Companies
</option>
	 <option value="Charitable Companies">Charitable Companies</option>
	 <option value="Government Companies">Government Companies</option>
	 <option value="Companies in terms of Access to Capital">Companies in terms of Access to Capital</option>
	 <option value="Associate Companies">Associate Companies</option>
	 <option value="Holding and Subsidiary Companies">Holding and Subsidiary Companies</option>
	  <option value="Public Companies">Public Companies</option>
	  <option value="Private Companies">Private Companies</option>
	  <option value="Companies Limited by Guarantee">Companies Limited by Guarantee</option>
	  <option value="Companies Limited by Shares">Companies Limited by Shares</option>
	 
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
                    <input type="password" class="form-control form-control-lg" id="iconpass" name="iconpass" maxLength="15" placeholder="Repeat password should be maximum length 15 "><i class="bi bi-eye-slash errspan" id="togglePassword1"></i>
                    
                    
                    
                      <label class="form-label" for="form3Examplea3"> Confirm Password</label>
                    </div>
                  </div>
                  
                  
                    <div class="row">
                    
                        <div class="col-md-12 mb-4 pb-2">

                      <div class="form-outline form-white">
                   <input type="text" class="form-control form-control-lg" id="iaddres" name="iaddres" onclick= "return validate_useremail()">
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
                  
                 	<input type="hidden" id="role" name="role"  value="COMPANY"> 
                  

    <input type="hidden" id="iotp" name="iotp" value="<?php echo(rand(1000,10000)); ?>">             

          

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


  </main><!-- End #main -->


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
	
    
    
    
    
    
<script type="text/javascript">    
$(document).ready(function(){     
        
$(".igstnumber").change(function () {      
var inputvalues = $(this).val();      
  var regex = /^([0-9]){2}([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}([0-9]){1}([a-zA-Z]){1}([0-9A-Z]){1}?$/;    
  if(!regex.test(inputvalues)){      
  $(".igstnumber").val("");    
  swal("Alert!","Invalid GST Number", "error");    
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
  
function validateindiviual(){

	var iname = document.getElementById("iname").value;
	var icontactnumber = document.getElementById("icontactnumber").value;
	var iadharnumber = document.getElementById("iadharnumber").value;
	var iemailid = document.getElementById("iemailid").value;
	var ipass = document.getElementById("ipass").value;
	var iconpass = document.getElementById("iconpass").value;
	var iadharcardfile = document.getElementById("iadharcardfile").value;
	var iaddres = document.getElementById("iaddres").value;
	var iicity = document.getElementById("iicity").value;
	var istate = document.getElementById("istate").value;
	var icountry = document.getElementById("icountry").value;
	var icontactperson = document.getElementById("icontactperson").value;
	var iaddresprof = document.getElementById("iaddresprof").value;
	
	

if(iname == '' || icontactnumber == '' || iadharnumber == '' || iemailid == '' || ipass == '' || iconpass == '' || iadharcardfile == '' || iaddres == '' || iicity == '' || istate == '' || icountry == '' || icontactperson == '' || iaddresprof == ''){
		swal("Alert!",  "Seller Name, Company Name, aahdar card, aahdar Number, Contact Number, E-Mail, User Name, Password , Repeat Password, Pan, GST, Address, Street, City, State, Pin  cannot leave any field blank!", "error");
		return false;
	}
	else{
        $.ajax({
            type:'submit',
            data: {iname:iname,icontactnumber:icontactnumber,iadharnumber:iadharnumber,iemailid:iemailid,ipass:ipass,iconpass:iconpass,iadharcardfile:iadharcardfile,iaddres:iaddres,icity:icity,istate:istate,icountry:icountry,icontactperson:icontactperson,iaddresprof:iaddresprof},
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
    
          <script>
  function validate_useremail(){
	  var val = document.getElementById("iemailid").value;
		if(val != ''){
			 $.get('<?php echo base_url() .'Admin_addseller/validate_buyerid11/'; ?>'+val, function(data2){				 
				 if($.trim(data2) == "BYE"){
					swal("Alert!",  "Email ID Already Exists", "error");
					document.getElementById("iemailid").value = "";
					return false;
				}else{
					return true;
				}
			 });
			
		}else{
			swal("Alert!",  "Please Enter User Email ID!", "error");
			return false;
		}
  }
  </script>
      <script>
  function validate_usergst12(){
	  var val = document.getElementById("igstnumber").value;
		if(val != ''){
			 $.get('<?php echo base_url() .'Admin_addbussiness/validate_gstnumber/'; ?>'+val, function(data2){				 
				 if($.trim(data2) == "BYE"){
					swal("Alert!", "GST Number Already Exists", "error");
					document.getElementById("igstnumber").value = "";
					return false;
				}else{
					return true;
				}
			 });
			
		}else{
			swal("Alert!",  "Please Enter User GST Number!", "error");
			return false;
		}
  }
  </script>    
      
    <script>
const togglePassword1 = document.querySelector('#togglePassword1');
const password1 = document.querySelector('#iconpass');
togglePassword1.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
    password1.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
</script>    
       
      
      
	  
    
    
