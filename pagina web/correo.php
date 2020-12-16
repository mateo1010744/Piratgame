<?php
   $destinatario = 'mateogamerthiago2020@gmail.com' 
   // esto es al correo al que se enviara el mensaje
   $nombre = $_POST['nombre'];
   $email = $_POST['email'];
   $edad = $_POST['edad'];
   $mensaje = $_POST['mensaje'];

   $header = "Enviado correctamente"
   $mensajeCompleto = $mensaje . "/nAtentamente: " . nombre


mail($destinatario, $edad, $mensajeCompleto, $header);
echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script> setTimeout(/"location.href='index.html'/",1000)</script>";


<?