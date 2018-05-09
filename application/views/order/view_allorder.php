<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">All Order List</h1>
        </div>
    <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Order List
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" ng-app="myApp" ng-controller="myCtrl">
                        <thead>
                            <tr>

                                <th>Buyer Name</th>
                                <th>Order Number</th>
                                <th>Style Number</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $this->load->library('Zend');?>
                            <tr class="odd gradeX" ng-repeat="x in records">
                                <td>{{x.buyer_name}}</td>
                                <td>{{x.Style_id}}</td>
                                <td>{{x.number}}</td>
                                <th>{{x.color}}</th>
                                <td>{{x.size}}</td>
                                <td>{{x.quantity}}</td>
                                <td><a href="<?php echo site_url('Order/insert_report/');?>{{x.number}}/1" ><p class="fa fa-scissors"></p></a>
                                 ----- <a href="<?php echo site_url('Order/insert_report/');?>{{x.number}}/2" ><p class="fa fa-users"></p></a>
                                
                                </td>
                               
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

<script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/vendor/metisMenu/metisMenu.min.js"></script>

<script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/vendor/datatables-responsive/dataTables.responsive.js"></script>

<script src="<?php echo site_url('assets/startbootstrap-admin'); ?>/dist/js/sb-admin-2.js"></script>

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
