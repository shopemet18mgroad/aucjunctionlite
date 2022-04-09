
  <main id="main">
    <section class="h-100 mt-5 cart">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">My Reports</h3>
          
        </div>

       <?php if(count($mycomauc)){ $i=0; foreach($mycomauc as $mycom){$worldata = explode("|",$worl[$i]);?>

        <div class="card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
             
            
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2" style="font-size:18px;">Auction ID: <?php echo $mycom->iauctionid; ?></p>
                <p><span class="text-muted">Date: <?php echo $mycom->iauction_end; ?></span></p>
              </div>
              
              <div class="col-md-5 col-lg-5 col-xl-5 offset-lg-1">
			  <h5 class="mb-0"style="font-size:18px;">Max Bid Value : <?php  echo $worldata[3]; ?></h5>
        <h5 class="mb-0"style="font-size:18px;">Auction Winner : <?php  echo $worldata[2]; ?></h5>
                Result:<span class="mb-0" style="color:green;font-size:18px; "><?php echo $worldata[0];?></span>
              </div>
              <div class="col-md-2 col-lg-2 col-xl-2 text-end">
                  <div class="row">
                    <!-- Button trigger modal -->
                     <button type="button" class="btn btn-primary btn-sm my-2" data-toggle="modal" data-target="#viewdetail-<?php echo $i; ?>">View Detail</button>
                       <!-- Button trigger modal -->
                       <button type="button" class="btn btn-danger btn-sm my-2" data-toggle="modal" data-target="#bidsummary-<?php echo $i; ?>">Bid Summary</button>
                       <!-- Button trigger modal -->
			
        
                  </div>
                 
               
              </div>
            </div>
            
          </div>
        </div>
   <?php $i++;}}?>
        

      </div>
    </div>
  </div>
</section>
    <!-- ======= Breadcrumbs ======= -->


  </main><!-- End #main -->
  
  
  


<!-- Modal -->
<div class="modal fade" id="viewdetail-0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">View Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      
      
     <main id="main mt-5">

    <section id="hero" class="d-flex align-items-center">
     
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    
        

      
      <div class="container mb-5">
        <div class="row border border-dark">
        <table class="table table-striped" style="colorgrey;font-size15px;margin-top:-70px;">
<tbody>
	<tr>
     
      <th scope="row"> Auction Images</th>
	  
	   <td data-toggle="modal" data-target="#exampleModal-"><?php ?>
	   
	   
	   

<img class="model" src="" 
 alt="Chania" width="50px" height="50px">
 
	   </td>
      
    </tr>
    <tr>   
   <th scope="row">Category </th>
   <td><?php  ?></td>
	  </tr>
	 <br>
    <tr>
     
      <th scope="row">Sub-category </th>
	  <td><?php ?></td>
      
    </tr><br>
    <tr>
     
      <th scope="row">product Description  </th>
	  <td style="word-break:break-all;"><?php  ?></td>
      
    </tr><br>
	
	<tr>
     
      <th scope="row">Auction Id </th>
	    <td><?php ?></td>  
    </tr>	
	<tr>
      <th scope="row"> Auction Start and End Time</th>
	   <td>
	  </td>
	  
	  
    </tr>
	
	
	<tr>
	
	<td colspan=2><center>  <div class="ab w-100" style="background-color:#2196f363;color:white; font-size:20px;" ><i><!--<?php //echo //$sqldata1[0]->role ?>--></i>LOT  DETAILS  </div></center></td>
	</tr>
	
	<tr>
     
      <th scope="row">Inspection Date </th>

	   
	   <td><?php 	   
	   ?>
	     
	   </td>
      
    </tr>
	
		
		<tr>
          <th scope="row">MRP <i class="fa fa-inr" style="font-size:18px"></i></th>
	   <td><?php  ?></td>
      
    </tr>
	
		<tr>
     
      <th scope="row"> Start  Auction Price</th>
	   <td><?php  ?></td>
      
    </tr>
	
		<tr>
     
      <th scope="row">End Auction Price  </th>
	   <td><?php  ?></td>
      
    </tr>
	
		<tr>
     
      <th scope="row">Entry Fee </th>
	   <td><?php ?></td>
      
    </tr>
	
	
	
	
	
		<tr>
     
      <th scope="row">Inspection date and time  </th>
	     
	   <td><?php ?>
	   
	   <?php ?>
	  </td>
	  
	   </td>
       
    </tr>
	
	<tbody>
	</table>
        </div>
          
      </div>
        
  

     
    </div>
  </section>

  </main><!-- End #main -->  
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      

                
                
                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="bidsummary-0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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



  