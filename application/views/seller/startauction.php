
<br>
<br>
<br>
<br>
    <div class=" col-md-4">
      <div  class="date-picker-2" placeholder="Recipient's username" id="ttry" aria-describedby="basic-addon2"></div>
      <span class="" id="example-popover-2"></span> </div>
    <div id="example-popover-2-content" class="hidden"> </div>
    <div id="example-popover-2-title" class="hidden"> </div>
<script>
$('.date-picker-2').popover({
    html : true, 
    content: function() {
      return $("#example-popover-2-content").html();
    },
    title: function() {
      return $("#example-popover-2-title").html();
    }
});
$(".date-picker-2").datepicker({
    onSelect: function(dateText) { 
        $('#example-popover-2-title').html('<b>Avialable Appiontments</b>');
        var html = '<button  class="btn btn-success">9:00 am – 10:00 am</button><br><button  class="btn btn-success">10:00 am – 11:00 am</button><br><button  class="btn btn-success">11:00 am – 12:00 pm</button><br><button  class="btn btn-success">12:00 pm – 1:00 pm</button><br><button  class="btn btn-success">1:00 pm – 2:00 am</button><br><button  class="btn btn-success">2:00 am – 3:00 am</button><br><button  class="btn btn-success">3:00 am – 4:00 am</button><br><button  class="btn btn-success">4:00 am – 5:00 am</button><br><button  class="btn btn-success">5:00 am – 6:00 am</button><br><button  class="btn btn-success">6:00 am – 7:00 am</button><br><button  class="btn btn-success">7:00 pm – 8:00 pm</button><br><button  class="btn btn-success">8:00 pm – 9:00 pm</button><br><button  class="btn btn-success">9:00 pm – 8:00 pm</button><br><button  class="btn btn-success">7:00 pm – 8:00 pm</button><br><button  class="btn btn-success">7:00 pm – 8:00 pm</button><br><button  class="btn btn-success">7:00 pm – 8:00 pm</button><br><button  class="btn btn-success">7:00 pm – 8:00 pm</button><br><button  class="btn btn-success">7:00 pm – 8:00 pm</button>';
        $('#example-popover-2-content').html('Avialable Appiontments On <strong>'+dateText+'</strong><br>'+html);
        $('.date-picker-2').popover('show');
    }
});
</script> 
