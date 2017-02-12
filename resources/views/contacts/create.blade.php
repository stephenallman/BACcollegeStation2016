@extends('partials.master')

@section('title')
	Create a Contact
@stop
	
@section('content')

	<h1>Create a Contact</h1>

	<hr>

	<div class ="row">

	<form method ="POST" action= "/contacts" enctype ="multipart/form-data" class ="col-md-6">
		{{csrf_field()}}

			<div class = "form-group">
				<label for = "first_name">First Name: </label>
				<input type = "text" name = "first_name" id ="first_name" class = "form-control" value = "">


			</div>

			<div class = "form-group">
				<label for = "last_name">Last Name: </label>
				<input type = "text" name = "last_name" id ="last_name" class = "form-control" required>
			</div>

			<div class = "form-group">
				<label for = "company">Company: </label>
				<input type = "text" name = "company" id ="company" class = "form-control"  value = "{{ old('company') }}" required>
			</div>

			<div class = "form-group">
				<label for = "role">Role: </label>
				<input type = "text" name = "role" id ="role" class = "form-control" value = "{{ old('role') }}" rows = "5" required>
			</div>

			<div class = "form-group">
				<label for = "phone_number">Phone Number: </lablel>
				<input type = "tel" name = "phone_number" id ="phone_number" class = "form-control" value = "" required>
			</div>
			<div class = "form-group">
				<label for = "email">Email: </lablel>
				<input type = "email" name = "email" id ="email" class = "form-control" value = "" required>
			</div>


	<hr>

			<div class = "form-group">
				<button type = "submit" class ="btn btn-primary"> Log New Contact </button>
			</div>

			@if(count($errors)>0)
				<div class = "alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>{{ $error}}</li>
						@endforeach
					</ul>
				</div>
			@endif

	</form>

	</div>



			
	<hr>
	@include('partials.footer')

@stop