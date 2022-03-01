<div class="main-panel">
		
          <div class="content-wrapper">
		  
		    <div class="col-lg-12 grid-margin stretch-card">
	  
	   
	      
	   
	   
              <div class="card">
			  
		
                <div class="card-body">
			
				
				
				
				  <div class="table-responsive" style="border-radius:10px">
                    <table class="table table-striped table-bordered" id="myTable" cellspacing="0" width="100%">
                      <thead>
					   <tr>
		<th colspan="10">Auction List<a href="<?php echo base_url();?>Admin_addbuyer"></a>
			   </th>   
      </tr>
						 <th>
                            Sl. No .
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

					 <td> <?php echo $row->iauctionid ?></a></td>
					<td><?php echo $row->icategory ?> </td>
					<td><?php echo $row->icontactperson ?> </td>
					
					
					<td><?php echo $row->icompanyname ?> </td>
					
					<td><?php echo $row->iauction_start ?><br> to <br>
					<?php echo $row->iauction_end ?> </td>
					
					
					
					
					
					<td >  
					
					
		<a href="<?php echo base_url()."Admin_editauction/index/".urldecode($row->sl_ano);?>"><i class="fa fa-edit m-2" style="font-size:18px;color:blue;"></i></a>
		
		<a href="<?php echo base_url()."Admin_addlotview/index/".urldecode($row->sl_ano);?>"><i class="fa fa-eye m-2" style="font-size:18px;color:grey;"></i></a>

		
		<a href ="<?php echo base_url()."Admin_auctioneditlist/seller_delete/".urldecode($row->sl_ano);?>">
						<i class="fa fa-trash m-2" style="font-size:18px;color:red"></i></a>
	




				
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
 