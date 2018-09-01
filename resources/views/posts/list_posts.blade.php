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