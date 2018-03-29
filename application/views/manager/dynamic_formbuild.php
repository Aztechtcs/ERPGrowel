<?php $this->load->view('workshedule/header'); ?>
      <!-- Content -->
      <div id='content'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <i class='icon-beer icon-large'></i>
            <?php echo $operation; ?>
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
               <?php 
        $oldMessage = "\n";
        $deletedFormat = "";
    $str=file_get_contents(site_url('Manager/get_json/'.$formdata));
    $str=str_replace("$oldMessage", "$deletedFormat",$str);
    //echo $str;
        ?>
               <?php echo form_open(); ?>
              <div id="build-wrap2"><div>
              <?php //echo form_submit('submit','Submit'); ?>
<div id="tbl"></div>
<div id="success"></div>
          
          </div>
        </div>
      </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/application-985b892b.js" type="text/javascript"></script>
    <script src="<?php echo site_url('formBuilder/dist/form-render.min.js'); ?>"></script>
    <script>
       
    jQuery(function($) {
    // formData = '[{"type": "button","label": "Button","subtype": "button","className": "btn-default btn","name": "button-1522312799038","style": "default"},{"type": "date","label": "Date Field","className": "form-control","name": "date-1522312802470"},{"type": "number","label": "Number","className": "form-control","name": "number-1522312805866"}]';
   // formData='<?php //$this->load->view('manager/'.$formdata); ?>';
     formData='<?php echo $str; ?>';
        $('#build-wrap2').formRender({formData});
    });
</script>
  </body>
</html>

 







_______________________________________________________



<div id="tbl"></div>
<div id="success"></div>
<script src="<?php echo site_url(); ?>/js/jquery-3.3.1.min.js"></script>
