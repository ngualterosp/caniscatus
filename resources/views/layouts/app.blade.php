<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CANISCATUS S.A.S.</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic'
    rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->


  <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">


  <link href="css/creative.css" rel="stylesheet">
  <link href="css/fonts.css" rel="stylesheet">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/animate.css" />

  <!-- NUEVOS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="css/bootstrapp.min.css" />

  <!-- Owl Carousel -->
  {{-- <link type="text/css" rel="stylesheet" href="css/owl.carousell.css" /> --}}
  <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

  <!-- Magnific Popup -->
  <link type="text/css" rel="stylesheet" href="css/magnific-popupp.css" />

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="css/font-awesomee.min.css">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="css/stylee.css" />


  <!--Servicios-->
  <!-- Main-Stylesheets -->
  <link rel="stylesheet" href="css/stylel.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }

  @font-face {
    font-family: "Futura";
    src: url("ttf/futuram.ttf");
  }

  a,p,h1,h2,h3,h4,h5 {
  font-family: "Futura";
  }
  #footer2{

    background-color: rgb(218, 184, 57,0.55) !important;
    

  }
  </style>

  <link rel="icon" href="img/logo_3.png">

</head>


<!-- Page Preloder -->
<div id="preloder">
  <div class="loader"></div>
</div>

<body id="page-top">



  <div class="social2">
    <ul>
      <li><a href="https://api.whatsapp.com/send?phone=573508449157" target="_blank"><img src="img/whatsapp.png"
            width="35px"></a></li>
      <li><a href="https://www.facebook.com/caniscatus/" target="_blank"><img src="img/facebook.png" width="35px"></a>
      </li>
      <li><a href="https://www.instagram.com/caniscatus_bogota/?hl=es-la" target="_blank"><img src="img/instagram.png"
            width="35px"></a></li>
    </ul>

  </div>

    <div class="container text-center" width="100px">
    <a href="{{route('home')}}"><img src="img/logo_3.png"
          style="width: 130px; height: auto;" align="left"></a><h1>CANISCATUS</h1>
      <h4 class="navbar-brand js-scroll-trigger" >Somos una empresa que brinda calidad y calidez a tu mascota</h4>
    </div>

  
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light  py-3" id="mainNav">
    <div class="container">
     
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{route('home')}}" id="hoverp">
              Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{route('quienessomos')}}" id="hoverp">
              Quienes Somos</a>
          </li>
          <li class="nav-item dropdown">
            <a  id="hoverp" class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{route('servicios')}}">
              Nuestros Servicios
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              
              <div class="dropdown-divider"></div>
              <a   class="dropdown-item" href="{{route('guarderiacanica')}}">Guardería Canina</a>
              <div class="dropdown-divider"></div>
              <a   class="dropdown-item" href="{{route('hotelcanino')}}">Hotel Canino</a>
              <div class="dropdown-divider"></div>
              <a   class="dropdown-item" href="{{route('hotelfelino')}}">Hotel Felino</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('grooming')}}">Grooming (SPA, Peluqueria)</a>
              <div class="dropdown-divider"></div>
              <a   class="dropdown-item" href="{{route('etologia')}}">Etología</a>
            </div>
          </li>
          <li class="nav-item">
            <a id="hoverp" class="nav-link js-scroll-trigger" href="{{route('galeria')}}">
              Galería</a>
          </li>
          <li class="nav-item">
            <a  id="hoverp" class="nav-link js-scroll-trigger" href="{{route('contactenos')}}">
              Contactenos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>




  





  <!-- About Section -->


  <!-- Services Section -->

  @yield('content')
  <!-- Portfolio Section -->


  <!-- Call to Action Section -->
  <div class="container">
  <a class="gotopbtn" href="#"> <img src="img/subir.png"> </a>
</div>

  <!-- Contact Section -->


  <!-- Footer -->
  <footer class="bg-light py-5" id="footer2">

    <div class="container">
      <div class="small text-center text-muted"><a href="https://api.whatsapp.com/send?phone=573508449157"><img
            src="img/whatsapp.png" width="35px" />
        </a><a href="https://www.facebook.com/caniscatus/"><img src="img/facebook.png" width="35px" /></a>
        <a href="https://www.instagram.com/caniscatus_bogota/?hl=es-la"><img src="img/instagram.png" width="35px" /></a><br>
        <h5> Caniscatus S.A.S.</h5><br>
        <h6> Somos una empresa que brinda calidad y calidez a tu mascota</h6>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
 
  <script src="{{ asset('js/app.js') }}"></script>
  
  <script src="{{ asset('js/jquery.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
  
  <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>


  <script src="js/creative.js"></script>
  <script>
      $(window).on('load', function() {
      /*------------------
        Preloder
      --------------------*/
      $(".loader").fadeOut(); 
      $("#preloder").delay(400).fadeOut("slow");
    
    });


    $(window).scroll(function() {
        if ($("#mainNav").offset().top > 340 ) {
          console.log("entro");
            $("#mainNav").addClass("fixed-top");
        }

        if($("#mainNav").offset().top <300){ 
          $("#mainNav").removeClass("fixed-top");
        }
      });
    </script>

  {!! toastr()->render() !!}



</body>
 <!-- laurita kkkkkhhhhh-->
</html>