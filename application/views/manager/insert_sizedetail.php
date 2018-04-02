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
              <?php //echo 'Order Number= '.$this->session->buyer_name.' <-> '.$this->session->New_orderid;
              
              
              ?>
               <?php echo form_open(); 
               echo form_submit('Submit','SUBMIT ORDER');
               ?>
              
              <div class="input_fields_wrap">
         <button class="add_field_button">Add More Fields</button>
         
         <div><input type="text" name="color[]" placeholder="Red Orange" required><input type="text" name="size[]" required placeholder="M/L/Size 2"><input type="text" required name="quantity[]" placeholder="Number of order"></div>
        
        
              </div>
            <?php   
        echo form_close(); ?>
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
    <script>
 $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append(' <div><input type="text" name="color[]" required placeholder="Red / Orange"><input type="text" name="size[]" required placeholder="M/L/Size 2"><input type="text" name="quantity[]" required placeholder="Number of order"><a href="#" class="remove_field">Remove</a></div>');
           // $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
  </body>
</html>

 







_______________________________________________________
