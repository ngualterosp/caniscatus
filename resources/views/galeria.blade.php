@extends('layouts.app')
@section('content')
 <!-- laurita kkkkkhhhhh-->


<style>
  #timg {
    height: 250px;
    width: 450px;
  }
</style>


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
            <img src="img/banner-galeria.jpg" alt="1" class="d-block w-100" >
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

<!-- Portfolio Section -->
<br>
<div class="container">
			<div class="row align-items-center">
				<div class="col">

				<div>

        <div class="section-title" >
						<h1>Galería CANISCATUS S.A.S.</h1>
          </div>
          <hr class="divider my-4">
					<div class="mb-50 wow fadeIn" data-wow-duration=".8s">
						<h4 align="justify">
            ¡Los animales son compañía, vida y alegría… disfrútalos, respétalos y protégelos!
                <br>Conoce más de Caniscatus:
            </h4>
						
					</div>
					
				</div>
			</div>
		</div>
<br>
<br>
<div id="portfolio">

<div class="container gallery-container">
    <div class="tz-gallery">
  
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/galeria.png">
                    <img src="img/galeria.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
             
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/galeria1.png">
                    <img src="img/galeria1.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
             
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/galeria2.png">
                    <img src="img/galeria2.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
        </div>
          
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/galeria3.png">
                    <img src="img/galeria3.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
             
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/galeria4.png">
                    <img src="img/galeria4.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
             
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/galeria5.png">
                    <img src="img/galeria5.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
</div>

            <div class="row mb-3">
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/galeria9.png">
                    <img src="img/galeria9.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/galeria10.png">
                    <img src="img/galeria10.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/galeria11.jpeg">
                    <img src="img/galeria11.jpeg" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
</div>

<div class="row mb-3">
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/galeria6.png">
                    <img src="img/galeria6.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/galeria7.png">
                    <img src="img/galeria7.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="img/galeria8.png">
                    <img src="img/galeria8.png" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
</div>
         
        </div>
  
    </div>
  
</div>
 
</div>

  @endsection