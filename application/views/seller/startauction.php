
        <link href="<?php echo base_url()."web_files/";?>css/mediaform.css" rel="stylesheet" type="text/css">
      
		  
		<form action="<?php echo base_url();?>Admin_startauction/insert_auc" method="post" enctype="multipart/form-data">   
              
		  
        <main id="main">
    <section class="h-100 h-custom-2 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row m-3 d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
<<<<<<< HEAD
        
=======
      
          
>>>>>>> e30f1b5c32fdca24d751b65d2b880964c3823a8c
         
              
              
               <center>   <h4 class="card-title mt-3">START AUCTION </h4>         </center> 
                  <p class="card-description">
                    
                  </p>
				  
				     <div class="form-group row m-3">
                      <label for="" class="col-sm-3 col-form-label">Category</label>
                      <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="icategory" name="icategory" onChange="auction_id()">
				<option value="Select" selected>Select</option>
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
					
                    <div class="form-group row m-3">
                      <label for="" class="col-sm-3 col-form-label">Auction Id</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="iauctionid" name="iauctionid" placeholder="Auction Id" readonly>
                      </div>
                    </div>
					
						<div class="form-group row m-3">
                      <label for="" class="col-sm-3 col-form-label">Type</label>
                      <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="irole" name="irole" onChange="meghasuma()">
				<option value="Select" selected>Select</option>
				<option value="company">Company</option>
				<option value="individual">Individual</option>
				
				
				
				
				</select>
                      </div>
                    </div>
					
                    <div class="form-group row m-3">
                      <label for="" class="col-sm-3 col-form-label">Seller Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="icontactperson" name="icontactperson" placeholder="Seller Name" readonly>
                      </div>
                    </div>
								
			
                 
                    <div class="form-group row m-3 icompanyname">
                      <label for="" class="col-sm-3 col-form-label icompanyname">Seller Company Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg icompanyname" id="icompanyname" name="icompanyname" placeholder="Seller Company Name"   onkeyup="search_company()"><div id="select" class="select"><ul id="dp"></ul></div>  
                      </div>
                    </div>
					<div class="form-group row m-3 iemailid">
                      <label for="" class="col-sm-3 col-form-label iemailid ">Seller User Id</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="iemailid" name="iemailid" placeholder="Seller User ID"   onkeyup="search_company1()"><div id="select" class="select"><ul id="dpp"></ul></div>  
                      </div>
                    </div>
					
		
						 <div class="form-group row m-3">
                      <label for="" class="col-sm-3 col-form-label">Online Auction Start And End Date</label>
                      <div class="col-sm-9">
                       From: 	
                        <input class="form-control form-control-lg" id="iauction_start" name="iauction_start" type="datetime-local" >
                         To: 	
		                <input class="form-control form-control-lg" id="iauction_end" name="iauction_end" type="datetime-local" >
                      </div>
                    </div>
				
					 
                    
                 <center><button type="submit" name="submit"  onclick ="return validatestartauction()" class="btn btn-info mr-2 w-50 m-2">Submit</button>
                    <button class="btn btn-light">Cancel</button></center>
                  </form>
<<<<<<< HEAD
           </div>
		   </div>
		   </div>
		  
		   
=======
        
		 
		   </div>
		   </div>
		   </div>
>>>>>>> e30f1b5c32fdca24d751b65d2b880964c3823a8c
		
		   </section>
         
      </main>
        
       <script>
 function auction_id(){
	 var cat = document.getElementById('icategory').value;
	  //var cat2 = document.getElementById('irefid').value;
	   var d = new Date();
	   var m = d.getHours();
	   var n = d.getMinutes();
	   var s = d.getSeconds();
	   var o = d.getDate();
	   var l = d.getMonth()+1;
	   

	   
	   
	 if(cat == 'Select'){
		 swal("Alert!", "Please Select Categoery First", "error");
		 return false;
	 }
	 if(cat.length<21){
		  document.getElementById('iauctionid').value = o+"/"+l+"/"+cat+"/"+m+"/"+n+"/"+s;
	 }
 }
 </script>
 <script>
 function search_company(){
	 $("#dp").hide();
 if(document.getElementById("icompanyname").value.length > 1){
	 $("#dp").show();
			var contents = $('#icompanyname').val(); 
			$.get('<?php echo base_url() .'admin_startauction/get_seller_table/'; ?>'+contents, function(data){
				$('#dp').html(data);
			});

					
 }else{
	 return;
 }
}
</script>	 
	 

   <script>
  function search_company1(){
	 $("#dpp").hide();
 if(document.getElementById("iemailid").value.length > 1){
	 $("#dpp").show();
			var contents = $('#iemailid').val(); 
			$.get('<?php echo base_url() .'admin_startauction/get_email_table/'; ?>'+contents, function(data){
				$('#dpp').html(data);
			});

					
 }else{
	 return;
 }
}  

</script>	
	
	
	
	
	
    
    
    <script>
 function getPaging(v){
	 var s = v.split("|");
	
	document.getElementById("icompanyname").value = s[0];
    document.getElementById("icontactperson").value = s[1];
	 $("#dp").hide();
 }

 $('.ltype').click(function() {
  $('.ltype').not(this).prop('checked', false);
});

 </script>
	 <script>
	 function getPagin(v){
	 var s = v.split("|");
	
	document.getElementById("iemailid").value = s[0];
	
	
    document.getElementById("icontactperson").value = s[1];
	 $("#dpp").hide();
 } 
	  $('.ltype').click(function() {
  $('.ltype').not(this).prop('checked', false);
});
	 
	</script> 
	 
<script>

 function meghasuma(){
	 var cat = document.getElementById('irole').value;
	 //alert(cat); return false;
	 
	 if(cat == 'Select'){
		 swal("Alert!", "Please Select TYPE First", "error");
		 return false;
	 }
	 if(cat == "individual"){
		 
		   document.getElementById('iemailid').value = "";
		   document.getElementById('icontactperson').value = "";
		   document.getElementById('icompanyname').value = "NA";
		  
		  
		  $(".icompanyname").hide();
		  $(".iemailid").show();
		  
		  $("#dp").show();
		  $("#dpp").hide();
		   return false;
		   
		   
	 } else if(cat == "company"){
		 
		
		  document.getElementById('icompanyname').value = "";
		  document.getElementById('icontactperson').value = "";
		   document.getElementById('iemailid').value = "NA";
		  

		  
		  $(".icompanyname").show();
		  $(".iemailid").hide();
		  
		  
		  $("#dp").show();
		  $("#dpp").hide();
		  
		  

		  return false;
		 
	 }
 }
 
 
 
 
 

</script>

	
<script>
  
function validatestartauction(){

	var icategory = document.getElementById("icategory").value;
	var iauctionid = document.getElementById("iauctionid").value;
	var irole = document.getElementById("irole").value;
	var icompanyname = document.getElementById("icompanyname").value;
	var icontactperson = document.getElementById("icontactperson").value;
	var iemailid = document.getElementById("iemailid").value;
	var iauction_start = document.getElementById("iauction_start").value;
	var iauction_end = document.getElementById("iauction_end").value;
	
	
	

if(icategory == '' || iauctionid == '' || irole == '' || icompanyname == '' || iemailid == '' || iauction_end == '' || iauction_start == ''){
		swal("Alert!",  "Category,Auction id,Type,Company Name, Contact Person, E-Mail, Start Auction,End Auction cannot leave any field blank!", "error");
		return false;
	}
	else{
        $.ajax({
            type:'submit',
            data: {icategory:icategory,iauctionid:iauctionid,irole:irole,icompanyname:icompanyname,iemailid:iemailid,iauction_start:iauction_start,iauction_end:iauction_end},
           success:function(data){
                swal("Success", "Data Saved Successfully", "success");
            },

        });
    }
	
	
}
  </script>
	
	
	



	
	
	
	


