<?php

$destinatario = 'veronicaviernes13@gmail.com';
$nombre = $_POST['nombre'];
$producto = $_POST['producto'];
$mensaje = $_POST['mensaje'];
$email = $_POST['email'];

$header = "Enviado";
$mensajeCompleto =$mensaje . "/nAtentamente: " . $nombre;

mail($destinatario, $producto, $mensajeCompleto, $header);
echo"<script>alert('enviado')</scrip>";
echo"<script>sentTimeout(\"location.href='index.html'\",1000)</scrip>";

?>