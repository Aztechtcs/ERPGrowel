 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">TNA Download</h1>
                    </div>
                    
                      <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Alert Working Order List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" ng-app="myApp" ng-controller="myCtrl" >
                            <div class="alert alert-success" ng-repeat="x in records">
                                {{x.Order_Number}} <a href="<?php echo site_url('Tna/download_tna').'/{{x.Order_Number}}'; ?>" class="alert-link"> Download TNA</a>.
                            </div>
                          <?php /*  <div class="alert alert-info">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                            </div>
                            <div class="alert alert-warning">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                            </div>
                            <div class="alert alert-danger">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                            </div> */ ?>
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                </div>
              
            </div>
            
                    
                    
                    
                    <?php //echo $this->Tna_model->get_order_list(); ?>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>
        <!-- /#page-wrapper -->
<script src="<?php echo site_url('assets/angular.min.js'); ?>" ></script>
<script>
var app = angular.module("myApp", []);
app.controller("myCtrl", function($scope) {
    $scope.records =  <?php echo $this->Tna_model->get_order_list(); ?>
});
</script>
</body>
</html>