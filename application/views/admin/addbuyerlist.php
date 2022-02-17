<div class="main-panel">
		
          <div class="content-wrapper">
		  
		    <div class="col-lg-12 grid-margin stretch-card">
	  
	   
	      
	   
	   
              <div class="card">
			  
		
                <div class="card-body">
			
				
				
				
				  <div class="table-responsive" style="border-radius:10px">
                    <table class="table table-striped table-bordered" id="myTable" cellspacing="0" width="100%">
                      <thead>
					   <tr>
		<th colspan="10">Buyer List<a href="<?php echo base_url();?>Admin_addbuyer"></a>
			   </th>   
      </tr>
						 <th>
                            Sl. No .
                          </th>
                          <th>
                           NAME
                          </th>
                          <th>
						 ADAR NUMBER*
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

<i class="fa fa-eye" style="font-size:24px;color:gray"></i>		</td>		




				
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
 