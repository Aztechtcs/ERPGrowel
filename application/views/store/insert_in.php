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
               <div id="detail">hii</div>
                <div id="last5">last five</div> 
                
            </div>


<?php 
echo form_open();
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
            <table class=table ng-app="" ng-init="='Rack_id=NA'">
                <tr>
                    <td><?php echo form_label('supplier Name', 'supplier'); ?></td>
                    <td><input type="text" id="supplier" ng-model="supplier" placeholder="supplier name" name="supplier" required></td>
                    <td><p id="supplyerHint">i.e</p></td>
                   
                </tr>
                 <tr>
                    <td><?php echo form_label('Item', 'Item'); ?></td>
                    <td><input type="text" ng-model="Item" id="Item" placeholder="i.e Label, Thread etc" name="Item" required></td>
                    <td><p id="itemHint">i.e</p></td>
                 </tr>
                 <tr>
                    <td><?php echo form_label('color Name', 'color'); ?></td>
                    <td><input type="text" ng-model="color" id="color" placeholder="i.e Red,orange" name="color" required></td>
                     <td><p id="colornameHint">i.e</p></td>
                 </tr>
                 <tr>
                    <td><?php echo form_label('color Code', 'color_code'); ?></td>
                    <td><input type="text" ng-model="color_code" id="color_code" placeholder="i.e #7729 " name="color_code" required></td>
                     <td><p id="colorcodeHint">i.e</p></td>
                 </tr>
                 <tr>
                    <td><?php echo form_label('size', 'size'); ?></td>
                    <td><input type="text"  ng-model="size" id="size" placeholder="i.e M,XL" name="size" required></td>
                    <td><p id="sizeHint">i.e</p></td>
                 </tr>
                 <tr>
                    <td><?php echo form_label('Name of item', 'name'); ?></td>
                    <td><input type="text" id="Item_name" value="{{supplier + ' ' + Item +' ' + color + '[' + color_code + '] ' + size }}" placeholder="Item name" name="Item_name" required></td>
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
//echo form_button('Submit','Submit');?> <input type="button" id="Submits" value="Click me" name="click me" ><?php
//echo form_submit('Submit','Submit');
//echo "<tr><td>Used By</td><td>".form_input('usedby')."</td></tr>";
//echo "<tr><td></td><td>".form_submit('Confirm','Confirm')."</td></tr>";
echo form_close();
?>
</table>


 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
 <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script>
 <script src="assets/javascripts/application-985b892b.js" type="text/javascript"></script>
 <script src="<?php echo site_url('assets/angular.min.js'); ?>" ></script>
 
 <script>
 $("document").ready(function(){
     last5();
     function hint(dbs,colms,pls){
         //var colms ='supplier';
         $.ajax({
             type:"get",
             url:"<?php echo site_url('Store/supplier_hint'); ?>",
             data:{search:dbs ,colm:colms},
             success:function(data){$(pls).html(data);}
         });
         last5();
     }
    // hint('k');
     $("#supplier").keyup(function(){
     var src=$("#supplier").val();
        hint(src,'supplier','#supplyerHint');
     });
     
     $("#Item").keyup(function(){
         var sch=$("#Item").val();
         hint(sch,'item','#itemHint');
     });
      $("#color").keyup(function(){
         var sch=$("#color").val();
         hint(sch,'color','#colornameHint');
     });
      $("#color_code").keyup(function(){
         var sch=$("#color_code").val();
         hint(sch,'color_code','#colorcodeHint');
     });
       $("#size").keyup(function(){
         var sch=$("#size").val();
         hint(sch,'size','#sizeHint');
     });
     
     
    // $("#last5").html('hiii last 5');
    $("#Submits").click(function(){
        $.ajax({
            type:"post",
            url:"<?php echo site_url('Store/in_item'); ?>",
            //data:{color_code:$("#color_code").val()},
             data:$("form").serialize(),
          //  success:function(data){$("#detail").html(data);}
        }).done(function(ds){
            $("#detail").html('<br>' + ds);
        }).fail(function(){
            $("#detail").html('fail html');
        });
    });
    
    function delete_record(id){ /*show_last5page work */
    $.ajax({
        url:<?php echo site_url('Store/delete_rcecordbyid'); ?>,
        type:"post",
        data:{id:id},
        succcess:function(data){$('#last5').html(data);}
    });
    }
    
     function last5(){
         $.ajax({
             url:"<?php echo site_url('Store/show_last5_stock'); ?>",
             success:function(data){$('#last5').html(data);}
         });
     }
     
 });
 </script>
 
 <?php /*
 <script>
 $("document").ready(function(){
     
     function fils(fl){
         $("#srchname").val()=fl;
     }
    /* $("#Submit").click(function(){
         ("#detail").html('hiiii click clicked');
     });*/
     /*$("#storentry").submit(function(){
         $.ajax({
             url:"<?php echo site_url('Store/insert'); ?>",
             data:{$( this ).serialize()},
             success:function(data){	$('#detail').html(data);}
         });
     });*/
   /*  function last5(){
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
                       //dispstock()
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
 */ ?>
  </body>
</html>