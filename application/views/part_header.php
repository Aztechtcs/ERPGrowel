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
            
            <?php echo $content; ?>

            
            <?php $this->load->view('part_footer'); ?>