var myApp = angular.module('myApp', ['ngRoute','cont1']);

myApp.config(['$routeProvider',function($routeProvider){
	$routeProvider. .when("/scr", {
		templateUrl : "scr.php"}
}])