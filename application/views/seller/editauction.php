      <main id="main">
    <section class="h-100 h-custom-2 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row m-5 m-5 d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row m-5 m-5 g-0">
			  <div class="col-lg-12">
                <div class="p-5">
            
         




		  
		<form action="<?php echo base_url();?>Admin_startauction_update" method="post" enctype="multipart/form-data">   
              
		  
      
                  <h4 class="card-title"> EDIT START AUCTION </h4>
                  <p class="card-description">
                    
                  </p>

                    <div class="form-group row m-5">
                      <label for="" class="col-sm-3 col-form-label">Category</label>
                      <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="icategory" name="icategory" onChange="auction_id()">
				<option value="<?php echo $sqldata[0]->icategory ?>" selected><?php echo $sqldata[0]->icategory ?></option>
				<option value="Cars">Cars</option>
				<option value="Bikes">Bikes</option>
				<option value="Laptop">Laptop</option>
				<option value="Mobile">Mobile</option>
				
				
				
				</select>
                      </div>
                    </div>
					
					
					
					  <div class="form-group row m-5">
                      
                      <div class="col-sm-9">
                        <input type="hidden" class="form-control form-control-lg" id="sl_ano" name="sl_ano" placeholder="Seller Name" value="<?php echo $sqldata[0]->sl_ano ?>" readonly>
                      </div>
                    </div>
			
					
                    <div class="form-group row m-5">
                      <label for="" class="col-sm-3 col-form-label">Auction Id</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="iauctionid" name="iauctionid" placeholder="Auction Id" readonly value="<?php echo $sqldata[0]->iauctionid ?>" >
                      </div>
                    </div>
					
						<div class="form-group row m-5">
                      <label for="" class="col-sm-3 col-form-label">Type</label>
                      <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="" name="irole" onChange="meghasuma()" value="<?php echo $sqldata[0]->irole ?>">
				
				<option value="<?php echo $sqldata[0]->irole ?>" selected><?php echo $sqldata[0]->irole ?></option>
				<option value="company">Company</option>
				
				<option value="individual">Individual</option>
				
				
				
				
				</select>
                      </div>
                    </div>	
					
					
					
					
					
					
					
					
					
                    <div class="form-group row m-5">
                      <label for="" class="col-sm-3 col-form-label">Seller Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="icontactperson" 
						name="icontactperson" placeholder="Seller Name" readonly
						value="<?php echo $sqldata[0]->icontactperson ?>">
                      </div>
                    </div>
								
			
					
					
                 
                    <div class="form-group row m-5 icompanyname">
                      <label for="" class="col-sm-3 col-form-label icompanyname">Seller Company Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg icompanyname" id="icompanyname" name="icompanyname" placeholder="Seller Company Name"  value="<?php echo $sqldata[0]->icompanyname ?>"  onkeyup="search_company()"><div id="select" class="select"><ul id="dp"></ul></div>  
                      </div>
                    </div>
					<div class="form-group row m-5 iemailid">
                      <label for="" class="col-sm-3 col-form-label iemailid ">Seller User Id</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="iemailid" value="<?php echo $sqldata[0]->iemailid ?>" name="iemailid" placeholder="Seller User ID"   onkeyup="search_company1()"><div id="select" class="select"><ul id="dpp"></ul></div>  
                      </div>
                    </div>
					
		
						 <div class="form-group row m-5">
                      <label for="" class="col-sm-3 col-form-label">Online Auction Start And End Date</label>
                      <div class="col-sm-9">
                       From: 	
                        <input type="datetime-local" class="form-control form-control-lg" id="iauction_start" name="iauction_start" value="<?php echo date('Y-m-d\TH:i', strtotime($sqldata[0]->iauction_start)) ?>"  ><br>
                         To: 	
		<input  type="datetime-local" class="form-control form-control-lg" id="iauction_end" name="iauction_end"  value="<?php echo date('Y-m-d\TH:i', strtotime($sqldata[0]->iauction_end)) ?>">
                      </div>
                    </div>
				
					 
                    
                 <center><button type="submit" name="submit" onclick ="return validatestartauction()" class="btn btn-info mr-2 w-50">Submit</button>
                    <button class="btn btn-light">Cancel</button></center>
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
         
      </main>
        
        
              
				  
				  
				  
				  
				  
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
            error:function(xhr, throw m-5nError, ajaxOptions){

            },
        });
    }
	
	
}
  </script>
	
	
	
	

