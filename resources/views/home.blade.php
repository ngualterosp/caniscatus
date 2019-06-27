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

<section class="ftco-section ftco-services-2" id="services-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          <div class="section-title" >
						<h1 aling="left">ALGUNOS DE NUESTROS AFILIADOS</h1>
          </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
                <img src="img/cliente1.png">
                <div class="media-body">
                <h3 class="heading mb-3">Cliente 1</h3>
              </div>
            </div>
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
            <img src="img/cliente2.png">
              <div class="media-body">
                <h3 class="heading mb-3">Cliente 2</h3>
              </div>
            </div>
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
            <img src="img/cliente3.png">
              <div class="media-body">
                <h3 class="heading mb-3">Cliente 3</h3>
              </div>
            </div>
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
            <img src="img/cliente4.png">
              <div class="media-body">
                <h3 class="heading mb-3">Cliente 4</h3>
              </div>
            </div>
          </div>

        </div>
        <img src="img/Frase celebre (2).png" width="100%" alt="">


        <section class="ftco-section ftco-services-2" id="services-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            </div>
        </div>
        <div class="row">

          <div class="col-2-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
            <img src="img/Sabias que (1).png" width="500px">
            </div>
          </div>
          <div class="row-2">
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
            <img src="img/Dato curioso (1).png" width="580px" >
            </div>
             </div>

             <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
            <img src="img/Dato curioso (1).png" width="580px" >
            </div>
             </div>
          </div>


        </div>



        <div id="color55" >
      <div class="container" > </br></br>

</section>
     
     

<div class="container" id="estilo3">
 <div class="section-title" >
						<center><h1>NUESTRAS INSTALACIONES</h1></center>
          </div>
<!-- Portfolio Section -->
<br>
<center>
  <hr class="divider my-4">
</center>
<section>
<div id="portfolio">


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
        </div>
      </div>
  </div>
  </div>
  </div>
  </section>
  <div class="container"> </br></br>
          <img src="img/Contacto-Home.png" width="100%">

  </div>

















@endsection
