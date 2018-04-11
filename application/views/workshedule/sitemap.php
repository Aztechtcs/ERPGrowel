<?php
$links=array(
    'Store/insert'=>'Insert Item In Store',
    'formBuilder/demo'=>'formBuilder',
    'Manager'=>'Manager module',
    'Manager/add_supplier'=>'add_supplier Module',
    //'Manager/jsbuilder'=>'json rest API Module', 
    'Manager/insert_neworder'=>'Add new Order',
    'Manager/insert_requirement'=>'Insert Requirement',
    'Manager/cutting_operation'=>'Cutting Status Data Entry',
    'Manager/insert_sizedetail'=>'edit Size details',
    'Manager/view_allorder'=>'view All Order',
    'Manager/insert_orderdetail'=>'Insert Order Operation',
    'Manager/list_order'=>'List Order',
    'Manager/explore_report'=>'proprt list',
    'Manager/status_entry'=>'Entry current Status',
    'Tna'=>'TNA Automatic Time chart CCreator',
    'Manager/insert_report'=>'Insert Report',
    );

?>

<?php $this->load->view('workshedule/header'); ?>
      <!-- Content -->
      <div id='content'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <i class='icon-beer icon-large'></i>
            SITE MAP LINKS
            <div class='panel-tools'>
              <div class='btn-group'>
                <a class='btn' href='<?php echo site_url('Auth/site_map'); ?>'>
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
              <table>
                  
                      
              
          <?php //echo site_url('Store/insert'); 
         // var_dump($links);
          foreach($links as $k=>$v){
              echo '<tr><td>'.anchor($k, site_url($k)).'</td><td>'.$v.'</td></tr>';
          }
         /* echo anchor('Store/insert', site_url('Store/insert'));
          
          ?> Insert Item In Store <br>

<?php echo anchor('formBuilder/demo', site_url('formBuilder')); ?> formBuilder<br>
          <?php echo anchor('Manager', site_url('Manager')); ?> Manager Module<br>
          <?php echo anchor('Manager/add_supplier', site_url('Manager/add_supplier')); ?> add_supplier Module<br>
          */?></table>

<div id="tbl"></div>
<div id="success"></div>
          
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <!-- Javascripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/application-985b892b.js" type="text/javascript"></script>
    <!-- Google Analytics -->
   
  </body>
</html>

 







_______________________________________________________



<div id="tbl"></div>
<div id="success"></div>
<script src="<?php echo site_url(); ?>/js/jquery-3.3.1.min.js"></script>
