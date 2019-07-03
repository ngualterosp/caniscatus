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
              <img src="img/fotos baner (1) (1).png" alt="2" class="d-block w-100">
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
        <h1 aling="left">ALGUNOS DE NUESTROS CLIENTES</h1>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services text-center d-block">
        <img src="img/cliente1.png">
        <div class="media-body">
          <h3 class="heading mb-3">Venus</h3>
        </div>
      </div>
    </div>
    <div class="col-md d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services text-center d-block">
        <img src="img/cliente2.png">
        <div class="media-body">
          <h3 class="heading mb-3">Shagui</h3>
        </div>
      </div>
    </div>
    <div class="col-md d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services text-center d-block">
        <img src="img/cliente3.png">
        <div class="media-body">
          <h3 class="heading mb-3">Jacko</h3>
        </div>
      </div>
    </div>
    <div class="col-md d-flex align-self-stretch ftco-animate">
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

    <div class="col-2-md d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services text-center d-block">
        <img src="img/Sabias que (1).png" width="400px">
      </div>
    </div>
   
      <div class="col-md d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services text-center d-block">
          <img src="img/Dato curioso (4).png" width="700px">
        </div>
    

     

  </div>

</div>


<div class="colorclaro">

  <div class="container">
    <div class="section-title">
      <center>
        <h1>NUESTRAS INSTALACIONES</h1>
      </center>
    </div>
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="2" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="3" class="active"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="img/galeria7.png" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/galeria3.png" alt="Second slide">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/galeria1.png" alt="Third slide">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>

    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/instalaciones-min.jpg" alt="Fourth slide">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>

  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

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