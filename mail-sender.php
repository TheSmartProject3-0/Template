<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $header = 'From' . $mail . " \r\n";
    $header .= "X-Mailer: PHP" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";
    
    $mensaje = "Este mensaje fue enviado por: " . $nombre . " \r\n";
    $mensaje .= "Su e-mail es: " . $mail . " \r\n";
    $mensaje .= "Asunto: " . $asunto . " \r\n";
    $mensaje .= "Mensaje: " .$mensaje . " \r\n";

    $para = talgidisoluciones@gmail.com;
    
    mail($para, $asunto, utf8_decode($mensaje), $header);
    header("Location:index.html");
?>