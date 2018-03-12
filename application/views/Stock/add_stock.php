<?php $this->load->view('workshedule/header'); ?>

 <!-- Content -->
      <div id='content'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <i class='icon-beer icon-large'></i>
            Running Task or Add new Task
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
                
                
            </div>


<?php 
echo form_open('stock/insert');
echo "<tr><td>Stock Type</td><td>".form_dropdown('ItemType',$dbs)."</td></tr>";
?>
        <tr><td>Stock Discription</td><td><textarea name="discription" class='form-control' rows='4' required></textarea> </td></tr>
<?php
echo "<tr><td>Used By</td><td>".form_input('usedby')."</td></tr>";
echo "<tr><td></td><td>".form_submit('Confirm','Confirm')."</td></tr>";
echo form_close();
?>
</table>
<div id="detail"></div>

 
  </body>
</html>