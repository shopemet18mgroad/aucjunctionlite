
	 <link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">

	 <main id="main">

    <section id="hero" class="d-flex align-items-center">
     
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
						 <th>
                            Sl.No.
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
						  Online Auction Start And End Date
						  </th>
						  <th>
						 Action
						  </th>
                        </tr>
    
    
    
  </thead>
         <tbody>
			  <?php 
				if(!count($data)){
			  ?>
			  <tr>												
<td colspan="12">No Data Found</td>
</tr>
				 <?php 
				}
			  ?>
				
					  
                 <?php $count = 1;?>
					
			<?php foreach($data as $row){?>
			
			
 <?php $proid = str_ireplace('/','-',$row->iauctionid); ?>
			
				<tr>												
					<td data-label="Sl.No."><?php echo $count ?> </td>

					 <td data-label="Auction Id"> <a href ="<?php echo base_url()."Admin_viewforthcomingauction/index/".urldecode($proid);?>" ><?php echo $row->iauctionid ?></a></td>
					<td data-label="Category"><?php echo $row->icategory ?> </td>
					<td data-label="Seller Name" ><?php echo $row->icontactperson ?> </td>
					
					
					
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
					
	    <a href ="<?php echo base_url()."Admin_auctionapproval/sellerapprove/".urldecode($proid);?>"><i class="fa fa-check m-2" style="font-size:18px;color:green;"></i></a>
		
		<a href="<?php echo base_url()."Admin_addlotview/index/".urldecode($proid);?>"><i class="fa fa-eye m-2" style="font-size:18px;color:grey;"></i></a>

		
		<a href ="<?php echo base_url()."Admin_auctionapproval/seller_delete/".urldecode($proid);?>">
						<i class="fa fa-trash m-2" style="font-size:18px;color:red"></i></a>
	




				
				</tr>
				<?php $count++ ?>
				
			<?php }?>
  
	
				</tbody> 
</table>
        

      </div>

     
    </div>
  </section>

  </main><!-- End #main -->

	
	
	
	
	
 