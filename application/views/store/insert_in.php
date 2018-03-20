<?php $this->load->view('workshedule/header'); ?>

 <!-- Content -->
      <div id='content'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <i class='icon-beer icon-large'></i>
            Add Stock
            <div class='panel-tools'>
              <div class='btn-group'>
                <a class='btn' href='<?php echo site_url('Store/insert'); ?>'>
                  <i class='icon-refresh'></i>
                  Refresh Page
                </a>
                <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Toggle'>
                  <i class='icon-chevron-down'></i>
                </a>
              </div>
            </div>
          </div>
            <div class='panel-body'>
                
                
            </div>


<?php 
echo form_open('Store/insert');
//echo "<tr><td>Stock Type</td><td>".form_dropdown('ItemType',$dbs)."</td></tr>";
?>
            
            <input type="text" id="srchname" placeholder="accoserious name" name="aname">
            <input type="text" placeholder="accoserious Type">
            <input type="text" placeholder="used by">
            <input type="text" id="srchcolor" placeholder="color">  
            <input type="text" placeholder="size"> 
            <?php echo form_label('item Name', 'item'); ?>
            
            
        <tr><td>Stock Discription</td><td><textarea name="discription" class='form-control' rows='4' required></textarea> </td></tr>
<?php

echo form_label('Name of item', 'name') . form_input('name') ."<br>";
echo form_label('supplier Name', 'supplier') . form_input('supplier') ."<br>";
//echo form_label('item Name', 'item') . form_input('item') ."<br>";
echo form_label('color Name', 'color') . form_input('color') ."<br>";
echo form_label('Size ', 'size') . form_input('size') ."<br>";
echo form_submit('Submit','Submit');
//echo "<tr><td>Used By</td><td>".form_input('usedby')."</td></tr>";
//echo "<tr><td></td><td>".form_submit('Confirm','Confirm')."</td></tr>";
echo form_close();
?>
</table>
<div id="detail">hii</div>

 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script><script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script><script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script><script src="assets/javascripts/application-985b892b.js" type="text/javascript"></script>
 <script>
 $("document").ready(function(){
     function fils(fl){
         $("#srchname").val()=fl;
     }
     function searchname(srch){
            $.ajax({
			url:"<?php echo site_url('Store/search_name'); ?>",
			method:"post",
			data:{id:srch},
			success:function(data){	$('#detail').html(data);}
		});
        }
        function searchcolor(srch){
            $.ajax({
			url:"<?php echo site_url('Store/search_color'); ?>",
			method:"post",
			data:{id:srch},
			success:function(data){	$('#detail').html(data);}
		});
        }
        
        $('#srchname').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			searchname(search);
		}
		else
		{
			//showResult();	
                       // dispstock()
		}
	});
         $('#srchcolor').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			searchcolor(search);
		}
		else
		{
			//showResult();	
                       // dispstock()
		}
	});
 });    
 
 </script>
  </body>
</html>