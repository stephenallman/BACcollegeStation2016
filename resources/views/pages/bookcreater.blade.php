
@extends('partials.master')

@section('content')

 <div class="container">
 <div class="starter-template">
         <h1>Create Your Picture Album</h1>
         <p class="lead">create book by adding images.</p>
       </div>

		
		<!-- SCRIPTS -->




		<form class="register-form" method="POST" action="{{ route('flipbook.store') }}" enctype="multipart/form-data">
                                 {!! csrf_field() !!}
<div class="row">
    <div class="col-lg-3">
                                  <label><span class="required">*</span> Book Name</label></div>
                                  <div class="col-lg-9">
                                  <input class="input-block-level" type="text" placeholder="* Your Book Name" name="book_name" value=""></div></div>
                                  <div class="row">
                                      <div class="col-lg-3">
                                   <label><span class="required">*</span> Book Description</label></div>
                                                          <div class="col-lg-9">   <input class="input-block-level" type="text" placeholder="* Your Book Desc" name="desc" value=""></div></div>

                                                            <div id="browse_file">
                                                             <div class="row"><div class="col-lg-3"><label><span class="required">*</span> Select Book Image </label></div><div class="col-lg-9"><input type="file" name="flip_img_1" /></div></div></div>

                                                                <div class="row">
                                                                    <div class="col-lg-offset-6">
                                                                         <button id="add_files"  class="btn btn-medium btn-general input-block-level" type="button">Add More Images</button>
                                                                         </div>

                                                                         </div><hr>
                                                                           <div class="row">
                                                                                                                                             <div class="col-lg-offset-3 pull-right">
                                                                                                                                                  <button id="add_files"  class="btn btn-lg btn-primary" type="submit">Create Flip Book</button>
                                                                                                                                                  </div>

                                                                                                                                                  </div>

                                                                         </form>

                                                                         </div>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
                                    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
                                    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
                                    <script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>



	<script type="text/javascript">

	  $(document).ready(function(){
        var i = 2;
	  $("#add_files").on('click',function(){
        var data = '<div class="row"><div class="col-lg-3"><label><span class="required">*</span> Select Flipbook Image </label></div><div class="col-lg-9"><input type="file" name="flip_img_'+ i +'" /></div></div>';
	 // var data = '<div><label><span class="required">*</span> Select Flipbook Image </label><input type="file" name="flip_img_'+ i +'" /></div>';
	  i++;
	    $('#browse_file').append(data);
	  });
	  });

	</script>

  @include('partials.footer')
@stop
