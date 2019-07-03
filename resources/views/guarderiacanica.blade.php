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
            <div class="carousel-item active">
              <img src="img/ns.jpg" alt="1" class="d-block w-100">
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

<style>
  .box {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 65%;
  }
</style>

<!-- Services Section -->

  <div class="container" align="center">

    <div class="row">
      <div class="col" max-width: 50%;>
        <center>
          <div class="box">
            <h4>Guardería Canina</h4></br></br>
            <div class="box-icon">
              <img src="img/8op.png" width="150px" alt=""> </br> </br>
            </div>
            <h5>
              <p align="justify">Caniscatus en el servicio de guardería ofrece una cálida acogida para tu mascota, con
                espacios etológicamente adecuados para el desarrollo de actividades de socialización y físicas, en
                compañía de sus congéneres y bajo supervisión. En este servicio se incluye, algunos ejercicios de
                obediencia de nivel básico, teniendo en cuenta la paciencia, la constancia y el uso de refuerzos
                positivos. Lo anterior, con el fin de potenciar un mejor manejo de tu mascota. Incluye servicio de
                transporte puerta a puerta.

          </div>
      </div>


      </center>


    </div>



    <div class="container section" id="section-team" aling="center">

      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7 mb-5">
          <h2 class="heading" data-aos="fade-up">Servicios de la guardería</h2>
        </div>
      </div>

        
      <div class="row">

        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="block-2">
            <div class="flipper">
              <div class="front" style="background-image: url(img/2op.png);">
                <div class="box">

                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p align="justify">La hidroterapia para los animales de compañía se está utilizando como tratamiento
                    para animales con dolencias osteoarticulares, problemas de obesidad, enfermedades musculares, entre
                    otras, por tanto, este servicio se prestará próximamente para los animales de compañía, que lo
                    requieran según prescripción medico veterinaria. Se programará con cita previa.
                    </br>
                  </p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="img/2op.png" alt="">
                  </div>
                  <div class="name align-self-center">Hidroterapia <span class="position"></span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>



        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="block-2">
            <!-- .hover -->
            <div class="flipper">
              <div class="front" style="background-image: url(img/4op.png);">
                <div class="box">

                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p align="justify">Próximamente tendremos este servicio.</br></br>
                    Estará incluido en los costos del servicio de Guardería y Hotel Canino.</br></br>
                    Se programará horario de práctica libre.</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="img/4op.png" alt="">
                  </div>
                  <div class="name align-self-center">Piscina <span class="position"></span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>

      </div>


      <div class="row">

        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="block-2">
            <div class="flipper">
              <div class="front" style="background-image: url(img/1op.png);">
                <div class="box">
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <h6>
                    <p align="justify">Caniscatus S.A.S., te brinda el servicio de adiestramiento básico enmarcado en
                      los siguientes comandos:</br></br>
                      <img src="img/dog-paw.png" width="15px">Sentarse</br></br>
                      <img src="img/dog-paw.png" width="15px">Acostarse</br></br>
                      <img src="img/dog-paw.png" width="15px">Dar la mano derecha</br></br>
                      <img src="img/dog-paw.png" width="15px">Dar la mano izquierda</br></br>
                      <img src="img/dog-paw.png" width="15px">Atender al llamado</br></br>
                      <img src="img/dog-paw.png" width="15px">Permanencia sentado</br></br>
                      <img src="img/dog-paw.png" width="15px">Permanencia acostado</br></br>
                      </h5>
                    </p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="img/1op.png" alt="">
                  </div>
                  <div class="name align-self-center">Adiestramiento <span class="position"></span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>


        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="block-2">
            <div class="flipper">
              <div class="front" style="background-image: url(img/9op.png); widyth">
                <div class="box">
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p align="justify">
                    <p align="justify">Ofrecemos el servicio de transporte puerta a puerta, en un cómodo vehículo que
                      cuenta con cubículos individuales y tamaño acorde a la raza. Posee ventilación controlada para el
                      transporte de los animales de compañía.</br></br>
                      Este servicio se presta en el horario de las 5:00 a 7:00 a.m. y de 4:00 a 7:00 p.m.</br></br>
                    </p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="img/9op.png" alt="">
                  </div>
                  <div class="name align-self-center">Servicio de transporte <span class="position"></span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>

      </div>




    </div>
  



<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="2" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="3" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="4" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="5" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="6" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="7" class="active"></li>

  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="img/guarderia.png" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/guarderia1.png" alt="Second slide">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/guarderia2.png" alt="Third slide">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>

    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/adiestramiento 1.1.png" alt="Fourth slide">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>

    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/adiestramiento 2.1.png" alt="Fifth slide">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>

    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/transporte1.1.png" alt="Sixth slide">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>

    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/HIDROTERAPIA.jpg" alt="Seventh slide">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>

    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/PISCINA.jpg" alt="Eighth slide">
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



</section>

@endsection