@extends('partials.master')

@section('title')
	Edit Battery {{$inventory->location}}
@stop
	
@section('content')

<head>
<style>
    .edit{
        width: 50%;
    }
</style>
</head>

	<h1>Edit Serial Number Record For {{$inventory->location}}</h1>

	<hr>


    <div class = "edit" >

         {!! Form::model($inventory, ['method' => 'PATCH','action' => ['InventoryController@update', $inventory->id]]) !!}
		
      
        <div class="form-group">
            {!! Form::label('install_date', 'Date Installed:') !!}
            {!! Form::text('install_date', null, ['class' => 'form-control'], 'required') !!}
        </div>

         <div class="form-group">
            {!! Form::label('location', 'Location:') !!}
            {!! Form::text('location', null, ['class' => 'form-control'], 'required') !!}
         </div>

         <div class="form-group">
            {!! Form::label('serial_number', 'Serial Number:') !!}
            {!! Form::text('serial_number', null, ['class' => 'form-control'], 'required') !!}
         </div>

         <div class="form-group">
            {!! Form::label('date_replaced', 'Date Replaced:') !!}
            {!! Form::text('date_replaced', null, ['class' => 'form-control'], 'required') !!}
         </div>

    <hr>
        
            {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
    
     @if(count($errors)>0)
                <div class = "alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

{!! Form::close() !!}
	</div>


			
@include('partials.footer')
@stop