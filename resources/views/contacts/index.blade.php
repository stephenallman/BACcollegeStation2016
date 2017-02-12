
@extends('partials.master')

@section('content')

	<!-- responds to Route::post('/submittals/create', 'SubittalsController@postCreate'); -->
<h1>Contacts</h1>

<hr>

	<table class = "table table-striped table-bordered table-hover">
		<thead>
			<tr class = "bg-info">
				
				<th>First Name</th>
				<th>Last Name</th>
				<th>Company</th>
				<th>Role</th>
				<th>Phone Number</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody>
			@foreach($contacts as $contact)
			<tr>
				<td>{!! $contact->first_name !!}</td>
				<td>{!! $contact->last_name !!}</td>
				<td>{!! $contact->company !!}</td>
				<td>{!! $contact->role !!}</td>
				<td>{!! $contact->phone_number !!}</td>
				<td>{!! $contact->email !!}</td>
				<td><a href= "{{route('contacts.edit', $contact->id)}}" class = "btn btn-warning">Update</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>`	

<hr>
<a href="{{url('/contacts/create')}}" class = "btn btn-success">Create New Contact</a>
<hr>

@include('partials.footer')
@stop

