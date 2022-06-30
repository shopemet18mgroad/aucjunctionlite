
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
						Bid Value
						</th>
						<th>
						Winner Username
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
					
			<?php $i=0; foreach($data as $row){?>
			
			
 <?php $proid = str_ireplace('/','-',$row->iauctionid); ?>
			
				<tr>												
					<td data-label="Sl.No."><?php echo $count ?> </td>

					 <td data-label="Auction Id"> <?php echo $row->iauctionid ?></td>
					<td data-label="Category"><?php echo $row->icategory ?> </td>
		<td data-label="Seller bid amount" ><?php if($hbid[$i][0]['bidamount'] != ""){echo $hbid[$i][0]['bidamount'];}else{echo "No Bid";}?> </td>			
		<td data-label="Seller bidderusername" ><?php if($hbid[$i][0]['bidderusername'] != ""){echo $hbid[$i][0]['bidderusername'];}else{echo "No Bidder";}?> </td>		
					<td data-label="Action" >  
	    <a id="<?php echo urlencode($proid."|".$hbid[$i][0]['bidderusername']);?>" onclick="approvewinseller(this.id)"><i class="fa fa-check m-2" style="font-size:18px;color:green;"></i></a>
			<a id="<?php echo urlencode($proid."|".$hbid[$i][0]['bidderusername']);?>" onclick="approvelosseller(this.id)"><i class="fas fa-ban m-2" style="font-size:18px;color:red"></i></a>		
			</td>
				</tr>
				<?php $count++ ?>
				
			<?php $i++;}?>
  
	
				</tbody> 
</table>
        

      </div>

     
    </div>
  </section>

  </main>

	
	
	
	
	
 