@extends('layouts.app')
@section('content')


<link rel="stylesheet" href="">

<!-- Contact Section -->
<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="mt-0">Contacto</h2>
                <center>
                    <hr class="divider my-4">
                </center>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center">
                <img src="img/whatsapp.png" width="30px" />
                <div>(+57) 3508449157</div>
            </div>
            <div class="col-lg-4 mr-auto text-center">

                <img src="img/email.png" width="30px" />
                <!-- Make sure to change the email address in anchor text AND the link below! -->
                <a class="d-block" href="mailto:info@caniscatus.com">info@caniscatus.com</a>
            </div>
        </div>
    </div>

    <br>
    <br>





    <!-- Contact Section -->

    <div class="container gray-bg section-padding">

        <div class="row">
            <div class="col-lg-7 mx-auto">
                <h2 class="text-center text-uppercase text-secondary mb-0">contactenos</h2>
                <center>
                    <hr class="divider my-4">
                </center>
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form action={{route('contact')}} method="POST">
                    @csrf

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label><h3>Nombre:</h3></label>
                            <input class="form-control" id="name" name="nombre" type="" placeholder="Coloce Su Nombre "
                                required="required" data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label><h3>Correo Electronico:</h3></label>
                            <input class="form-control" id="email" name="email" type="email"
                                placeholder="Coloque su email" required="required"
                                data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label><h3>Mensaje:</h3></label>
                            <textarea class="form-control" id="message" name="mensaje" rows="5" placeholder="Mensaje"
                                required="required"
                                data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <center>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Enviar
                                Formulario</button>
                        </div>
                    </center>
                </form>
            </div>


            




        </div>
    </div>


<div class="container">
                <h2 class="text-center text-uppercase text-secondary mb-0">Mapa</h2>
                <center>
                    <hr class="divider my-4">
                </center>
                <div id="map" style="height: 500px;
            width: 100%;">

                </div>
            </div>

<script>
    function iniciarMap(){
    var coord = {lat:4.7802476 ,lng: -74.0607775};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 15,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap">
</script>


@endsection