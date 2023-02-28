<?php
$pagina = "../gracias.html";
Header("Location: $pagina");
?>
<?php
$para = 'juliopedidos@gmail.com';
$asunto = 'Mensaje desde landing page de Samsung';
$nombre = $_POST['nombre'];
$apell = $_POST['apellidos'];
$mail = $_POST['correo'];
$contenido = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$contenido .= "Cuyos apellidos son: " . $apell . " \r\n";
$contenido .= "Su e-mail es: " . $mail . " \r\n";
mail($para, $asunto, $contenido);
?>
