
	

	 <main id="main">

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
        <table class="table table-striped">
  <thead>
  
    <tr>
						 <th>
                            Sl. No.
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
					<td data-label=" Sl.No."><?php echo $count ?> </td>

					 <td data-label="Auction Id"> <a href ="<?php echo base_url()."Admin_lotlist/index/".urldecode($proid);?>" ><?php echo $row->iauctionid ?></a></td>
					<td data-label="Category"><?php echo $row->icategory ?> </td>
					<td data-label=" Seller Name"><?php echo $row->icontactperson ?> </td>
					
					
					<td data-label="       Seller Company Name"><?php echo $row->icompanyname ?> </td>
					
					
		
     		
	<td data-label="Auction Start and End Time"><?php $aucs= $row->iauction_start;
	   $temp = explode('.',$aucs);
       $aucs = $temp[0];
       echo  $aucs;	   
	   

	   ?>	   <br>to	   <br>
	   <?php $auce = $row->iauction_end; 
       $cool = explode('.',$auce);
       $auce = $cool[0];
       echo  $auce;	 
	  ?>
	  </td>
	  				
					
					
					
					
					
					
					
					
					
					
					
					<td data-label="Action" >
					
					
		<a href="<?php echo base_url()."Admin_editauction/index/".urldecode($row->sl_ano);?>"><i class="fa fa-edit m-2" style="font-size:18px;color:blue;"></i></a>
		
		<a href="<?php echo base_url()."Admin_addlotview/index/".urldecode($proid);?>"><i class="fa fa-eye m-2" style="font-size:18px;color:grey;"></i></a>

		
		<a href ="<?php echo base_url()."Admin_auctioneditlist/seller_delete/".urldecode($row->sl_ano);?>">
						<i class="fa fa-trash m-2" style="font-size:18px;color:red"></i></a>
	

</td>


				
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

	
	
	
	
	
 