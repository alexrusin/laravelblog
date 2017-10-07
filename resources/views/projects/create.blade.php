@extends('layout')
	@section('content')
	<div class="container">
		@include('projects.list')
		<div class="row">
			<div class="col-sm-12">
				<projects inline-template style="margin-top:20px">
					<div>
						<form method="POST" action="/projects" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
							{{ csrf_field() }}
						  <div class="form-group">
						    <label for="name">Project Name</label>
						    <input type="text" class="form-control" name="name" v-model="form.name">
						    <p class="alert-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></p>
						  </div>
						  <div class="form-group">
						    <label for="description">Description</label>
						    <input type="text" class="form-control" id="description" name="description" v-model="form.description">
						    <p class="alert-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></p>
						  </div>
						  <button type="submit" class="btn btn-primary" :disabled="form.errors.any()">Submit</button>
						</form>
					</div>
				</projects>
			</div>
			
		</div>
	</div>
	@endsection