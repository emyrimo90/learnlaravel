var myApp = angular.module("myModule", []);
myApp.controller("myController", function($scope, $http){
    $http.get('http://localhost/html/webservices/get_center')
         .then(function(response){
         	$scope.centers = response.data;
         	console.log(response.data);
         });
	
});