<header>

@if(Auth::check())

<nav class="navbar navbar-default ">
   <div class = "nav-header">
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="nav-logo">{{ Html::image('img/baclogo.png') }}</li>
     
        <li class="tab"><a href= "{{ URL::to('/')}}">Home</a></li>
        <li class="tab"><a href= "{{ URL::to('src/docs/book.pdf')}}">403 Book</a></li>
        <li class="tab"><a href= "{{ URL::to('inventory')}}">Inventory</a></li>
        <li class="tab"><a href= "{{ URL::to('flipbook')}}">Pictures</a></li> 
        <li class="tab"><a href= "{{ URL::to('contacts')}}">Contacts</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class = "out"><a href= "{{ URL::to('logout')}} ">Log out</a></li>
      </ul>
    </div>
  </div>

 
</nav>

  @else

  <div class="page-header">
    <h1 class= "logo" padding-left="50px">{{ Html::image('img/mecologo.png') }}
     <span>College Station 2016 <small>VRLA Battery Replacement</small>
      </span>
    </h1>
  </div>

   
  
  @endif
  

</header>