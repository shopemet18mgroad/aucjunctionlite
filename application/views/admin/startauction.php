
        
        <div class="main-panel">
          <div class="content-wrapper">
		  
		<form action="<?php echo base_url();?>Admin_startauction" method="post" enctype="multipart/form-data">   
              
		  
        
            
            
            <div class="row">
              <div class="col-lg-12 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  
                
				  <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">START AUCTION </h4>
                  <p class="card-description">
                    
                  </p>
				  
				  

					
				<div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label">Type</label>
                      <div class="col-sm-9">
                        <select class="form-control" id="irole" name="irole" onChange="meghasuma()">
				<option value="Select" selected>Select</option>
				<option value="company">Company</option>
				<option value="individual">Individual</option>
				
				
				
				
				</select>
                      </div>
                    </div>	
					
					
				  
				  
				  
				  
				  
				  
                
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label">Category</label>
                      <div class="col-sm-9">
                        <select class="form-control" id="icategory" name="icategory" onChange="auction_id()">
				<option value="Select" selected>Select</option>
				<option value="Cars">Cars</option>
				<option value="Bikes">Bikes</option>
				<option value="Laptop">Laptop</option>
				<option value="Mobile">Mobile</option>
				
				
				
				</select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label">Seller Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="icontactperson" name="icontactperson" placeholder="Seller Name" readonly>
                      </div>
                    </div>
                 
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label">Auction Id</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="iauctionid" name="iauctionid" placeholder="Auction Id" readonly>
                      </div>
                    </div>
                    <div class="form-group row icompanyname">
                      <label for="" class="col-sm-3 col-form-label icompanyname">Seller Company Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control icompanyname" id="icompanyname" name="icompanyname" placeholder="Seller Company Name"   onkeyup="search_company()"><div id="select" class="select"><ul id="dp"></ul></div>  
                      </div>
                    </div>
					<div class="form-group row iemailid">
                      <label for="" class="col-sm-3 col-form-label iemailid ">Seller User Id</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="iemailid" name="iemailid" placeholder="Seller User ID"   onkeyup="search_company1()"><div id="select" class="select"><ul id="dpp"></ul></div>  
                      </div>
                    </div>
					
		
						 <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label">Online Auction Start And End Date</label>
                      <div class="col-sm-9">
                       From: 	
                        <input class="form-control" id="iauction_start" name="iauction_start" type="datetime-local" ><br>
                         To: 	
		<input class="form-control" id="iauction_end" name="iauction_end" type="datetime-local" >
                      </div>
                    </div>
				
					 
                    
                 <center><button type="submit" name="submit" class="btn btn-info mr-2 w-50">Submit</button>
                    <button class="btn btn-light">Cancel</button></center>
                  </form>
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
 function auction_id(){
	 var cat = document.getElementById('icategory').value;
	  //var cat2 = document.getElementById('irefid').value;
	   var d = new Date();
	   var m = d.getHours();
	   var n = d.getMinutes();
	   var s = d.getSeconds();
	 if(cat == 'Select'){
		 swal("Alert!", "Please Select Categoery First", "error");
		 return false;
	 }
	 if(cat.length<21){
		  document.getElementById('iauctionid').value = "AUC/"+cat+"/"+m+"/"+n+"/"+s;
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
	 function getPagin(b){
	 var a = b.split("|");
	
	document.getElementById("iemailid").value = a[0];
	
	
    document.getElementById("icontactperson").value = a[1];
	 $("#dp").hide();
 } 
	 
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
		  
		  
		  $(".icompanyname").hide();
		  $(".iemailid").show();
		  
		  $("#dp").show();
		  $("#dpp").hide();
		   return false;
		   
		   
	 } else if(cat == "company"){
		 
		
		  document.getElementById('icompanyname').value = "";
		  document.getElementById('icontactperson').value = "";
		  

		  
		  $(".icompanyname").show();
		  $(".iemailid").hide();
		  
		  
		  $("#dp").show();
		  $("#dpp").hide();
		  
		  

		  return false;
		 
	 }
 }
 
 
 
 
 

</script>
	 
    
    

