var myApp = angular.module("myModule", []);
myApp.controller("myController", function($scope, $http, $log){
    /*$http.get('http://localhost/html/webservices/get_center')
         .then(function(response){
         	$scope.centers = response.data;
         	console.log(response.data);
         });*/

       $http({
       	url:'http://localhost/html/webservices/get_center',
       	method:'GET',
       })
         .then(function(response){
         	$scope.centers = response.data;
         	console.log(response.data);
         	$log.info(response);
         });
	
});