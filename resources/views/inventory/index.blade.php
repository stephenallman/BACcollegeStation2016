

@extends('partials.master')

@section('content')


<h1>Inventory</h1>

<hr>

	<table class = "table table-striped table-bordered table-hover">
		<thead>
			<tr class = "bg-info">
				<th >ID</th>
				<th>Install Date</th>
				<th>Location</th>
				<th>Serial Number</th>
				<th>Date Replaced</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody>
			@foreach($inventories as $inventory)
			<tr>
				<td class = "inventory"> {!! $inventory->id !!}</td>
				<td class = "inventory">{!! $inventory->install_date !!}</td>
				<td class = "inventory">{!! $inventory->location !!}</td>
				<td class = "inventory">{!! $inventory->serial_number !!}</td>
				<td class = "inventory">{!! $inventory->date_replaced !!}</td>
				<td><a href="{{route('inventory.edit',$inventory->id)}}" class = "btn btn-success">Update</a></td>
			</tr>
			@endforeach
		</tbody>

	</table>`	

@include('partials.footer')
@stop