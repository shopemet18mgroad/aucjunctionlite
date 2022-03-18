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
   <tr>
						
                          <th>Sl.No.</th>
						  
						     <th> 
                           Name
                          </th>
                          
                          <th>AADHAAR NUMBER*</th>
                          <th>EMAIL</th>
						    <th>ROLE</th>
                           
                       
                          <th>
                            ACTION
                          </th>
                        </tr>
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
                        <td data-label="ROLE"><?php echo $row->role ?></td>
                          <td>
						  
						
						  
						  
						  
						  
						<a href ="<?php echo base_url()."Admin_approvallist/sellerapprove/".urldecode($row->sl_no);?>"><i class="fa fa-check m-2" style="font-size:18px;color:green;"></i></a>
						
					
						
				
						
						
						
						
						
						
                          </td>
                        </tr>
						
			<?php $count++;?>
						
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