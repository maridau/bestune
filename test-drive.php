<?php
	ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
	$userName 		= $_POST['myName'];
	$userEmail	 	= $_POST['myEmail'];
	$userPhone 		= $_POST['myPhone'];

	$to 			= "comercioexterior@kaitazoff.com";
	$subject 		= "Test Drive BESTUNE";
	$body 			= "Contenido del mensaje:";

	$body .= "\r\n Nombre: " . $userName;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Celular: " . $userPhone;

    mail($to, $subject, $body);
    header('Location: index.html');
?>