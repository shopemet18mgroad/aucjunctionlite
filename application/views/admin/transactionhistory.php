
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
		
		 <label style="font-weight:bold">From:</label>
  <input type="date" id="to">
    <label style="font-weight:bold">To:</label>    
   <input type="date" id="from">  
 <button type="button" class="btn btn-primary btn-sm my-5 pl-3" data-toggle="modal" data-target="#viewdetail" onclick="getdateforrep()">View Detail</button>
 <?PHP IF($from != "NA" && $to != "NA"){?>
  <p class="font-weight-bolder text-primary">Date Selected From : <?php echo $from;?> To : <?php echo $to;?></p>
  <?PHP }?>
   <div class="row ">
    
        <table class="table table-striped" id="myTable">
              <thead>
               
                  <tr>
                    <th>Sl.No.</th>
                    <th>AUCTION ID</th>
                    <th>TRANSACTION ID</th>
                    <th>USER ID</th>
                    <th>AMOUNT</th>
                    <th>DATE</th>
                    <th>STATUS</th>
                    </tr>
              </thead>
                  <tbody>
                    <?php $reports = array(); if(count($data)){ $i=1; foreach($data as $report){?>
                        <tr>			
                            <td><?php echo $i;?></td>
                            <td><?php echo $report->auction_id;?></td>
                            <td><?php echo $report->txn_id;?></td>
                            <td><?php echo $report->user_email;?></td>
                            <td><?php echo $report->entry_fee;?></td>
                            <td><?php echo $report->txn_date;?></td>
                            <td class="<?php if($report->payment_status){echo "text-success";}else {echo "text-danger";}?>"><?php if($report->payment_status){echo "SUCCESS";}else {echo "FAILED";}?></td>
                        </tr>
                        <?php $i++;}}?>
                  </tbody>    					
          </table>
      </div>

     
    </div>
  </section>

  </main>

	
	
	
	
	
 