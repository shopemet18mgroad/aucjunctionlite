
	 <link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">

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


  <button type="button" class="btn btn-primary btn-sm my-2" data-toggle="modal" data-target="#viewdetail">View Detail</button>

     <button type="button" class="btn btn-danger btn-sm my-2" data-toggle="modal" data-target="#bidsummary">Bid Summary</button>
     
     
    



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
  
  
  <!-- Modal -->
<div class="modal fade" id="buyerdetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">View Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   Auction ID:<br>22/feb/2020/98/78</p>
                <p><span class="text-muted">Date:23-23-2909<br>Auction Name :Scopio</h5><br>
                Result:<span class="mb-0" style="color:green;font-size:18px; ">Won</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>

  
  
  

	


<!-- Modal -->
<div class="modal fade" id="viewdetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">View Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   Auction ID:<br>22/feb/2020/98/78</p>
                <p><span class="text-muted">Date:23-23-2909<br>Auction Name :Scopio</h5><br>
                Result:<span class="mb-0" style="color:green;font-size:18px; ">Won</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="bidsummary" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bid Summary</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Auction ID:<br>22/feb/2020/98/78</p>
                <p><span class="text-muted">Date:23-23-2909<br>Auction Name :Scopio</h5><br>
                Result:<span class="mb-0" style="color:green;font-size:18px; ">Won</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="bidwinner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bid Winner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 Auction ID:<br>22/feb/2020/98/78</p>
                <p><span class="text-muted">Date:23-23-2909<br>Auction Name :Scopio</h5><br>
                Result:<span class="mb-0" style="color:green;font-size:18px; ">Won</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


	
	
	
	
 