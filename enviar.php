<? php

$destino = "somisixteam@gmail.com"
$nombre = $_POST["nombre"];
$telefono = $_POST["Teléfono"];
$correo = $_POST["Correo"];
$t_negocio = $_POST["Tipo de Negocio"];
$t_website = $_POST["Tipo de web"];
$mensaje = $_POST["Mensaje"];


$contenido = "Nombre: " . $nombre . "\nTeléfono: " . $telefono . "\Correo" . $correo . "\Tipo de Negocio" . $t_negocio . "\Tipo de web" . $t_website . "\Mensaje" . $mensaje;

mail($destino, "Contacto", $contenido);

header("location:/gracias/index.html")
?>