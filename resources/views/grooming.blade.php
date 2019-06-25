@extends('layouts.app')
@section('content')
<!-- Services Section -->

   
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
                    <h4>Grooming (SPA, Peluquería)</h4></br></br>
                        <div class="box-icon">
                            <img src="img/7op.png" width="150px" alt="">
                        </div>
                    </div>
                </div>
                </center>

                </div>
      <div class="col" width="50px" >
      <center>
                    <div class="box">
                    </br></br>
                    <h5><p align="justify">Además de que tu mascota se ejercite, Caniscatus ofrece un tratamiento para que tu perro o gato esté lo más tranquilo y limpio posible, recibiendo en el SPA un masaje y baño relajante y reconfortante. Así mismo ofrecemos sesiones de baño y técnicas peluquería, corte de uñas, lavado de dientes entre otras actividades que harán que tu mascota llegue a casa con su pelo brillante y una actitud relajada.
              </br></br></h5>
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
  <div class="row row mb-3">
    <div class="col-md-4">
      <a class="portfolio-box" href="img/g2.png">
        <img class="img-fluid" id="timg" src="img/g2.png" alt="">
      </a>
    </div>

    <div class="col-md-4">
      <a class="portfolio-box" href="img/grooming y spa 2.png">
        <img class="img-fluid" id="timg" src="img/grooming y spa 2.png" alt="">
      </a>
    </div>



    <div class="col-md-4">
      <a class="portfolio-box" href="img/grooming y spa 3.png">
        <img class="img-fluid" id="timg" src="img/grooming y spa 3.png" alt="">
      </a>
    </div>

    
  </div>
</div>
</div>
</section>

@endsection