<div class="main-panel">
		
          <div class="content-wrapper">
		  
		    <div class="col-lg-12 grid-margin stretch-card">
	  
	   
	      
	   
	   
              <div class="card">
			  
		
                <div class="card-body">
			
				
				
				
				  <div class="table-responsive" style="border-radius:10px">
                    <table class="table table-striped table-bordered" id="myTable" cellspacing="0" width="100%">
                      <thead>
					   <tr>
		<th colspan="10">Auction List
			   </th>   
      </tr>
						 <th>
                            Sl. No .
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
						  Online Auction Start And End Date
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
				
					 <td><?php echo $row->iproductdes ?></a></td>
					<td><?php echo $row->iemailid ?> </td>
					<td><?php echo $row->iauctionid ?> </td>
					
					
					<td><?php echo $row->icategory ?> </td>
					<td><?php echo $row->icontactperson ?> </td>
					<td><?php echo $row->icompanyname ?> </td>
					
					<td><?php echo $row->iauction_start ?><br> to <br>
					<?php echo $row->iauction_start ?> </td>
					
					
					
					
					
					<td >  
					
					
		<a href="<?php echo base_url()."Admin_editlot/index/".urldecode($proid);?>"><i class="fa fa-edit m-2" style="font-size:18px;color:blue;"></i></a>
		
		

		
	<!--	<a href ="<?php// echo base_url()."Admin_editlot/seller_delete/".urldecode($row->sl_noadd);?>">
						<i class="fa fa-trash m-2" style="font-size:18px;color:red"></i></a>-->
	
</td>



				
				</tr>
				<?php $count++ ?>
				
			<?php }?>
  
	
				</tbody> 
						
	
                    </table>
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
    <!-- container-scroller -->
 