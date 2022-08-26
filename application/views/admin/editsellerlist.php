
<main id="main">

    <section id="hero" class="d-flex align-items-center">
     <link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center mt-5">
                <div class="col-xl-7 col-lg-9 text-center">
           <a href="#"
            ><img src="<?php echo base_url()."web_files/";?>assets/img/aucjunction.png" width="100px"
          /></a>
        </div>

        </div>
        
     
      <div class="row ">
        <table class="table table-striped" id="myTable">
  <thead>
  
  
  
    <tr>
      <th scope="col">Sl.No.</th>
      <th scope="col"> Name</th>
    
     
      <th scope="col">ROLE</th>
      <th scope="col"> ACTION</th>
    </tr>
    
  </thead>
  <tbody>
      <?php  $count = 1;?>
					  
	<?php foreach($data as $row){?>
					  
                        <tr>
						
						
 <td data-label="Sl.No." ><?php echo $count;?> </td>
						 
						 
						 
  <td data-label="Name"><?php echo $row->iname ?></td>
   <td data-label="ROLE"><?php echo $row->role ?> 
</td>
						  
<td data-label="ACTION"> 
				
						
						  
						  
						  
						<a href ="<?php echo base_url()."Admin_editseller/index/".urldecode($row->sl_no);?>"><i class="fa fa-edit m-2" style="font-size:18px;color:blue;"></i></a>
						
						<a href ="<?php echo base_url()."Admin_sellerviewdetail/index/".urldecode($row->sl_no);?>"><i class="fa fa-eye m-2" style="font-size:18px;color:grey"></i></a>
						
						<a href ="<?php echo base_url()."Admin_editsellerlist/seller_delete/".urldecode($row->sl_no);?>">
						<i class="fa fa-trash m-2" style="font-size:18px;color:red"></i></a>
				
						
						<a href ="<?php echo base_url()."Admin_editsellerlist/reject/".urldecode($row->sl_no);?>"><i class="fas fa-ban m-2" style="font-size:18px;color:red"></i></a>
						
						
						
						
                          </td>
                        </tr>
						
			<?php $count++;?>
						
	<?php }?>    
                
                      </tbody>
  </tbody>
</table>
        

      </div>

    </div>
  </section>

  </main><!-- End #main -->