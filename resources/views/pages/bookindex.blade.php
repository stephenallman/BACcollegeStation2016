

@extends('partials.master')


@section('content')



<div class="container">
    <div class="starter-template">
        <h1>View Pictures</h1>
        <p class="lead">Click on picture to view album.</p>
        <p class="lead">Change pictures by clicking the corners of the pictures.</p>
        <p><a href="{{url('/flipbook/create')}}" class = "btn btn-primary">Create a New Album</a></p>
        
    </div>
    <div class="row">


        @foreach($flipbooks as $fb)
        <div class="col-md-2">

            <a href="{{ route('flipbook.show',$fb->id) }}" style="float: left;clear: both;">

            <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="{{ asset(explode(",",$fb->content)[0])  }}" data-holder-rendered="true">
            {{ $fb->name  }} , {{ $fb->desc }}
            <a href="{{ route('flipbook.delete', $fb->id)}}" class = "btn btn-danger">DELETE</a>
            </a>

 
        </div>
        @endforeach
    </div>
</div>



    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('js/jquery.min.js') }}"><\/script>')</script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>

<hr padding-bottom = "40px"> 

@include('partials.footer')
@stop



