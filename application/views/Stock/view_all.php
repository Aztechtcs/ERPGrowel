<?php $this->load->view('workshedule/header'); ?>

      <!-- Content -->
      <div id='content'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <i class='icon-beer icon-large'></i>
           Add Stcock
            <div class='panel-tools'>
              <div class='btn-group'>
                <a class='btn' href='<?php echo site_url('Auth/pg'); ?>'>
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
    <input class='form-control' type="text" name="searchx" id="searchx" placeholder="Type for Search"> 
<div id="tbl"></div>
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
        
        
        function dispstock(){
            $.ajax({
                type:"post",
                url:"<?php echo site_url('Stock/view_stock/ALL'); ?>",
                data:{id:"syc"},
            }).done(function(dbtbl){
                $("#tbl").html(dbtbl)
            });
        }
       /* function searchstk(srch){
            $.ajax({
                type:"post",
                url:"<?php //echo site_url('Stock/view_search'); ?>",
                data: document.getElementById("searchx").val()
            }).done(function(dbtbl){
                $("#tbl").html(dbtbl)
            });
        }*/
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
            
        });
    </script>
  </body>
</html>
