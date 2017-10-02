<div class="row">
	<div class="col-sm-12">
		@foreach ($projects as $project)
			<ul>
				<li>{{$project->name}} | {{$project->description}}</li>
			</ul>
		@endforeach
	</div>
</div>