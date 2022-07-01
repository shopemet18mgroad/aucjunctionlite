<?php 
if($checked == "ALL"){
    $all = "checked";
    $live = "";
}else{
    $all = "";
    $live = "checked";
}
?>

  <main id="main">
    <section class="h-100 mt-5 cart">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">My Auctions</h3>
          
        </div>
        <div class="container mt-5 mb-2">
        <div class="row border border-dark">
            <div class="switch-field justify-content-center py-3">
              <input type="radio" id="radio-three" name="switch-two" onchange="window.location.href = '<?php echo base_url();?>BuyerAuction_myauc';return false;" value="ALL" <?php echo $all;?>/>
              <label for="radio-three">All Auctions</label>
              <input type="radio" id="radio-four" name="switch-two" onchange="window.location.href = '<?php echo base_url();?>BuyerAuction_myauc/live';return false;" value="LIVE" <?php echo $live;?>/>
              <label for="radio-four">&nbsp;&nbsp;&nbsp;Live Auctions&nbsp;&nbsp;&nbsp;&nbsp;</label>
              
          </div>
        </div>
          
      </div>
<?php if(count($allaucdata)){?>
  <input type="hidden" id="cnt" value="<?php echo count($allaucdata); ?>">
   <input type="hidden" id="user" value="<?php echo $user['sessi']; ?>">
       <?php $total = 0; $ctr = 1; foreach($allaucdata as $allauc){ $img = unserialize($allauc[0]->imageupload);?>
 <input type="hidden" id="ref-<?php echo $ctr;?>" value="<?php echo str_ireplace('/','-',$allauc[0]->iauctionid).'|'.$ctr; ?>"><!-- hidden value to send auction id and ctr value -->
 
 <?php 
				date_default_timezone_set('Asia/Kolkata');
				$time =  Date('Y-m-d H:i:s');
        // echo $allauc[0]->iauction_end;
        //  echo "<br>";
        // echo strtotime($allauc[0]->iauction_end);
        // echo "<br>";
        // echo strtotime($time); 
        // echo "<br>";
        // echo $time; 
        // die;
				$diff = strtotime($allauc[0]->iauction_end) - strtotime($time);
				//$diff = abs($time - $sqldata[0]->aucclosedate_time);  
			//$diff = strtotime($query[0]->aucclosedate_time)-strtotime($time);
		$years = floor($diff / (365*60*60*24));  
			$months = floor(($diff - $years * 365*60*60*24)/ (30*60*60*24));   
			$days = floor(($diff - $years * 365*60*60*24 -  $months*30*60*60*24)/ (60*60*24)); 
			$hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60));  
$minutes = floor(($diff - $years * 365*60*60*24  - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);  
$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60)); 
$Remaining = $hours." Hours: ".$minutes." Minutes: ".$seconds." Seconds: ";
if($diff <= 0){
			$condtion = false;
		}else{
			$condtion = true;
		}
    //die;
    
				?>
        <input type="hidden" id="telapsed-<?php echo $ctr;?>" value="<?php echo $diff;?>">
         <input type="hidden" id="auc-<?php echo $ctr;?>" value="<?php echo str_ireplace('/','-',$allauc[0]->iauctionid);?>">
         <input type="hidden" id="rev-<?php echo str_ireplace('/','-',$allauc[0]->iauctionid);?>" value="<?php echo $ctr;?>">
        <div id="tbl-<?php echo str_ireplace('/','-',$allauc[0]->iauctionid);?>" class="card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img src="<?php echo base_url()."web_files/uploads/".$img[0];?>"
                  class="img-fluid rounded-3" alt="Cotton T-shirt">
              </div>
              <div class="col-md-6 col-lg-6 col-xl-6 divid_left ">
             

				 <p><span class="text-primary">Product Name: </span><?php echo $allauc[0]->icategory;?></p><span></p>
                <p><span class="text-primary">Auction id: </span><?php echo $allauc[0]->iauctionid;?><span></p>
				  <p><span class="text-primary">Time Elapsed: </span><span class="text-success" id="timer-<?php echo $ctr;?>"><?php echo $Remaining;?><span></p>
				<button type="button" class="btn btn-primary btn-sm my-2" data-toggle="modal" data-target="#1-<?php echo $ctr; ?>">View Details</button>
              </div>
              
             
              <div class="col-md-4 col-lg-4 col-xl-4 h-100 ">
              <p><span class="text-primary">Current Bid Value: </span> <span class="text-primary" id="cbid-<?php echo str_ireplace('/','-',$allauc[0]->iauctionid);?>"><?php echo $allauc[0]->cbid;?><span></p>
              <p><span class="text-primary">My Bid Value: </span><span class="<?php if($allauc[0]->mybid < $allauc[0]->cbid){echo "text-danger";}else{echo "text-success";}?>" id="mybid-<?php echo str_ireplace('/','-',$allauc[0]->iauctionid);?>"><?php echo $allauc[0]->mybid;?></span></p>
            
              <div class="form-group">
              <input class="form-control input-sm" id="inpbid-<?php echo str_ireplace('/','-',$allauc[0]->iauctionid);?>" type="number" value="<?php
				if($allauc[0]->startaucprice < $allauc[0]->cbid){
					echo $out = ($allauc[0]->cbid)+1;
				}else{
					echo $out = ($allauc[0]->startaucprice + $allauc[0]->cbid)+1;
				}
			  ?>">
              <button type="button" id="<?php echo str_ireplace('/','-',$allauc[0]->iauctionid);?>" onclick="placebid(this.id)" class="btn btn-primary btn-sm my-2">Bid</button>
            </div>

               
              </div>
            </div>
          </div>
        </div>
        <?php $ctr++;}?>
       <?php }else{?>
        <div class="card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-12 col-lg-12 col-xl-12">
                <p>You Dont Have any active Auctions<p>
              </div>
            </div>
          </div>
        </div>
        <?php }?>
        <!-- <div class="card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                  class="img-fluid rounded-3" alt="Cotton T-shirt">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2">Basic T-shirt</p>
                <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p>
              </div>
              
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h5 class="mb-0">$499.00</h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div> -->


        <!-- <div class="card mb-4">
          <div class="card-body p-4 d-flex flex-row">
            <div class="form-outline flex-fill">
              <input type="text" id="form1" class="form-control form-control-lg" />
              <label class="form-label " for="form1">Coupon Code </label>
            </div>
            <button type="button" class="btn btn-outline-primary btn-lg ms-3">Apply</button>
          </div>
        </div> -->

        

      </div>
    </div>
  </div>
   
</section>
    <!-- ======= Breadcrumbs ======= -->
    <?php $count = 1 ?>
   <?php foreach($allaucdata as $row){?>
  
  <div id="1-<?php echo $count; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
<center>  <div class="ab w-100" style="background-color:#2196f363;color:white; font-size:20px;" ><i><!--<?php //echo //$sqldata1[0]->role ?>--></i>AUCTION  DETAILS  </div></center>
        <button type="button" class="btn btn-outline-info" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
       
		
	
	
   <table class="table table-striped" style="colorgrey;font-size15px;margin-top:-70px;">
<tbody>
	<tr>
	
	
	
	
			
	
     
      <th scope="row"> Auction Images</th>
	   <td><?php $img = unserialize($row[0]->imageupload)?>
	   

<img class="model" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" 
 alt="Chania" width="50px" height="50px">
 
	   
	   </td>
      
    </tr>
    <tr>   
   <th scope="row">Category </th>
   <td><?php echo $row[0]->icategory ?></td>
	  </tr>
	 <br>
    <tr>
     
      <th scope="row">Sub-category </th>
	  <td><?php echo $row[0]->isubcategory ?></td>
      
    </tr><br>
    <tr>
     
      <th scope="row">product Description  </th>
	  <td><?php echo $row[0]->iproductdes ?></td>
      
    </tr><br>
	
	<tr>
     
      <th scope="row">Auction Id </th>
	    <td><?php echo $row[0]->iauctionid ?></td>
      
    </tr>
	<tr>
     
      <th scope="row"> Auction Start and End Time</th>
	   <td><?php $aucs= $row[0]->iauction_start;
	   $temp = explode('.',$aucs);
       $aucs = $temp[0];
       echo  $aucs;	   
	   

	   ?>	   <br>to	   <br>
	   <?php $auce = $row[0]->iauction_end; 
       $cool = explode('.',$auce);
       $auce = $cool[0];
       echo  $auce;	 
	  ?>
	  </td>
	  
	  
    </tr>
	
	<tr>
	
	<td colspan=2><center>  <div class="ab w-100" style="background-color:#2196f363;color:white; font-size:20px;" ><i><!--<?php //echo //$sqldata1[0]->role ?>--></i>LOT  DETAILS  </div></center></td>
	</tr>
	
	
	<tr>
     
      <th scope="row">Inspection Date </th>

	   
	   <td><?php $insp= $row[0]->inspectiondate;
	   $ter = explode('.',$insp);
       $insp = $ter[0];
       echo  $insp;	   
	   

	   ?>
	     
	   </td>
      
    </tr>
	
		
		<tr>
     
      <th scope="row">MRP <i class="fa fa-inr" style="font-size:18px"></i></th>
	   <td><?php echo $row[0]->imrp ?></td>
      
    </tr>
	
		<tr>
     
      <th scope="row"> Start  Auction Price</th>
	   <td><?php echo $row[0]->startaucprice ?></td>
      
    </tr>
	
		
		<tr>
     
      <th scope="row">Entry Fee </th>
	   <td><?php echo $row[0]->entryfee ?></td>
      
    </tr>
	
	
	
<!--	<tr>
     
      <th scope="row">Inspection date and time  </th>
	     
	   <td><?php //$inse= $row[0]->iauction_end ;
	  // $ters = explode('.',$inse);
       //$inse = $ters[0];
       //echo  $inse;	   
	   

	   ?>
	   
	      	   <br>to	   <br>
	   <?php// $aucn = $row[0]->iauction_start; 
      // $coole = explode('.',$aucn);
       //$aucn = $coole[0];
       //echo  $aucn;	 
	  ?>
	  </td>
	  
	   </td>
       
    </tr>-->
	
	<tbody>
	</table>
		
		
		
		
      </div>
      <div class="modal-footer">
         
        </div>
     
    </div>

  </div>
</div>
  <?php $count++ ?>
   <?php } ?>

   <script>
  function telapsed() {
	var totallot = $('#cnt').val();
  	var user = $('#user').val();
	//var i = 1;
	if(totallot){
    var ctr = 0
    var tms = 1;
				setInterval(function(){
          ctr++;
          //alert(ctr);
					for(i=0;i<totallot;i++){
            var k = i+1;
            var dvar = '#telapsed-'+k;
            var dtvar = '#timer-'+k;
            var d = $(dvar).val();
			  //alert(d);
			var h = Math.floor(d / 3600);
			var m = Math.floor(d % 3600 / 60);
			var s = Math.floor(d % 3600 % 60);
			var disp = h + " Hours: " + m + " Minutes: " + s + " Seconds"; 
			if(d <= 0){
				$(dtvar).html('Auction Closed');
				//return false;
			}else{
				$(dtvar).html(disp); d--; $(dvar).val(d);
			}
			  
			   //$(dtvar).html('Auction Closed'+i);
		  } // you could choose not to continue on failure...
       if(ctr=="30"){
        ctr = 0;
        tms++;
        //alert(encodeURIComponent(user));
        getcurrentauctionreport_live(encodeURIComponent(user),totallot);
        }else if(ctr=="10" && tms == 7){
          tms=0;
          window.location = "<?php echo base_url() .'BuyerAuction_myauc/live'; ?>" 
        }
       
				}, 1000);
		//Run Foreach loop here
	}
  	
  
}
function placebid(auc){
var bid = $('#inpbid-'+auc).val();
//alert(bid);return false;
  if(bid != "" && bid > 0){
		$.get('<?php echo base_url() .'BuyerAuction_Bid/get_currency/'; ?>'+bid, function(data){
							let text = "You Are About to bid "+ data;
								if (confirm(text) == true) {
									$.get('<?php echo base_url() .'BuyerAuction_Bid/index/'; ?>'+auc+"/"+bid, function(data){
									alert(data);
										if(data == "Bid Placed Succesfully"){
											var bid2 = parseInt(bid)+parseInt("1");
											$('#inpbid-'+auc).val(bid2);
											$('#cbid-'+auc).text(bid);
											$('#mybid-'+auc).text(bid);
                      $('#mybid-'+auc).removeClass('text-danger').addClass('text-success');
										}
									});
								} else {
									return false;
								}
        		});
  }else{
    alert("Empty Bid Can not Be Placed ");
  }
}
function getcurrentauctionreport_live(user, totallot){
  if(totallot){
      for(i=0;i<totallot;i++){
        var k = i+1;
        var aucid = $('#auc-'+k).val();
           $.get('<?php echo base_url() .'GetAuctionDetails/index/'; ?>'+aucid+'/'+user, function(data){
          if(data){
            var dataarr = data.split("|");
            var diff = dataarr[0];
            var rem =  dataarr[1];
            var cbid = dataarr[2];
            var mybid = dataarr[3];
            if(diff <= 0){
              $('#tbl-'+aucid).fadeOut();
            }else{
               $('#telapsed-'+k).val(diff);
               $('#timer-'+k).text(rem);
               $('#cbid-'+aucid).text(cbid);
               $('#mybid-'+aucid).text(mybid);
							 var cbidn = parseInt(cbid) + parseInt("1");
							 $('#inpbid-'+aucid).val(cbidn);
							 if(mybid < cbid){
                   $('#mybid-'+aucid).removeClass('text-success').addClass('text-danger');
               }else{
                   $('#mybid-'+aucid).removeClass('text-danger').addClass('text-success');
               }
            }
          }else{
            alert("Unable To Fetch Data");
          }
        });
      }
  }
}
$(document).ready(function() {
	setTimeout(telapsed, 1000);
  //alert("started");
  // run the first time; all subsequent calls will take care of themselves
  //setTimeout(executeQuery, 30000);
  
});
 </script>
