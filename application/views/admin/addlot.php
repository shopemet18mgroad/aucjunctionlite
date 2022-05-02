
  	  
        <main id="main">
    <section class="h-100 h-custom-2 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row m-4 m-4 d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
       
                  
     
            
            
                  
                 <form action= "<?php echo base_url();?>Admin_addlot_info"
				 method="post" enctype="multipart/form-data"> 
				
				
				
                  <h4 class="card-title">ADD LOT </h4>
                  <p class="card-description">
                    
                  </p>
				  
				  
<input type="hidden" class="form-control form-control-lg" id="iauction_start" name="iauction_start" value="<?php 
				  if(isset($txdata['iauction_start'])){
					   echo $txdata['iauction_start'];
				  }else{
					  echo "NA";
				  }
				  
				 ?>">
				  
				  
<input type="hidden" class="form-control form-control-lg" id="iauction_end" name="iauction_end" value="<?php 
				  if(isset($txdata['iauction_end'])){
					   echo $txdata['iauction_end'];
				  }else{
					  echo "NA";
				  }
				  
				 ?>">
				  
 <input type="hidden" class="form-control form-control-lg" id="iauctionid" name="iauctionid" value="<?php 
				  if(isset($txdata['iauctionid'])){
					   echo $txdata['iauctionid'];
				  }else{
					  echo "NA";
				  }
				  
				 ?>">
					 
<input type="hidden" class="form-control form-control-lg" id="irole" name="irole" value="<?php 
				  if(isset($txdata['irole'])){
					   echo $txdata['irole'];
				  }else{
					  echo "NA";
				  }
				  
				 ?>"> 
					 
<input type="hidden" class="form-control form-control-lg" id="iemailid" name="iemailid" value="<?php 
				  if(isset($txdata['iemailid'])){
					   echo $txdata['iemailid'];
				  }else{
					  echo "NA";
				  }
				  
				 ?>">
					 
					 
					 	  <input type="hidden" class="form-control form-control-lg" id="icontactperson" name="icontactperson" value="<?php 
				  if(isset($txdata['icontactperson'])){
					   echo $txdata['icontactperson'];
				  }else{
					  echo "NA";
				  }
				  
				 ?>">
					 
					 
					 
					 	  <input type="hidden" class="form-control form-control-lg" id="icompanyname" name="icompanyname" value="<?php 
				  if(isset($txdata['icompanyname'])){
					   echo $txdata['icompanyname'];
				  }else{
					  echo "NA";
				  }
				  
				 ?>">
					 
					 
                  
                  
                    <div class="form-group row m-4">
                      <label for="" class="col-sm-3 col-form-label">Category</label>
                      <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="icategory" name="icategory">
				<option value="Select" selected>Select</option>
				<option value="Automobile">Automobile</option>
				<option value="Home Appliance">Home Appliance</option>
				<option value="Electronic Appliance">Electronic Appliance </option>
				<option value="Mobile">Mobile</option>
				<option value="Properties">Properties</option>
					<option value="Furniture">Furniture</option>
				<option value="Toys">Toys</option>
				<option value="Fashion">Fashion</option>
				<option value="TV">TV</option>
				<option value="Washing machine">Washing machine</option>
				<option value="Fridge">Fridge</option>
				<option value="Camera">Camera</option>
				<option value="Laptop">Laptop</option>
			
				
		
				</select>
                      </div>
                    </div>
                    
                    
                  <div class="form-group row m-4">
                      <label for="" class="col-sm-3 col-form-label">Sub-category</label>
                      <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="isubcategory" name="isubcategory" onChange="auction_id()">
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
                   
                    <div class="form-group row m-4">
                      <label for="" class="col-sm-3 col-form-label">product Description</label>
                      <div class="col-sm-9">
                        <textarea row m-4s="4" cols="5" class="form-control form-control-lg" id="iproductdes" name="iproductdes" placeholder="product Description " ></textarea>
                      </div>
                    </div>
					
						<div class="form-group row m-4">
                      <label for="" class="col-sm-3 col-form-label">Product Name </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="iproductname" name="iproductname" placeholder="Product Name ">
                      </div>
                    </div>
					
					
                    <div class="form-group row m-4">
                      <label for="" class="col-sm-3 col-form-label">Inspection Till</label>
                      <div class="col-sm-9">
                        <input type="datetime-local" class="form-control form-control-lg" id="inspectiondate" name="inspectiondate" placeholder="Inspection Date ">
                      </div>
                    </div>
					
					
                    <div class="form-group row m-4">
                      <label for="" class="col-sm-3 col-form-label"> Expected price</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="imrp" name="imrp" placeholder="Expect price ">
                      </div>
                    </div>
                    
                    <div class="form-group row m-4">
                      <label for="" class="col-sm-3 col-form-label">Start  Auction Price</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="startaucprice" name="startaucprice" placeholder="Start Auction Price">
                      </div>
                    </div>
					
					
					
				
								<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
								<script type="text/javascript">
									var citiesByState = {
												Odisha: ["Bhubaneswar", "Puri", "Cuttack"],
										Maharashtra: ["Ahmednagar","Akola","Amravati","Aurangabad","Beed","Bhandara","Buldhana","Chandrapur","Dhule","Gadchiroli","Gondia","Hingoli","	Jalgaon","Jalna","Kolhapur","Latur","Mumbai City","Mumbai Suburban","Nagpur","Nanded","Nandurbar","Nashik","Osmanabad","Palghar","Parbhani","Pune","Raigad","Ratnagiri"," Sangli","Satara","Sindhudurg","Solapur","Thane","Wardha","Washim","Yavatmal"],
									Kerala: ["kochi", "Kanpur","Alappuzha","Ernakulam","Idukki","Kasaragod","Kollam","Kottayam","Kozhikode","Malappuram","Palakkad","Pathanamthitta","Thiruvananthapuram","Thrissur","Wayanad"],
										Karnataka: ["Bengaluru","Dakshina-Kannada", "Hubli-Dharwad", "Mysuru", "Kalaburagi", "Mangaluru", "Dakshina Kannada", "Belagavi", "Davanagere", "Ballari", "Vijayapura", "Shivamogga", "Tumakuru", "Raichur", "Bidar", "Hosapete", "Vijayanagara", "Gadag-Betageri", "Gadag", "Robertsonpete", "Kolara", "Hassan", "Bhadravati", "Gokak", "Belagavi", "Udupi", "Mandya", "Chikkamagaluru", "Gangavati", "Koppal", "Bagalkote", "Ranebennuru", "Haveri"],
										ArunachalPradesh: ["Itanagar"],
										AndhraPradesh: ["Visakhapatnam","Vizanagaram","Srikakulam","East Godavari","West Godavari","krishna","Guntur","prakasam","Kurnool","Nellore","Kadapa","Chittoor","Anantapur","vijyawada"],
										Assam: ["Dispur"],
										Bihar: ["Patna"],
                                        
										Chhattisgarh: ["Naya Raipur"],
										Goa: ["Panaji"],
										Gujarat: ["Gandhinagar"],
										Haryana: ["Chandigarh"],
										HimchalaPradesh: ["Shimla"],
										Jharkhand: ["Ranchi"],
										
										MadhyaPradesh: ["Bhopal"],
										
										Manipur: ["Imphal"],
										Meghalaya: ["Shillong"],
										Mizoram: ["Aizawl"],
										Nagaland: ["Kohima"],
										Odisha: ["Bhubaneswar"],
										Punjab: ["Chandigarh"],
										Rajasthan: ["Jaipur"],
										Sikkim: ["Gangtok"],
										TamilNadu: ["Ariyalur","Chennai","Coimbatore","Chengalpattu",
	"Cuddalore","Dharmapuri","Dindigul","Erode","Kallakurichi","Kanchipuram	","	Kanyakumari	","	Karur"," Krishnagiri","Madurai","Mayiladuthurai","Nagapattinam","Namakkal","Nilgiris","Perambalur","Pudukkottai","Ramanathapuram","	Ranipet	","Salem","Sivagangai","Tenkasi","Thanjavur	","	Theni","Thoothukudi	","Tiruchirappalli","Tirunelveli","	Tirupattur","Tiruppur ","Tiruvallur	","	Tiruvannamalai","Tiruvarur","Vellore","Viluppuram","Virudhunagar"],
										Telangana: ["Adilabad",
"Bhadradri Kothagudem",
"Hyderabad Jagtial",
"Jangaon",
"Jayashankar Bhoopalpally",
"Jogulamba Gadwal",
"Kamareddy",
"Karimnagar",
"Khammam",
"Komaram Bheem Asifabad",
"Mahabubabad",
"Mahabubnagar",
"Mancherial",
"Medak",
"Medchal",
"Nagarkurnool",
"Nalgonda",
"Nirmal",
"Nizamabad",
"Peddapalli",
"Rajanna Sircilla",
"RangareddySangareddy",
"Siddipet",
"Suryapet",
"Vikarabad",
"Wanaparthy",
"Warangal (Rural)",
"Warangal (Urban)","Yadadri Bhuvanagiri"],
										Tripura: ["Agartala"],
										UttarPradesh: ["Lucknow"],
										Uttarakhand: ["Dehradun"],
										WestBengal: ["Kolkata"],
									}

									function makeSubmenu(value) {
										if (value.length == 0) document.getElementById("pcities").innerHTML = "<option></option>";
										else {
											var citiesOptions = "";
											for (cityId in citiesByState[value]) {
												citiesOptions += "<option>" + citiesByState[value][cityId] + "</option>";
											}
											document.getElementById("pcities").innerHTML = citiesOptions;
										}
									}

									function displaySelected() {
										var country = document.getElementById("pstates").value;
										var city = document.getElementById("pcities").value;
										alert(country + "\n" + city);
									}

									function resetSelection() {
										document.getElementById("pstates").selectedIndex = 0;
										document.getElementById("pcities").selectedIndex = 0;
									}
								</script>

								  <div class="form-group row m-4">
	  
	   	<label for="" class="col-sm-3 col-form-label">State</label>
				 <div class="col-sm-9">	

								<body onload="resetSelection()">
									<select class="form-control form-control-lg " id="pstates" name="pstates" size="1" onchange="makeSubmenu(this.value)">
										<option value="" disabled selected>Choose State</option>
										<option>Odisha</option>
										<option>Maharashtra</option>
										<option>Kerala</option>
										<option>ArunachalPradesh</option>
										<option>AndhraPradesh</option>
										<option>Assam</option>
										<option>Chhattisgarh</option>
										<option>Goa</option>
										<option>Gujarat</option>
										<option>Haryana</option>
										<option>HimchalaPradesh</option>
										<option>Jharkhand</option>
										<option>Karnataka</option>
										<option>Kerala</option>
										<option>MadhyaPradesh</option>
										<option>Manipur</option>
										<option>Meghalaya</option>
										<option>Mizoram</option>
										<option>Nagaland</option>
										<option>Odisha</option>
										<option>Punjab</option>
										<option>Rajasthan</option>
										<option>Sikkim</option>
										<option>TamilNadu</option>
										<option>Telangana</option>
										<option>Tripura</option>
										<option>UttarKhand </option>
										<option>UttarPradesh</option>
										<option>WestBengal</option>
										<option>Andaman and nicobar</option>
										<option>Chandigarh</option>
										<option>Dadra and Nagar Haveli and Daman & Diu</option>
										<option>Jammu and kashmir</option>
										<option>ladakh</option>
										<option>puduchery</option>
									</select>


							</div>
							</div>
							
							
							  <div class="form-group row m-4">
							

							
							
							
							
								
								<label for="" class="col-sm-3 col-form-label">City</label>
								
								<div class="col-sm-9">
								<select class="form-control form-control-lg" id="pcities" name="pcities" size="1">
									<option value="" disabled selected>Choose City</option>
									<option></option>
								</select>
							</div>				
					
					</div>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
                    
                   
					
					     <div class="form-group row m-4">
                      <label for="" class="col-sm-3 col-form-label">entry free </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-lg" id="entryfee" name="entryfee" placeholder="Entry Fee">
                      </div>
                    </div>
					
                   
				  
						
					
					
					
					
			 <div class="form-group row m-4">
                      <label for="" class="col-sm-3 col-form-label">Upload photos</label>
                      <div class="col-sm-9">
                        <input type="file" class="mt-3" id="imageupload" name="imageupload[]" multiple placeholder="End Auction Price">
                      </div>
                    </div>
                   		
					
					
					
					
				
					
				
                 <center><button type="submit" onclick="return validateaddlot()" name="submit" class="btn btn-info mr-2 w-50">Submit</button>
                    <button class="btn btn-light">Cancel</button></center>
                  </form>
     
		   </div>
		   </div>
		   </div>
		
		   </section>
         
      </main>

	<script> 
function validateaddlot(){

	var icategory = document.getElementById("icategory").value;
	var isubcategory = document.getElementById("isubcategory").value;
	var iproductdes = document.getElementById("iproductdes").value;
	var iproductname = document.getElementById("iproductname").value;
	var imrp = document.getElementById("imrp").value;
	var entryfee = document.getElementById("entryfee").value;
	var currentlocation = document.getElementById("currentlocation").value;
	var inspectiondate = document.getElementById("inspectiondate").value;
	var startaucprice = document.getElementById("startaucprice").value;
	
	var imageupload = document.getElementById("imageupload").value;
	
	

if(icategory == '' || isubcategory == '' || iproductdes == '' || iproductname == '' || imrp == '' || startaucprice ==  '' || imageupload == ''|| inspectiondate == ''|| currentlocation == ''|| entryfee == '' ){
		swal("Alert!","Category, Sub-category, product Description, Inspection Date, Expected price, Start  Auction Price, End Auction Price , Inspection date and time,Upload photos, Pin  cannot leave any field blank!", "error");
		return false;
	}
	else{
        $.ajax({
            type:'submit',
            data: {icategory:icategory,isubcategory:isubcategory, iproductdes: iproductdes,iproductname:iproductname,imrp:imrp,startaucprice:startaucprice,inspectiondate:inspectiondate,currentlocation:currentlocation,entryfee:entryfee, imageupload: imageupload},
           success:function(data){
                swal("Success", "Data Saved Successfully", "success");
            },
            error:function(xhr, throw m-4nError, ajaxOptions){

            },
        });
    }
}
</script>	
     
