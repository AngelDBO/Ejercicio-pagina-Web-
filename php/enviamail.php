<?php

//RECIBO LAS VARIABLES DEL FORMULRIO//

$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$mensaje = $_POST['mensaje'];

//TE MUESTRO LAS VARIABLES//

echo "<h3>El mesaje has enviado es:</h3>";
echo "<br />";
echo "<p>Nombre: ";
echo $nombre;
echo "<br />";
echo "email: ";
echo $mail;
echo "<br />";
echo "mensaje: ";
echo $mensaje;
echo "</p>";

//ENVIO DE EMAIL//

$aquien = "angelbed95@hotmail.es";
$asunto = "Has recibido un correo del blog";
$mensajemail = $nombre." con el email ".$mail."te ha enviado en mail que dice ".$mensaje ;

if(mail($aquien, $asunto, $mensaje)){

	echo "tu email se ha enviado correctamente";
}else{
	echo "el envio del mail ha fallado";
}


?>
