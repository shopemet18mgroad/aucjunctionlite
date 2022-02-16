  <!-- container-scroller -->
    <!-- base:js -->
    <script src="<?php echo base_url()."web_files/";?>vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="<?php echo base_url()."web_files/";?>js/off-canvas.js"></script>
    <script src="<?php echo base_url()."web_files/";?>js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url()."web_files/";?>js/template.js"></script>
    <script src="<?php echo base_url()."web_files/";?>js/settings.js"></script>
    <script src="<?php echo base_url()."web_files/";?>js/todolist.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="<?php echo base_url()."web_files/";?>vendors/progressbar.js/progressbar.min.js"></script>
    <script src="<?php echo base_url()."web_files/";?>vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="<?php echo base_url()."web_files/";?>js/dashboard.js"></script>
    
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>
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
	var icity = document.getElementById("icity").value;
	var istate = document.getElementById("istate").value;
	var icountry = document.getElementById("icountry").value;
	var icontactperson = document.getElementById("icontactperson").value;
	var iaddresprof = document.getElementById("iaddresprof").value;
	
	

if(iname == '' || icontactnumber == '' || iadharnumber == '' || iemailid == '' || ipass == '' || iconpass == '' || iadharcardfile == '' || iaddres == '' || icity == '' || istate == '' || icountry == '' || icontactperson == '' || iaddresprof == ''){
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

