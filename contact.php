<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'agcreativeus@gmail.com';
$titulo = 'ASUNTO DEL MENSAJE';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://agcreative.us';
</script>";
} else {
echo 'Falló el envio';
}
}
?>
