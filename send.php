<?php
	ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
	$userName 		= $_POST['myName'];
	$userEmail	 	= $_POST['myEmail'];
	$userMessage 		= $_POST['myMessage'];

	$to 			= "marina.dau@gmail.com";
	$subject 		= "Contacto BESTUNE";
	$body 			= "Contenido del mensaje:";

	$body .= "\r\n Nombre: " . $userName;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Mensaje: " . $userMessage;

    mail($to, $subject, $body);
    header('Location: test-drive.html');
?>