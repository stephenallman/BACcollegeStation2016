@extends('partials.master')

@section('title')
	Edit Contact {{$contact->last_name}}
@stop
	
@section('content')

<head>
<style>
    .edit{
        width: 50%;
    }
</style>
</head>

	<h1>Edit Contact Information For {{$contact->first_name}}</h1>

	<hr>
	<!--<input type="hidden" name="_method" value="put" /> -->


    <div class = "edit" >

         {!! Form::model($contact, ['method' => 'PATCH','action' => ['ContactController@update', $contact->id]]) !!}
		
      
        <div class="form-group">
            {!! Form::label('first_name', 'First Name:' ) !!} 
            {!! Form::text('first_name', null, ['class' => 'form-control'], 'required') !!}
        </div>

         <div class="form-group">
            {!! Form::label('last_name', 'Last Name:') !!}
            {!! Form::text('last_name', null, ['class' => 'form-control'], 'required') !!}
         </div>

         <div class="form-group">
            {!! Form::label('company', 'Company:') !!}
            {!! Form::text('company', null, ['class' => 'form-control'], 'required') !!}
         </div>

         <div class="form-group">
            {!! Form::label('role', 'Role:') !!}
            {!! Form::text('role', null, ['class' => 'form-control'], 'required') !!}
         </div>

         <div class="form-group">
            {!! Form::label('phone_number', 'Phone Number:') !!}
            {!! Form::text('phone_number', null, ['class' => 'form-control'], 'required') !!}
         </div>


         <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class' => 'form-control'], 'required') !!}
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