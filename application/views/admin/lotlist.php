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
                    <table class="table table-striped table-bordered" id="myTable" cellspacing="0" width="100%">
                      <thead>
					   <tr>
		<th colspan="10">LOT LIST
			   </th>   
      </tr>
						 <th>
                            Sl.No.
                          </th>
						    <th>
						  Product Name
						  </th>
						  <th>
						  Product Description
						  </th>
						    <th>
                      Email
                          </th>
						     <th>
                         Auction Id
                          </th>
                          <th>
                          Category
                          </th>
                          <th>
						 Seller Name
                          </th>
						
                       
                          <th>
                    Seller Company Name
                          </th>
						
						  <th>
						 Action
						  </th>
                        </tr>
                      </thead>
                      <tbody>
					  
					  
					  
					  
                 <?php $count = 1;?>
					
			<?php foreach($data as $row){?>
			
			
			
			 <?php $proid = str_ireplace('/','-',$row->iauctionid); ?>
			
			
			
				<tr>												
					<td><?php echo $count ?> </td>
					 <td><?php echo $row->iproductname ?></td>
				
					 <td><?php echo $row->iproductdes ?></td>
					<td><?php echo $row->iemailid ?> </td>
					<td><?php echo $row->iauctionid ?> </td>
					
					
					<td><?php echo $row->icategory ?> </td>
					<td><?php echo $row->icontactperson ?> </td>
					<td><?php echo $row->icompanyname ?> </td>
					
				
					
					
					
					
					<td >  
					
					
		<a href="<?php echo base_url()."Admin_editlot/index/".urldecode($proid);?>"><i class="fa fa-edit m-2" style="font-size:18px;color:blue;"></i></a>
		
		

	
</td>



				
				</tr>
				<?php $count++ ?>
				
			<?php }?>
  
	
				</tbody> 
						
	
                    </table>

      </div>
	  
	  
	  

    </div>
  </section>

  </main><!-- End #main -->
 