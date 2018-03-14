<?php $this->load->view('workshedule/header'); ?>

 <!-- Content -->
      <div id='content'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <i class='icon-beer icon-large'></i>
           Add Complaints
            <div class='panel-tools'>
              <div class='btn-group'>
                <a class='btn' href='<?php echo site_url('Auth/complaints'); ?>'>
                  <i class='icon-refresh'></i>
                  Refresh statics
                </a>
                <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Toggle'>
                  <i class='icon-chevron-down'></i>
                </a>
              </div>
            </div>
          </div>
          <div class='panel-body'>
            
</tr>
</table>

    <div id="tbl">
        <table class="">
    <tr><td> <label for="Complaints">complaints</label></td>
        <td> <textarea class='form-control' type="text" name="complaints" id="complaints" placeholder="Type your complaints"></textarea> </td>
    </tr>
    <tr>
        <td><label for="yourname">YourName</label></td></td>
        <td><input class='form-control' id="yourname" type="text" ></td>
    </tr>
    <tr><td><input type="submit" id="submit" name="submit" ></td></tr>
</table></div>
<div id="success"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <!-- Javascripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script><script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script><script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script><script src="assets/javascripts/application-985b892b.js" type="text/javascript"></script>
    <!-- Google Analytics -->
    <script>
    /*  var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
   */ </script>
    <script>
       
       $(document).ready(function(){
           $("#submit").click(function(){
               var com = $("#complaints").val()
               var nam=$("#yourname").val();
           });
       });
    <?php    
    /*    
        function dispstock(){
            $.ajax({
                type:"post",
                url:"<?php echo site_url('Stock/view_stock/ALL'); ?>",
                data:{id:"syc"},
            }).done(function(dbtbl){
                $("#tbl").html(dbtbl)
            });
        }
        function searchstk(srch){
            $.ajax({
                type:"post",
                url:"<?php //echo site_url('Stock/view_search'); ?>",
                data: document.getElementById("searchx").val()
            }).done(function(dbtbl){
                $("#tbl").html(dbtbl)
            });
        }
        $("document").ready(function(){
            dispstock()
            showResult('')
            function showResult(srch){
            $.ajax({
			url:"<?php echo site_url('Stock/view_search'); ?>",
			method:"post",
			data:{id:srch},
			success:function(data){	$('#tbl').html(data);}
		});
        }
        $('#searchx').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			showResult(search);
		}
		else
		{
			//showResult();	
                        dispstock()
		}
	});
            
        });  */ ?>
    </script>
  </body>
</html>
