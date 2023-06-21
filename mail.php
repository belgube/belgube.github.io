<?php
ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
	$name = $_POST['con_name'];
	$email = $_POST['con_email'];
	$message = $_POST['con_message'];
	$subject = 'Belgube new message';
	$to = 'jimmygubeteka@yahoo.fr';
	$headers = "From:" . $email;
	if (isset($name) || isset($email) || isset($message)) {
		mail($to,$subject,$message, $headers);
        //echo "L'email a été envoyé.";
		header('Location: /');
	}else{
		echo $to.' ' .$name.' ' .$email. ' ' .$message;
	}
?>