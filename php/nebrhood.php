<?php session_start(); ?>
<!DOCTYPE html>
<html>
<script src="angular-route.js"></script>
<script src="angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="customersCtrl"> 

<table>
  <tr ng-repeat="x in state">
    <td>{{ x[0].bransh_name }}</td>
    <td>{{ x[0].companies_company_id }}</td>
  </tr>
</table>
<?php echo count($_SESSION["sarsh"]); ?>
</div>
<?php echo "noor:".$_SESSION["sarsh"][1]; ?>
<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope) {
	
    $scope.state = <?php echo $_SESSION["sarsh"][1]; ?>;
    alert("ahmed");
});
</script>

</body>
</html>
