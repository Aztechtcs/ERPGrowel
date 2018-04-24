 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Enter Detail For TNA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Enter Detail
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                           
               
               <?php echo form_open(); ?>
              <div id="build-wrap2"><div>
              <?php //echo form_submit('submit','Submit'); ?>
<div id="tbl"></div>
<div id="success"></div>
          
          </div>
        </div>
      
                                </div>
                              <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/dist/js/sb-admin-2.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/application-985b892b.js" type="text/javascript"></script>
    <script src="<?php echo site_url('formBuilder/dist/form-render.min.js'); ?>"></script>
    <script>
       
    jQuery(function($) {
    // formData = '[{"type": "button","label": "Button","subtype": "button","className": "btn-default btn","name": "button-1522312799038","style": "default"},{"type": "date","label": "Date Field","className": "form-control","name": "date-1522312802470"},{"type": "number","label": "Number","className": "form-control","name": "number-1522312805866"}]';
   // formData='<?php //$this->load->view('manager/'.$formdata); ?>';
     formData='[{"type": "text","required": true,"label": "Order_number","placeholder": "Order Number","name": "order_number","subtype": "text","className": "red form-control"},{"type": "date","required": true,"label": "ORIGINAL SAMPLE GIVEN","description": "ORIGINAL SAMPLE GIVEN Date","className": "form-control","name": "dateA"},{"type": "button","subtype": "submit","label": "Button","className": "btn btn-default","name": "button-1522838793204","style": "default"}]';
        $('#build-wrap2').formRender({formData});
    });
</script>
</body>

</html>











