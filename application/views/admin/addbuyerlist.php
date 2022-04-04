<main id="main">
 <link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">
   
    <section id="hero" class="d-flex align-items-center">
       <link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center mt-5">
                <div class="col-xl-7 col-lg-9 text-center">
           <a href="#"
            ><img src="<?php echo base_url()."web_files/";?>assets/img/aucjunction.png" width="220px"
          /></a>
        </div>

        </div>

      <div class="row ">
         <table class="table table-striped" id="myTable">
  <thead>
  
  
  
    		 <tr>
						 <th>
                            Sl. No .
                          </th>
                          <th>
                           NAME
                          </th>
                          <th>
						 AADHAAR NUMBER
                          </th>
                          
                          <th>
                          EMAIL
                          </th>
                          <th>
                      ACTION
                          </th>
                        </tr>
    
    
    
  </thead>
   <tbody>
					  
					  
					  
					  
                 <?php $count = 1;?>
					
			<?php foreach($data as $row){?>
				<tr>												
					<td data-label="Sl.No."><?php echo $count ?> </td>
					<td data-label="NAME"><?php echo $row->buyername ?> </td>
					<td data-label="AADHAAR NUMBER"><?php echo $row->buyerasdharnumber ?> </td>
					<td data-label="EMAIL"><?php echo $row->buyeremail ?> </td>
					<td data-label="ACTION" >
					
					  
					
					
		<a href="<?php echo base_url()."Admin_editbuyer2/index/".urldecode($row->buysl_no);?>"><i class="fa fa-edit m-2" style="font-size:18px;color:blue;"></i></a>
		
		<a href="<?php echo base_url()."Admin_buyerviewdetail/index/".urldecode($row->buysl_no);?>"><i class="fa fa-eye m-2" style="font-size:18px;color:grey;"></i></a>

		
		<a href ="<?php echo base_url()."Admin_addbuyerlist/seller_delete/".urldecode($row->buysl_no);?>">
						<i class="fa fa-trash m-2" style="font-size:18px;color:red"></i></a>
						
	<a href="<?php echo base_url()."Admin_addbuyerlist/reject/".urldecode($row->buysl_no);?>"><i class="fa fa-ban m-2" style="font-size:18px;color:red;"></i></a>




				
				</tr>
				<?php $count++ ?>
				
			<?php }?>
  
	
				</tbody> 

</table>
        

      </div>

    </div>
  </section>

  </main><!-- End #main -->