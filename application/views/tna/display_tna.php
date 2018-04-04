<?php /*<html>
<body>

<table ng-controller="myCtrl" border="1">
    <tr ng-repeat="x in records">
        <td>{{x.name}}</td>
        <td>{{x.fixed_date}}</td>
    </tr>
</table>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/application-985b892b.js" type="text/javascript"></script>
    <script src="<?php echo site_url('formBuilder/dist/form-render.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/angular.min.js'); ?>" ></script>
    
<script>
var app = angular.module("myApp", []);
app.controller("myCtrl", function($scope) {
    $scope.records = <?php echo $json; ?>
});
</script>

</body>
</html>

*/ ?> 
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body ng-app="myApp" ng-controller="myCtrl">
    <table class="table table-hover">
        <tr ng-repeat="x in records">
            <td>{{x.name}}</td>
            <td>{{x.fixed_date}}</td>
            <td>{{x.Day}}</td>
        </tr>
    </table>

<script src="<?php echo site_url('assets/angular.min.js'); ?>" ></script>
<script>
var app = angular.module("myApp", []);
app.controller("myCtrl", function($scope) {
    $scope.records = <?php echo $json; ?>
});
</script>

</body>