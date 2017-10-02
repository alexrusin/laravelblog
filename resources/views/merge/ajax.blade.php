@extends('layout')
	@section('content')
	<div class="container">
		<div class="row">
			<div class="com-md-12">
				<h3>Hello from ajax page</h3>
			</div>
		</div>
		<div class="row">
			<div class="com-md-12">
				<ul>
					<li v-for="skill in skills" v-text="skill">
					</li>
				</ul>
			</div>
		</div>
		
	</div>

	@endsection