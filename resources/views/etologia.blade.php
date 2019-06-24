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
                    <h4>Etología</h4></br></br>
                    <div class="box-icon">
                            <img src="img/5op.png" width="150px" alt="">
                        </div>
                    </div>
                </div>

                 </center>


                </div>
      <div class="col" width="50px" >
      <center>
                    <div class="box"> 
                    </br></br></br>
                    <h5><p align="justify">
                    Si crees que tu mascota no se comporta de la mejor manera y observas que tiene conductas extrañas; Caniscatus ofrece un profesional especialista, quien evaluara a tu mascota a través de un examen comportamental, emitiendo un diagnóstico y posteriormente tratamiento requerido según la conducta presentada.
</h5></br></br>
                        </p>
                    </div>
                </div>
                </center>

             
  
   
				

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
      <a class="portfolio-box" href="img/caniscatus (30).png">
        <img class="img-fluid" id="timg" src="img/caniscatus (30).png" alt="">
      </a>
    </div>

    <div class="col-lg-4 col-sm-6">
      <a class="portfolio-box" href="img/eto2.png">
        <img class="img-fluid" id="timg" src="img/eto2.png" alt="">
      </a>
    </div>



    <div class="col-lg-4 col-sm-6">
      <a class="portfolio-box" href="img/caniscatus (29).png">
        <img class="img-fluid" id="timg" src="img/caniscatus (29).png" alt="">
      </a>
    </div>

    

   
  </div>
</div>
</section>

@endsection