<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
         .error{display: none;background:red;padding:20px;margin-bottom:20px;color:#fff;}
         .success{display: none;background:green;padding:20px;margin-bottom:20px;color:#fff;}
	</style>
</head>
<body>
<h1>{{ trans('admin.header') }}</h1>
@if($errors->any())
  <div style="background:red">
  	@foreach($errors->all() as $error)
  	<li>{{ $error }}</li>
  	@endforeach
  </div>
@endif  
  <div class="error">
  	<ul>
  		
  	</ul>
  </div>
  <div class="success">
  	
  </div>
  <form action="{{ url('/posts') }}" method="post" id="newsForm">
  {{ csrf_field() }}
  	<input type="text" name="title" value="{{ old('title') }}"><br><br>
  	<input type="text" name="user_id" value="1"><br><br>
  	<input type="text" name="status" value="approved"><br><br>
  	<textarea name="content">{{ old('content') }}</textarea><br><br>
  	<button type="submit" id="add_new">Send</button>
  </form>
  <table id="list_news">
  	<tr>
  		<th>title</th>
  		<th>content</th>
  	</tr>
  	<tbody id="list_posts">
  		@if(count($news))
      @foreach($news as $new)
      <tr>
        <td>{{ $new->title }}</td>
        <td>{{ $new->content }}</td>
      </tr>
      @endforeach
      @else
      <tr>
        <td colspan="2">No data to view</td>
      </tr>
      @endif
  	</tbody>
  </table>
  <script type="text/javascript" src="{{ asset('public/js/jQuery-2.1.4.min.js') }}"></script>
  <script type="text/javascript">
     $(function(){
       setInterval(function(){
        $('#list_news').load('#list_posts')
       },2000)
     })
  </script>
</body>
</html>