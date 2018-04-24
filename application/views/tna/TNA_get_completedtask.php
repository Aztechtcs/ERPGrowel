

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Completed Task Menue</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ALL Completed tasks
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" ng-app="myApp" ng-controller="myCtrl">
                                <thead>
                                    <tr>
                                        <th>OTP Number</th>
                                        <th>Work</th>
                                        <th>Order Number</th>
                                        <th>Given Date</th>
                                        <th>Finish Date</th>
                                        <th>Comments</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX" ng-repeat="x in records">
                                        <td>{{x.id}}</td>
                                        <td>{{x.Order_Number}}</td>
                                        <td>{{x.name}}</td>
                                        <td>{{x.fixed_date}}</td>
                                        <td>{{x.finish_date}}</td>
                                        <td>{{x.comments}}</td>
                                      <?php /*  <td class="center">{{x.fixed_date}}</td>
                                        <td class="center"><a href="<?php echo site_url('Tna/click_complete/');?>{{x.id}}" ><button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i>
                                                </button> */ ?>
                            </button></a></td>
                                    </tr>
                               
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
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
    <!-- DataTables JavaScript -->
    <script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/vendor/datatables-responsive/dataTables.responsive.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/dist/js/sb-admin-2.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script src="<?php echo site_url('assets/angular.min.js'); ?>" ></script>
<script>
var app = angular.module("myApp", []);
app.controller("myCtrl", function($scope) {
    $scope.records = <?php echo $json; ?>
});
</script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
