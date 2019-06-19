<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Envio de correo</title>
</head>
<body>
    <p>Hola! te llego un nuevo mensaje</p>
    <p>Estos son los datos del usuario que ha realizado a enviado el mensaje:</p>
    <ul>
        <li>Nombre: {{ $nombre}}</li>
        <li>email: {{ $email}}</li>

        <li>Mensaje: {{ $mensaje}}</li>
    </ul>
   
</body>
</html>