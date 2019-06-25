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

</ul>
      <div class="carousel-inner">
          <div class="carousel-item active" >
            <img src="img/ns.jpg" alt="1" class="d-block w-100" >
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

<style>
.box {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 50%;
}

</style>
<!-- Services Section -->
<section class="page-section" id="servicios">
  <div class="container">
           <div class="row" >
                <div class="col" max-width: 50%;>
                <center>
                    <div class="box">
                    <h4>Hotel Canino</h4></br></br>
                        <div class="box-icon">
                            <img src="img/3op.png" width="150px" alt="">
                            </div>
                    </div>
                </div>
                </center>

                </div>
                <div class="col">
                <center>
                    <div class="box">
                    </br></br>
                    <h5> <p align="justify">Caniscatus ofrece a tu perro (a) cómodas habitaciones, dotadas con los elementos necesarios para brindar la mejor comodidad y bienestar durante su estadía nocturna. Adicionalmente, durante el día estará en espacios libres en compañía de otras mascotas, para ejercitarse y realizar procesos de socialización, contando con el servicio veterinario básico las 24 horas, al cuidado de personal capacitado para dicha labor.
              </br>
              </br></h5>
                        </p>
                    </div>
                </div>


             
   
				

<style>
  #timg {
    height: 250px;
    width: 450px;
  }
</style>

<!-- Portfolio Section -->
<div id="portfolio">

<div class="container gallery-container">
    <div class="tz-gallery">
  
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/hotel canino.png">
                    <img src="img/hotel canino.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
             
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/hotel canino1.png">
                    <img src="img/hotel canino1.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
             
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/hotel canino2.png">
                    <img src="img/hotel canino2.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
        </div>
          
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/hotel canino3.png">
                    <img src="img/hotel canino3.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
             
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/hotel canino4.png">
                    <img src="img/hotel canino4.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
             
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/hotel canino5.png">
                    <img src="img/hotel canino5.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
</div>

            <div class="row mb-3">
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/hotel canino6.png">
                    <img src="img/hotel canino6.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/hotel canino 7.png">
                    <img src="img/hotel canino 7.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/hotel canino8.png">
                    <img src="img/hotel canino8.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
</div>

<div class="row mb-3">
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/hotel canino9.png">
                    <img src="img/hotel canino9.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
</div>

</section>

@endsection