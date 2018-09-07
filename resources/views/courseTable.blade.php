<h1>table</h1>
<table>
	<thead>
	    <tr>
	    	<th>Name</th>
		    <th>gender</th>
		    <th>salary</th>
	    </tr>
	</thead>
	<tr ng-repeat="course in courses">
		<td>@{{ course.name }}</td>
		<td>@{{ course.gender }}</td>
		<td>@{{ course.salary }}</td>
	</tr>
</table>