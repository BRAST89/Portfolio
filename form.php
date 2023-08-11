<?php

$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['message'];

$mensajel = "Este mensaje fue enviado por : " . $_POST['name'] . "\r\n";
$mensajel .= "Email: " . $_POST['email'] . "\r\n";
$mensajel .= "Mensaje: " . $_POST['message'] . "\r\n";
$mensajel .= "Enviado el: " . date('d,m,Y', time());

$para = "brastduranvasquez@gmail.com";
$asunto = "Mensaje del portafolio";

mail($para, $asunto, $mensajel, $header);

header('location:https://brast89.github.io/Portfolio/');



?>