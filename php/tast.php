<?php session_start(); ?>
<!DOCTYPE html>
<html>
<script src="angular.min.js"></script>
<script src="angular-route.js"></script>


<body ng-app="myApp">

<p><a href="#/!">Main</a></p>

<a href="#!banana">Banana</a>
<a href="#!tomato">Tomato</a>

<p>Click on the links to change the content.</p>

<p>Use the "otherwise" method to define what to display when none of the links are clicked.</p>


<div ng-view></div>
<!-- <?php echo count($_SESSION["sarsh"]); echo $_SESSION["sarsh"][1]; ?> -->
<script>
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/banana", {
        templateUrl : "scr.html"
    })
    .when("/tomato", {
        templateUrl : "str.php",
        controller : "myCtrl"
    })
    .otherwise({
        template : "alert('ahmednoor***-***');"
    });
});
app.controller('myCtrl', function($scope) {
        $scope.state = <?php echo $_SESSION["sarsh"][1]; ?>;
    });
</script>

</body>
</html>
