@extends('layouts.app')
@section('content')



<link rel="stylesheet" href="css/estilos.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="subir/jquery.scrollUp.js"></script>
<script>
  $(function(){
  $.scrollUp({
    scrollImg: true
  });
});
</script>


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
            <div class="carousel-item active">
              <img src="img/banner1.png" alt="1" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="img/banner-2.jpg" alt="2" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="img/banner3.png" alt="3" class="d-block w-100">
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


<div class="container">
  <div class="row justify-content-center pb-5">
    <div class="col-md-12 heading-section text-center ftco-animate">
      <div class="section-title">
        <h1 aling="left">ALGUNOS DE NUESTROS AFILIADOS</h1>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md">
      <div class="media block-6 services text-center d-block">
        <img src="img/cliente1.png">
        <div class="media-body">
          <h3 class="heading mb-3">Venus</h3>
        </div>
      </div>
    </div>
    <div class="col-md ">
      <div class="media block-6 services text-center d-block">
        <img src="img/cliente2.png">
        <div class="media-body">
          <h3 class="heading mb-3">Shagui</h3>
        </div>
      </div>
    </div>
    <div class="col-md ">
      <div class="media block-6 services text-center d-block">
        <img src="img/cliente3.png">
        <div class="media-body">
          <h3 class="heading mb-3">Jacko</h3>
        </div>
      </div>
    </div>
    <div class="col-md ">
      <div class="media block-6 services text-center d-block">
        <img src="img/cliente4.png">
        <div class="media-body">
          <h3 class="heading mb-3">Daffi</h3>
        </div>
      </div>
    </div>

  </div>
  <img src="img/Frase celebre (2).png" width="100%" alt="">

</div>

<div class="container">
  <div class="row justify-content-center pb-5">
    <div class="col-md-12 heading-section text-center ftco-animate">
    </div>
  </div>
  <div class="row">

    <div class="col-6">
      <div class="media block-6 services text-center d-block">
        <img src="img/Sabias que (1).png" width="400px">
      </div>
    </div>

    <div class="col-6">
      <div class="media block-6 services text-center d-block">
        <img src="img/Dato curioso.png" width="700px">
      </div>




    </div>

  </div>





  <!-- Portfolio Section -->

  <div id="portfolio" class="colorclaro">

    <div class="container">
      <div class="section-title">
        <center>
          <h1>NUESTRAS INSTALACIONES</h1>
        </center>
      </div>
      <div class="container-fluid p-0">
        <div class="row row mb-3">
          <div class="col-md-4">
            <a class="portfolio-box" href="img/galeria7.png">
              <img class="img-fluid" id="timg" src="img/galeria7.png" alt="">
            </a>
          </div>

          <div class="col-md-4">
            <a class="portfolio-box" href="img/galeria3.png">
              <img class="img-fluid" id="timg" src="img/galeria3.png" alt="">
            </a>
          </div>



          <div class="col-md-4">
            <a class="portfolio-box" href="img/galeria1.png">
              <img class="img-fluid" id="timg" src="img/galeria1.png" alt="">
            </a>
          </div>
        </div>

        <div class="col-md-4">
          <a class="portfolio-box" href="img/instalaciones-min.jpg">
          </a>
        </div>
      </div>


    </div>
  </div>
</div>
<div>
  <div class="container">
    </br></br>
    <img src="img/Contacto-Home.png" width="100%">
  </div>

</div>



















@endsection