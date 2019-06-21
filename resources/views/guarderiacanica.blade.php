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
                    <h4>Guardería Canina</h4></br></br>
                        <div class="box-icon">
                            <img src="img/8op.png" width="150px" alt="">
                        </div>
                    </div>
                </div>

                

            
      </div>
      <div class="col">
                    <div class="box">
                    </br></br>
                    <p align="justify">Caniscatus en el servicio de guardería ofrece una calida
              acogida para tu mascota, con espacios etologicamente adecuados para el desarrollo de actividades de
              socilaización y físicas, en compañía de sus congeneres y bajo supervision.

              En este servicio se incluye, algunos ejercicios de obediencia de nivel básico, teniendo en cuenta la
              paciencia, la constancia y el uso de refuerzos positivos. Lo anterior, con el fin de potenciar un mejor
              manejo de tu mascota.

              Incluye servicio de transporte puerta a puerta.
              </br>
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
<br>
<center>
  <hr class="divider my-4">
</center>
<div id="portfolio">


<div class="container-fluid p-0">
  <div class="row no-gutters">
    <div class="col-lg-4 col-sm-6">
      <a class="portfolio-box" href="img/guarderia.png">
        <img class="img-fluid" id="timg" src="img/guarderia.png" alt="">
      </a>
    </div>

    <div class="col-lg-4 col-sm-6">
      <a class="portfolio-box" href="img/guarderia1.png">
        <img class="img-fluid" id="timg" src="img/guarderia1.png" alt="">
      </a>
    </div>



    <div class="col-lg-4 col-sm-6">
      <a class="portfolio-box" href="img/guarderia2.png">
        <img class="img-fluid" id="timg" src="img/guarderia2.png" alt="">
      </a>
    </div>

   

    </div>
  </div>

  <!-- Portfolio Section -->
  <br>
<h2 class="text-center text-uppercase text-secondary mb-0">Adiestramiento</h2>
<center>
  <hr class="divider my-4">
</center>
<div id="portfolio">


<div class="container-fluid p-0">
  <div class="row no-gutters">
    <div class="col-lg-4 col-sm-6">
      <a class="portfolio-box" href="img/adiestramiento 1.1.png">
        <img class="img-fluid" id="timg" src="img/adiestramiento 1.1.png" alt="">
      </a>
    </div>

    <div class="col-lg-4 col-sm-6">
      <a class="portfolio-box" href="img/adiestramiento 2.1.png">
        <img class="img-fluid" id="timg" src="img/adiestramiento 2.1.png" alt="">
      </a>
    </div>




   

    </div>
  </div>

   <!-- Portfolio Section -->
   <br>
<h2 class="text-center text-uppercase text-secondary mb-0">Vehículo de transporte</h2>
<center>
  <hr class="divider my-4">
</center>
<div id="portfolio">


<div class="container-fluid p-0">
  <div class="row no-gutters">
    <div class="col-lg-4 col-sm-6">
      <a class="portfolio-box" href="img/transporte.png">
        <img class="img-fluid" id="timg" src="img/transporte.png" alt="">
      </a>
    </div>

    
   

    </div>
  </div>
</div>
</section>

@endsection