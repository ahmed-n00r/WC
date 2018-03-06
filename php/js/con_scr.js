
var cont1 = angular.module('cont1', []);
cont1.controller('scr', function($scope) {
	$scope.msg = "I love London";
});

cont1.controller('str', function($scope) {
	$scope.mssg = "I love Paris";
});