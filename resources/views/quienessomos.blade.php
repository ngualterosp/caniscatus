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
            <img src="img/bannerquienes.jpg" alt="1" class="d-block w-100" >
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
<br>
 
 <div class="container">
			<div class="row align-items-center">
				<div class="col">

				<div>

        <div class="section-title" >
						<h1>¿Quiénes Somos?</h1>
          </div>
          <hr class="divider my-4">
					<div class="mb-50 wow fadeIn" data-wow-duration=".8s">
						<h4 align="justify">
            CANISCATUS S.A.S. Es una empresa creada con el objetivo principal de brindar un servicio de calidad y calidez para su mascota, teniendo en cuenta las características y necesidades de la misma.
            Así mismo, las instalaciones dispuestas para ello, están adaptadas y acondicionadas pensando en el bienestar animal.             De igual forma, CANISCATUS S.A.S cuenta con talento humano profesional y técnico para el desarrollo de las actividades, durante la estadía de su mascota.
            Contamos con el personal profesional calificado y capacitado para hacer una
experiencia agradable a su mascota; haciéndolo sentir como en casa.
</h4>
						
					</div>
					
				</div>
			</div>
		</div>

    <br>
    <br>

		<div class="container" id="estilo1">
    <div class="row">
          <div class="col-lg-5 mr-auto mb-5 align-self-center" id="estilo1">

          <div class="section-title" >
						<h1 id="estilo1">MISIÓN</h1>
          </div>
          <hr align="left" noshade="noshade" size="10" width="80%" />
					<div class="mb-50 wow fadeIn" data-wow-duration=".8s">
						<h4 align="justify">
            Es una empresa que provee servicios de Manejo y Cuidado animal, con la más alta calidad y calidez. Así mismo, incentivamos la corresponsabilidad
            y sensibilidad frente a la vida y cuidado de los animales de compañía dentro y fuera de casa.
</h4>
					</div>
          </div>

          <div class="col-lg-6">
            <div class="image-absolute-box">
             
              <img src="img/mision.jpg" alt="Image" class="img-fluid img-shadow">
            </div>
          </div>
        </div>
		</div>
<br>
<br>

<div class="container" id="estilo2">
    <div class="row">
    <div class="col-lg-6">
            <div class="image-absolute-box">
             
              <img src="img/vision.jpg" alt="Image" class="img-fluid img-shadow">
            </div>
          </div>
          <div class="col-lg-5 mr-auto mb-5 align-self-center" >

          <div class="section-title" >
						<h1 id="estilo2">VISIÓN</h1>
          </div>
          <hr align="left" noshade="noshade" size="10" width="80%" />

					<div class="mb-50 wow fadeIn" data-wow-duration=".8s" >
						<h4 align="justify" id="estilo2">
            Será la mejor empresa proveedora de servicios de manejo y cuidado de los animales de compañía, cumpliendo con los Estándares de Calidad y Bienestar Animal a nivel
            Distrital y Nacional. Siendo líderes en el gremio de las Guarderías Caninas y Hoteles Caninos y Felinos.
</h4>
						
					</div>
          </div>

          
        </div>
		</div>

    
	
  


@endsection