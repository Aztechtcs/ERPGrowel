<html>
    <head>
        
    </head>
    <?php var_dump($formdata); ?>
    <body ng-app="myApp" ng-controller="myCtrl">
    <form id="rendered-form" action="<?php echo site_url('Manager/add_supplier'); ?>">
    <div class="rendered-form">
        <div class="fb-text form-group field-name" ng-repeat="x in records">
            <label for={{x.name}} class="fb-text-label"> {{x.placeholder}} </label>
            <input type={{x.type}} value="{{x.value}}" placeholder={{x.placeholder}} class="{{x.className}}" name={{x.name}} maxlength="45" id="{{x.name}}" required={{x.required}} aria-required="true">
        </div>
    </div>
    </form>
<?php
/*<form id="rendered-form">
    <div class="rendered-form">
        
        <div class="fb-text form-group field-email">
            <label for="email" class="fb-text-label">Email<span class="fb-required">*</span></label>
            <input type="email" placeholder="Email" class="form-control" name="email" maxlength="45" id="email" required="required" aria-required="true">
        </div>
        <div class="fb-number form-group field-number-1522234199710">
            <label for="number-1522234199710" class="fb-number-label">Number<span class="fb-required">*</span></label>
            <input type="number" placeholder="Phone Number" class="form-control" name="number-1522234199710" min="8" max="11" id="number-1522234199710" required="required" aria-required="true">
        </div>
        <div class="fb-button form-group field-submit-supplier">
            <button type="button" class="btn btn-primary" name="submit-supplier" value="Submit Supplier" style="primary" id="submit-supplier">Submit Supplier</button>
        </div>
    </div>
</form> */?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script>
var app = angular.module("myApp", []);
app.controller("myCtrl", function($scope) {
    $scope.records =<?php $this->load->view('manager/'.$formdata); ?>
        
        
        <?php /*[
	{
		"type": "text",
		"required": "true",
		"label": "Supplier Name",
		"placeholder": "Supplier Name",
		"name": "name",
		"subtype": "text",
		"className": "red form-control",
                "value":''
	},
	{
		"type": "text",
		"required": true,
		"label": "Email",
		"placeholder": "Email",
		"name": "email",
		"subtype": "text",
		"className": "red form-control",
                
	},
	{
		"type": "number",
		"required": true,
		"label": "Number",
		"placeholder": "Number",
		"className": "form-control",
		"name": "number"
	},
	{
		"type": "submit",
		"label": "Click for add supplier",
		"subtype": "button",
		"className": "btn btn-primary",
		"name": "button-1522236046994",
		"style": "primary",
                "value":'Click for add supplier'
	}
] */?>
});
</script> 
    </body>   
</html>


