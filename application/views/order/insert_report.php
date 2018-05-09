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
                    
                    <?php 

//var_dump($ar);

?>

                    <?php 
$size=array();
$color=array();
foreach($ar as $v){
    array_push($color, $v->color);
    array_push($size, $v->size);
}
$color= array_unique($color);
$size=array_unique($size);
//var_dump($color);
//var_dump($size);
?>

 
<?php 
echo form_open();
echo form_hidden('operation_id',1);

//foreach($ar as $v){
//    echo form_input($v->id,'','placeholder ='.$v->id.'/'.$v->size.'/'.$v->color)."<br>";
//}
//echo json_encode($ar);
?>

                    
                    
                    
                    <table width="100%" class="table table-striped table-bordered table-hover" ng-app="myApp" ng-controller="myCtrl">
                        <thead>
                            <tr>

                                <th>Buyer Name</th>
<!--                                <th>Order Number</th>
                                <th>Style Number</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Quantity</th>-->
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX" ng-repeat="x in records">
                                <td>{{x.buyer_name}}</td>
<!--                                <td>{{x.number}}</td>
                                <td>{{x.Style_id}}</td>
                                <th>{{x.color}}</th>
                                <td>{{x.size}}</td>-->
                                <td>
                                <div class="form-group input-group">
                                    <?php /*<input type="text" class="form-control" required placeholder="{{x.buyer_name}} / {{x.number}} / {{x.Style_id}} / {{x.color}} / {{x.size}}">
                                    */ ?>
                                    <input class="form-control " type="number" name="{{x.id}}" placeholder="{{x.Style_id}} / {{x.color}} / {{x.size}} /{{x.buyer_name}}:{{x.number}} /" required>
                                    <span class="input-group-addon">.00</span>
                                </div>
   
                              <?php /*  <td class="center">{{x.fixed_date}}</td>
                                <td class="center"><a href="<?php echo site_url('Tna/click_complete/');?>{{x.id}}" ><button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i>
                                        </button>
                    </button></a> */ ?></td>
                            </tr>

                        </tbody>
                    </table>
                  <?php  echo form_submit('Submit','Submit');
                        echo form_close();
                        ?>
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
$scope.records = <?php echo json_encode($ar); ?>
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
