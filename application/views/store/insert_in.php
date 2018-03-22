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
echo form_open('Store/insert' ,'id="storentry"');
//echo "<tr><td>Stock Type</td><td>".form_dropdown('ItemType',$dbs)."</td></tr>";
/* // For Future use///
 * foreach($form as $k=>$v){
    if($k!='id'){
       echo form_label('Name of '.$k, $k) . form_dropdown($k,$v).'<br>';
    }
} */
//var_dump($form);

?>
            
    <?php        
       /*     <input type="text" id="srchname" placeholder="accoserious name" name="aname">
            <input type="text" placeholder="accoserious Type">
            <input type="text" placeholder="used by">
            <input type="text" id="srchcolor" placeholder="color">  
            <input type="text" placeholder="size"> 
           */ ?> <?php //echo form_label('item Name', 'item'); ?>
            
            
     <?php /*  <tr><td>Stock Discription</td><td><textarea name="discription" class='form-control' rows='4' required></textarea> </td></tr>

             */?>
            <table class=table>
                <tr>
                    <td><?php echo form_label('supplier Name', 'supplier'); ?></td>
                    <td><input type="text" id="supplier" placeholder="supplier name" name="supplier" required></td>
                </tr>
                 <tr>
                    <td><?php echo form_label('Item', 'Item'); ?></td>
                    <td><input type="text" id="Item" placeholder="i.e Label, Thread etc" name="Item" required></td>
                </tr>
                 <tr>
                    <td><?php echo form_label('color Name', 'color'); ?></td>
                    <td><input type="text" id="color" placeholder="i.e Red,orange" name="color" required></td>
                </tr>
                 <tr>
                    <td><?php echo form_label('color Code', 'color_code'); ?></td>
                    <td><input type="text" id="color_code" placeholder="i.e #7729 " name="color_code" required></td>
                </tr>
                 <tr>
                    <td><?php echo form_label('size', 'size'); ?></td>
                    <td><input type="text" id="size" placeholder="i.e M,XL" name="size" required></td>
                </tr>
                 <tr>
                    <td><?php echo form_label('Name of item', 'name'); ?></td>
                    <td><input type="text" id="Item" placeholder="Item name" name="Item" required></td>
                </tr>
                 <tr>
                    <td><?php echo form_label('Quentity', 'quentity'); ?></td>
                    <td><input type="number" id="quentity" placeholder="total Quentity 2,3" name="quentity" required></td>
                </tr>
                <tr>
                    <td><?php echo form_label('Rack_id', 'Rack_id'); ?></td>
                    <td><input type="text" id="Rack_id" placeholder="Rack id/location" name="Rack_id" required></td>
                </tr>
            </table>
                 
                 <?php
//echo form_label('supplier Name', 'supplier') .' <input type="text" id="supplier" placeholder="supplier name" name="supplier" required>' ."<br>";
//echo form_label('Item', 'Item') . ' <input type="text" id="Item" placeholder="i.e Label, Thread etc" name="Item" required>' ."<br>";
//echo form_label('color Name', 'color') . '<input type="text" id="color" placeholder="i.e Red,orange" name="color" required>' ."<br>";
//echo form_label('color Code', 'color_code') . '<input type="" id="color_code" placeholder="i.e #7729 " name="color_code" required>' ."<br>";
//echo form_label('size', 'size') . '<input type="text" id="size" placeholder="i.e M,XL" name="size" required>' ."<br>";
//echo form_label('Name of item', 'name') . '<input type="text" id="Item" placeholder="Item name" name="Item" required>' ."<br>";
//echo form_label('Quentity', 'quentity') . '<input type="number" id="quentity" placeholder="total Quentity 2,3" name="quentity" required>' ."<br>";
//echo form_label('item Name', 'item') . form_input('item') ."<br>";
echo form_button('Submit','Submit');
//echo form_submit('Submit','Submit');
//echo "<tr><td>Used By</td><td>".form_input('usedby')."</td></tr>";
//echo "<tr><td></td><td>".form_submit('Confirm','Confirm')."</td></tr>";
echo form_close();
?>
</table>
<div id="detail">hii</div>
<div id="last5">last five</div>

 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script><script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script><script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script><script src="assets/javascripts/application-985b892b.js" type="text/javascript"></script>
 <script>
 $("document").ready(function(){
     function fils(fl){
         $("#srchname").val()=fl;
     }
     
     $("#storentry").submit(function(){
         $.ajax({
             url:"<?php echo site_url('Store/insert'); ?>",
             data:{$( this ).serialize()},
             ssuccess:function(data){	$('#detail').html(data);}
         });
     });
     function last5(){
         $.ajax({
             url:"<?php echo site_url('Store/show_last5_stock'); ?>",
             success:function(data){$('#last5').html(data);}
         });
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
        
        $('#supplier').keyup(function(){
        last5();
		var search = $(this).val();
		if(search != '')
		{
			//searchname(search);
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