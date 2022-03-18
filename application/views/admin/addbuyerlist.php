<main id="main">

   
    <section id="hero" class="d-flex align-items-center">
     
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center mt-5">
                <div class="col-xl-7 col-lg-9 text-center">
           <a href="#"
            ><img src="<?php echo base_url()."web_files/";?>assets/img/aucjunction.png" width="220px"
          /></a>
        </div>

        </div>

      <div class="row ">
        <table class="table table-striped">
  <thead>
  
  
  
    		 <tr>
						 <th>
                            Sl. No .
                          </th>
                          <th>
                           NAME
                          </th>
                          <th>
						 AADHAAR NUMBER*
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
					<td><?php echo $count ?> </td>
					<td><?php echo $row->buyername ?> </td>
					<td><?php echo $row->buyerasdharnumber ?> </td>
					<td><?php echo $row->buyeremail ?> </td>
					
					
					<td >  
					
					
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

      <div class="row mb-5">
        <div class="col-12 p-5">
            <nav class="d-flex align-items-center justify-content-center">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
          </nav>
        </div>
          
      </div>
    </div>
  </section>

  </main><!-- End #main -->