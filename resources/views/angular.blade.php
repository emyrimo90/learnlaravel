<!DOCTYPE html>
<html>
<head>
	<title>Angular JS</title>
<script type="text/javascript">
    var base_url = "{{ url('/') }}";
</script>
</head>
<body ng-app="myModule">
    <div>
    	@{{ 10 + 50 }} <!-- CALC -->
    	@{{ {"name":"eman", "age":27}.name }} <!-- OBJ -->
    	@{{ ['lolo', 'mahmoud'][1] }} <!-- Array -->
    </div>
    <div ng-controller="myController">
        <input type="text" ng-model="message">
    	<h1>@{{ message }}</h1>
    	<div>
    		<strong>Name: </strong>@{{ employee.name }}<br>
    		<strong>Age:</strong>@{{ employee.age }}<br>
            <strong>gender: </strong>@{{ employee.gender | gender}}<br><!--custom filter-->
    		<img ng-src="public/images/@{{ employee.image }}">
    	</div>
        <input type="checkbox" ng-model="hideSalary"> <label>Hide Salary</label>
    	<table>
    		<thead>
    		    <tr>
    		    	<th>Name</th>
    			    <th>Gender</th>
    			    <th ng-hide="hideSalary">Salary</th>
                    <th ng-show="hideSalary">Salary</th>
    		    </tr>
    		</thead>
    		<tr ng-repeat="employee in employees">
    			<td>@{{ employee.name }}</td>
    			<td>@{{ employee.gender }}</td>
    			<td ng-hide="hideSalary">@{{ employee.salary }}</td>
                <td ng-show="hideSalary">#####</td>
    		</tr>
    	</table>
    	<h2>Countries</h2>
    	<div ng-repeat="country in countries">
    		<h4>@{{ country.name }}</h4>
    		<ul>
    			<li ng-repeat="city in country.cities">@{{ city.name }}</li>
    		</ul>
    	</div>
        
    	<table>
    		<thead>
    		    <tr>
    		    	<th>Name</th>
    			    <th>likes</th>
    			    <th>dislikes</th>
    			    <th>action</th>
    		    </tr>
    		</thead>
    		<tr ng-repeat="technoloy in technologies">
    			<td>@{{ technoloy.name }}</td>
    			<td>@{{ technoloy.likes }}</td>
    			<td>@{{ technoloy.dislikes }}</td>
    			<td>
    				<input type="button" value="like" ng-click="likeTechnoloy(technoloy)">
    				<input type="button" value="dislike" ng-click="dislikeTechnoloy(technoloy)">
    			</td>
    		</tr>
    	</table>
        <select ng-model="changeView">
            <option value="courseTable">table</option>
            <option value="courseList">list</option>
        </select>
        <div ng-include="changeView"></div>
    </div>
    <script type="text/javascript" src="{{ asset('public/angular/js/angular.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/angular/js/angular-route.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/angular/js/angular-cookies.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/angular/js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/angular/js/filter.js') }}"></script>
</body>
</html>