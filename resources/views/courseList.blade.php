<div>
	<ul ng-repeat="course in courses">
		<li>@{{ course.name }}
			<ul>
				<li>@{{ course.gender }}</li>
			    <li>@{{ course.salary }}</li>
			</ul>
		</li>
	</ul>
</div>