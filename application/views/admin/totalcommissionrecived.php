
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
 <button type="button" class="btn btn-primary btn-sm my-5 pl-3" data-toggle="modal" data-target="#viewdetail" onclick="getdateforrepcom()">View Detail</button>
 <?PHP IF($from != "NA" && $to != "NA"){?>
  <p class="font-weight-bolder text-primary">Date Selected From : <?php echo $from;?> To : <?php echo $to;?></p>
  <?PHP }?>
   <div class="row ">
    
        <table class="table table-striped" id="myTable">
              <thead>
               
                  <tr>
                    <th>Sl.No.</th>
                    <th>AUCTION ID</th>
                    <th>SELLER NAME</th>
                    <th>WINNING AMOUNT </th>
                    <th>WINNER NAME</th>
                    <th>COMMISSION %</th>
                    <th>COMMISSION AMOUNT</th>
                    </tr>
              </thead>
                  <tbody>
                    <?php $reports = array(); if(count($data)){ $i=1; foreach($data as $report){?>
                        <tr>			
                            <td><?php echo $i;?></td>
                            <td><?php echo $report->auction_id;?></td>
                            <td><?php echo $report->iemailid;?></td>
                            <td><?php echo $report->cbid;?></td>
                            <td><?php echo $report->user_email;?></td>
                            <td><?php echo $report->commission;?></td>
                            <td><?php $com_amt = ($report->cbid*$report->commission)/100; echo $com_amt;?></td>
                        </tr>
                        <?php $i++;}}?>
                  </tbody>    					
          </table>
      </div>

     
    </div>
  </section>

  </main>

	
	
	
	
	
 