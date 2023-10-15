<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "fredygreen81@gmail.com"; // Cambia esto con tu dirección de correo electrónico
    $asunto = "Nuevo mensaje de contacto de $nombre";

    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Correo electrónico: $email\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje";
    

    // Enviar el correo electrónico
    mail($destinatario, $asunto, $cuerpoMensaje);

    // Redireccionar o mostrar un mensaje de éxito
    header("Location: gracias.html");
    exit();
}
?>
