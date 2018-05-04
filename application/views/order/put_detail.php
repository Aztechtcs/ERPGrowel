  <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <?php echo form_open().form_submit('get_template','get_template').form_close(); ?>
                        
                        
                        <h1 class="page-header">Blank</h1>
                         <?php echo form_open(); 
               
               ?>
              
              <div class="input_fields_wrap">
         <button class="add_field_button">Add More Fields</button>
         
         <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Quantity</th>
                                        <th>Link</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td><input class="form-control " type="text" name="color[]" placeholder="Red Orange" required></td>
                                        <td><input class="form-control " type="text" name="size[]" required placeholder="M/L/Size 2"></td>
                                        <td> <input class="form-control " type="text" required name="quantity[]" placeholder="Number of order"></td>
                                        <td class="center"></td>
                                    </tr>
                                </tbody>
         </table>
<?php /* ?>
         <div class="form-group">
             <div>
            <label>Enter Color Size Quantity new</label>
            <input class="form-control " type="text" name="color[]" placeholder="Red Orange" required>
            <input class="form-control " type="text" name="size[]" required placeholder="M/L/Size 2">
            <input class="form-control " type="text" required name="quantity[]" placeholder="Number of order">
             </div>
             
                 
             </div> <?php */ ?>
        
        
          </div>
         <?php /*<div><input type="text" name="color[]" placeholder="Red Orange" required>
             <input type="text" name="size[]" required placeholder="M/L/Size 2">
             <input type="text" required name="quantity[]" placeholder="Number of order">
         </div>
        */ ?>
        
                </div>
        <input type="submit" class="btn btn-primary btn-lg btn-block" value="submit order">

            <?php   
            //echo form_submit('Submit','SUBMIT ORDER');
        echo form_close(); ?>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <!-- jQuery -->
    <script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/dist/js/sb-admin-2.js"></script>
<script src="<?php echo site_url('assets/angular.min.js'); ?>" ></script>
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
            //$(wrapper).append(' <div><input type="text" name="color[]" required placeholder="Red / Orange"><input type="text" name="size[]" required placeholder="M/L/Size 2"><input type="text" name="quantity[]" required placeholder="Number of order"><a href="#" class="remove_field">Remove</a></div>');
           // $(wrapper).append(' <div><label>Enter Color Size Quantity new</label><input class="form-control" type="text" name="color[]" placeholder="Red Orange" required><input class="form-control" type="text" name="size[]" required placeholder="M/L/Size 2"> <input class="form-control" type="text" required name="quantity[]" placeholder="Number of order"> <a href="#" class="remove_field">Remove</a></div>');
           $(wrapper).append(' <tr class="odd gradeX"><td><input class="form-control " type="text" name="color[]" placeholder="Red Orange" required></td><td><input class="form-control " type="text" name="size[]" required placeholder="M/L/Size 2"></td><td> <input class="form-control " type="text" required name="quantity[]" placeholder="Number of order"></td><td class="center"><a href="#" class="remove_field">Remove</a></td></tr>');
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
