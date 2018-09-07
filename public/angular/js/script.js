var myApp = angular.module("myModule", []);
myApp.controller("myController", function($scope, $http){
	//object
	var employee = {
		name : "eman mahmoud",
		age  : 27,
		image : "1.png",
		gender: 1,
	};
    //array of object
	var employees = [
	{name:"eman mahmoud", gender:"female", salary:2500},
	{name:"mahmoud ahmed", gender:"male", salary:5500},
	{name:"sohair mahmoud", gender:"female", salary:3500},
	];

	var courses = [
	{name:"eman mahmoud", gender:"female", salary:2500},
	{name:"mahmoud ahmed", gender:"male", salary:5500},
	{name:"sohair mahmoud", gender:"female", salary:3500},
	];




	var countries = [
	{
		name:"uk",
		cities:[
		    {name:"london"},
		    {name:"bermingham"},
		    {name:"manchester"}
		]
	},
	{
		name:"USA",
		cities:[
		    {name:"chicago"},
		    {name:"houston"},
		    {name:"los angeles"}
		]
	},
	{
		name:"india",
		cities:[
		    {name:"hyderabad"},
		    {name:"chennai"},
		    {name:"mumbai"}
		]
	},
	];

	var technologies = [
	  {name:"php", likes:0, dislikes:0},
	  {name:"c#", likes:0, dislikes:0},
	  {name:"python", likes:0, dislikes:0},
	];
	$scope.technologies = technologies;

	$scope.likeTechnoloy = function(technology){
		technology.likes++;
	};

	$scope.dislikeTechnoloy = function(technology){
		technology.dislikes++;
	};

	$scope.countries = countries;


	$scope.employees = employees;

	$scope.employee = employee;
	$scope.courses = courses;
	$scope.changeView = 'courseTable';
	$scope.message = "angular tutorails";
});