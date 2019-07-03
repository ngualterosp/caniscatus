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
            <div class="carousel-item active">
              <img src="img/ns.jpg" alt="1" class="d-block w-100">
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
      max-width: 65%;
    }
  </style>

  <!-- Services Section -->

  <div class="container">
    <div class="row">
      <div class="col" max-width: 50%;>
        <center>
          <div class="box">
            <h4>Hotel Felino</h4></br></br>
            <div class="box-icon">
              <img src="img/3op.png" width="150px" alt="">

              </br></br>

            </div>

            <h5>
              <p align="justify">Caniscatus ofrece a tu felino, un ambiente tranquilo, implementando las técnicas de
                musicoterapia y aromaterapia, para llegar a niveles de comodidad máximos, evitando el estrés de estar
                fuera de casa. En el hotel encontraras una suite con lo necesario. En la zona catus de nuestra empresa,
                tu felino tendrá acceso a una zona libre, en la que podrá tener oportunidad de desarrollar sus instintos
                felinos al máximo y podrá comportarse de manera natural. Adicionalmente, se ofrece el servicio
                veterinario básico las 24 horas y estará en constante supervisión.

          </div>
      </div>
      </center>

    </div>
  </div>











  <style>
    #timg {
      height: 250px;
      width: 450px;
    }
  </style>

  <!-- Portfolio Section -->
  <br>
  <center>
    <hr class="divider my-4">
  </center>
  <div id="portfolio">
<div class="container">
    <div class="container-fluid p-0">
        <div class="row row mb-3">
          <div class="col-md-4">
            <a class="portfolio-box" href="img/hotel felino.png">
              <img class="img-fluid" id="timg" src="img/hotel felino.png" alt="">
            </a>
          </div>
  
          <div class="col-md-4">
            <a class="portfolio-box" href="img/hotel felino1.png">
              <img class="img-fluid" id="timg" src="img/hotel felino1.png" alt="">
            </a>
          </div>
  
  
  
          <div class="col-md-4">
            <a class="portfolio-box" href="img/hotel felino2.png">
              <img class="img-fluid" id="timg" src="img/hotel felino2.png" alt="">
            </a>
          </div>
  
        </div>
      </div>
</div>

   
  </div>


  @endsection