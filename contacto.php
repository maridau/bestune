<?php
	ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
	$userName 		= $_POST['myNameContact'];
	$userEmail	 	= $_POST['myEmailContact'];
	$userSubject 		= $_POST['mySubject'];
	$userMessage 		= $_POST['myMessage'];

	$to 			= "comercioexterior@kaitazoff.com";
	$subject 		= "Contacto BESTUNE";
	$body 			= "Contenido del mensaje:";

	$body .= "\r\n Nombre: " . $userName;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Asunto: " . $userSubject;
	$body .= "\r\n Mensaje: " . $userMessage;

    mail($to, $subject, $body);
    header('Location: index.html');
?>