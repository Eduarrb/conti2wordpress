<?php
//Importamos las variables del formulario de contacto
@$nombre = addslashes($_POST['name']);
@$apellido = addslashes($_POST['apellido']);
@$email = addslashes($_POST['email']);
@$ciudad = addslashes($_POST['city']);
@$mobil = addslashes($_POST['mobile']);
@$web = addslashes($_POST['web']);

@$mensaje = addslashes($_POST['message']);

//mensaje de contacto
$cabeceras = "From: $email\n" //La persona que envia el correo
 . "Reply-To: $email\n";
$asunto = "Solicita información UNIVERSIDAD"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "dj.shadowjeab@gmail.com"; //cambiar por tu email
$contenido = "$nombre ha enviado un mensaje\n\n"
. "Nombre y Apellido: $nombre $apellido\n"
. "Email: $email\n"
. "Telefono: $mobil\n"

. "Mensaje: $mensaje\n"
. "\n";
//Enviamos el mensaje y comprobamos el resultado
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) 
	{
	//Si el mensaje se envía muestra una confirmación
	echo "<script languaje='javascript'>
            alert('Mensaje enviado, gracias.');
            window.location.href = 'http://pruebaconti.eduardoarroyob.com/';
            </script>";
}
else{
//Si el mensaje no se envía muestra el mensaje de error
die("Error: Su información no pudo ser enviada, intente más tarde");
}
?>