@extends('layouts.app')
@section('content')
<!-- Services Section -->
<section class="page-section" id="servicios">
  <div class="container">
   
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
            <div class="row">
                <div class="col">
                    <div class="box">
                    <h4>Hotel Felino</h4></br></br>
                        <div class="box-icon">
                            <img src="img/3op.png" width="150px" alt="">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="box">
                    </br>
                    <p align="justify">Caniscatus ofrece a tu felino, un ambiente tranquilo, implementando las tecnicas de musicoterapia y aromaterapia, para llegar a niveles de comodidad maximos, evitando el estres  de estar fuera de casa.  En el hotel encontraras una suit con lo necesario. 
En la zona catus de nuestra empresa, tu felino tendra acceso a una zona libre, en la que podra tener oportunidad de desarrollar sus instintos felinos al maximo y podra comportarse de manera natural.  Adicionalmente,  se ofrece el servicio veterinario básico las 24 horas y estara en constante supervisión

              </br>
                        </p>
                    </div>
                </div>


             
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


<div class="container-fluid p-0">
  <div class="row no-gutters">
    <div class="col-lg-4 col-sm-6">
      <a class="portfolio-box" href="img/hotel felino.png">
        <img class="img-fluid" id="timg" src="img/hotel felino.png" alt="">
      </a>
    </div>

    <div class="col-lg-4 col-sm-6">
      <a class="portfolio-box" href="img/hotel felino1.png">
        <img class="img-fluid" id="timg" src="img/hotel felino1.png" alt="">
      </a>
    </div>



    <div class="col-lg-4 col-sm-6">
      <a class="portfolio-box" href="img/hotel felino2.png">
        <img class="img-fluid" id="timg" src="img/hotel felino2.png" alt="">
      </a>
    </div>

    </div>
  </div>
</div>
</section>

@endsection