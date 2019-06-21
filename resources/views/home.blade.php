@extends('layouts.app') 
 @section('content') 

<!-- Masthead -->
<div id="demo" class="carousel slide" data-ride="carousel">

  
  
<!-- The slideshow -->
<div class="container">
<div class="row">
  <div class="col" aling="center">
    <!-- Indicators -->
    <center>
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>
      <div class="carousel-inner">
          <div class="carousel-item active" >
            <img src="img/banner1.png" alt="1" class="d-block w-100" >
          </div>
          <div class="carousel-item">
            <img src="img/banner2.png" alt="2"  class="d-block w-100" >
          </div>
          <div class="carousel-item">
            <img src="img/banner3.png" alt="3"  class="d-block w-100">
          </div>
        </div>
      
      
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </center>
  </div>
</div>

</div>

</div>



@endsection