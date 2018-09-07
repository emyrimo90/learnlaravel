<!DOCTYPE html>
<html>
<head>
	<title>Angular JS</title>
<script type="text/javascript">
    var base_url = "{{ url('/') }}";
</script>
</head>
<body ng-app="myModule">
    <div ng-controller="myController">
        <div ng-repeat="us in centers.user">
            <h1>@{{us.name}}</h1>
        </div>
        <div ng-repeat="center in centers.data" style="background-color:red">
            <h1>@{{ center.center_name }}</h1>
            <ul>
                <li>@{{ center.center_email }}</li>
                <li>@{{ center.center_phone }}</li>
                <li>@{{ center.center_locality }}</li>
            </ul>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('public/angular/js/angular.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/angular/js/angular-route.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/angular/js/angular-cookies.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/angular/js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/angular/js/request.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/angular/js/filter.js') }}"></script>
</body>
</html>