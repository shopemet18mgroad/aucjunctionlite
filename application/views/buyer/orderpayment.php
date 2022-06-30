
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
					
               
                  <tr>
                    <th>Sl.No.</th>
                    <th>TRANSACTION ID</th>
                    <th>AMOUNT</th>
                    <th>DATE</th>
                    <th>STATUS</th>
                    </tr>
              </thead>
                  <tbody>
                    <?php if(count($reports)){ $i=1; foreach($reports as $report){?>
                        <tr>			
                           <td data-label=" Sl.No."><?php echo $i;?></td>
                           <td data-label="TRANSACTION ID"><?php echo $report->txn_id;?></td>
                            <td data-label="AMOUNT"><?php echo $report->entry_fee;?></td>
                            <td data-label="DATE"><?php echo $report->txn_date;?></td>
                            <td class="<?php if($report->payment_status == TRUE){echo "text-success";}else {echo "text-danger";}?>"><?php if($report->payment_status == TRUE){echo "SUCCESS";}else {echo "FAILED";}?></td>
                        </tr>
                        <?php $i++;}}?>
                  </tbody>    					
          </table>
      </div>
    </div>
  </section>

  </main><!-- End #main -->