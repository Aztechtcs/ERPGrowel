<?php $this->load->view('workshedule/header'); ?>

 <!-- Content -->
      <div id='content'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <i class='icon-beer icon-large'></i>
           List All Orders
            <div class='panel-tools'>
              <div class='btn-group'>
                <a class='btn' href='<?php echo site_url('Manager/list_order'); ?>'>
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
        <table ng-app="myApp" ng-controller="myCtrl" border="1">
        <tr><th>Order Number</th><th>Start Date Time</th></th>
        <tr ng-repeat="x in records"><td> {{x.number}}</td><td> {{x.datetime}}</td>
            <td><a href="<?php echo site_url('Manager/explore_order/{{x.number}}'); ?>">Explore</a></td></tr>
        </table> 
                
            </div>
            <?php //echo $content; ?>
          
           <?php /* <div ng-app="myApp" ng-controller="myCtrl">
        <div ng-repeat="x in records">{{x.number_Of_Color}} / {{x.number}} / {{x.datetime}}</div>
            </div> */ ?>

            
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
 <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script>
 <script src="assets/javascripts/application-985b892b.js" type="text/javascript"></script>
 <script src="<?php echo site_url('assets/angular.min.js'); ?>" ></script>
 <script>
var app = angular.module("myApp", []);
app.controller("myCtrl", function($scope) {
    $scope.records = <?php echo $content; ?>
});
</script>
 
  </body>
</html>

            
            <?php //$this->load->view('part_footer'); ?>