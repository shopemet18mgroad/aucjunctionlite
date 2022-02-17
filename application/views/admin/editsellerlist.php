
      
        
        
        <div class="main-panel">
		
          <div class="content-wrapper">
		  
		  
		    
<link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">
	
							
         
		
			
		  
		  
        
            
       <div class="col-lg-12 grid-margin stretch-card">
	  
	   
	      
	   
	   
              <div class="card">
			  
		
                <div class="card-body">
			
				
				
				
				
				
				
				
                 
                
                  <div class="table-responsive" style="border-radius:10px">
                    <table class="table table-striped table-bordered" id="myTable" cellspacing="0" width="100%">
                      <thead>
					   <tr>
		<th colspan="10">Individual List<a href="<?php echo base_url();?>Admin_addoption"></a>
			   </th>
			  
      </tr>
	  <tr>
						
                          <th>Sl.No.</th>
						  
						     <th> 
                           Name
                          </th>
                          
                          <th>Adhar Number*</th>
                          <th>EMAIL</th>
                           
                       
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
					   <?php  $count = 1;?>
					  
	<?php foreach($data as $row){?>
					  
                        <tr>
						
						
						 <td data-label="Sl.No.">  <?php echo $count;?> </td>
						 
						 
						 
                           <td data-label="Name"><?php echo $row->iname ?></td>
                          <td data-label="Adhar Number*"><?php echo $row->iadharnumber ?>      </td>
                        <td data-label="EMAIL"><?php echo $row->iemailid ?></td>
                        
                          <td>
						  
						
						  
						  
						  
						  
						<a href ="<?php echo base_url()."Admin_editseller/index/".urldecode($row->sl_no);?>"><i class="fa fa-edit m-2" style="font-size:18px;color:blue;"></i></a>
						
						<a href ="<?php echo base_url()."Admin_editsellerview/index/".urldecode($row->sl_no);?>"><i class="fa fa-eye m-2" style="font-size:18px;color:grey"></i></a>
						
						
				
						
						
						
						
						
						
                          </td>
                        </tr>
						
			<?php $count++;?>
						
	<?php }?>    
                
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          
        </div>
     
        
        
        
        
        
        
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
 