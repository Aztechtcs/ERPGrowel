  <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Blank</h1>
                        <?php echo form_open();?>
                        <div class="form-group">
                            <label for="disabledSelect">Work ID</label>
                            <input class="form-control" id="disabledInput" name="id" type="text" placeholder="<?php echo 'Work ID '. $id; ?>" disabled="">
                        </div>
                        <div class="form-group">
                            <label>Comments For Complete Task</label>
                            <textarea class="form-control" require name="comments" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="disabledSelect">Finish Date</label>
                            <input class="form-control" id="disabledInput" name="finishdate" type="text" placeholder="<?php $t=time(); echo(date("Y-m-d",$t)); ?>" disabled="">
                        </div>
                        
                        <input type="submit" name="Submit" class="btn btn-default">
                          <?php echo form_close(); ?>
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
    <script src="<?php echo site_url('assets/startbootstrap-admin/vendor/jquery/jquery.min.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo site_url('assets/startbootstrap-admin/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo site_url('assets/startbootstrap-admin/vendor/metisMenu/metisMenu.min.js'); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo site_url('assets/startbootstrap-admin/dist/js/sb-admin-2.js'); ?>"></script>

</body>

</html>
