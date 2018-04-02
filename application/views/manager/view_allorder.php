<?php $this->load->view('workshedule/header'); ?>
      <!-- Content -->
      
      <div id='content'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <i class='icon-beer icon-large'></i>
            <?php echo 'Buyer='.$this->session->buyer_name.' / Order number='.$this->session->New_orderid; ?>
            
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
        <?php echo $tbl; ?>     
            
        <div id="build-wrap2"><div>
              
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
    
  </body>
</html>

