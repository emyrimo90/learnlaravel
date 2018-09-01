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
@if(session()->has('message'))
{{ var_dump(session()->get('message')[0]['val']) }}
   <!-- {{ session()->forget('message') }} -->
@endif
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
  <form action="{{ url('/news') }}" method="post" id="newsForm">
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
  	<tbody>
  		@if(count($news))
  		@foreach($news as $new)
  		@include('news.list_news')
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
     	$(document).on('click', '#add_new', function(e){
     		e.preventDefault();
     		var form = $('#newsForm').serialize();
     		var url  = $('#newsForm').attr('action'); 
     		$.ajax({
     			url: url,
     			type:'post',
     			dataType:'json',
     			data: form,
     			beforeSend:function(){

     			},
     			success:function(data){
                    if(data.success == true){
                    	$('.success').html('Data Insert Successfully');
                        $('.success').css('display','block');
                        $('#list_news tbody').append(data.msg)
                    }
                    $('#newsForm')[0].reset();
                    $('.error').css('display','none');
     			},
     			error:function(data_error, exception){
     				$('.error').css('display','block');
     				$('.success').css('display','none');
     				var li = '';
     				$.each(data_error.responseJSON.errors, function(key,value){
     					li +='<li>'+value+'</li>';
     				});
     				$('.error ul').html(li);
     				//console.log(data_error.responseJSON.errors);
     			}
     		})
     		

     	});
     })
  </script>
</body>
</html>