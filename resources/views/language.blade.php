<!DOCTYPE html>
<html>
<head>
	<title>language</title>
</head>
<body>
<ul>
	<li><a href="{{ url('locale/en') }}">{{ trans('home.english')}}</a></li>
	<li><a href="{{ url('locale/ar') }}">{{ trans('home.arabic')}}</a></li>
</ul>
<h1>{{ trans('home.header')}}</h1>
<ul>
	<li>{{ trans('home.home')}}</li>
	<li>{{ trans('home.about')}}</li>
	<li>{{ trans('home.gallery')}}</li>
	<li>{{ trans_choice('home.notification',0) }}</li>
</ul>
</body>
</html>