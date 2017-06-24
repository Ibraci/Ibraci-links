<?php 
	require('config/database.php');

	if (isset($_POST['envoyer'])) {
		if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {

			$name = htmlspecialchars($_POST['name']);
			$email = htmlspecialchars($_POST['email']);
			$subject = htmlspecialchars($_POST['subject']);
			$message = htmlspecialchars($_POST['message']);

			$to      = 'hello@ibraci.ml';
			$objet   = 'Ibraci - Links | ' . $subject;
			$contenu = $message;
			$headers = 'From: ' . $name . "\r\n" .
			    'Reply-To: ' . $email;

			mail($to, $objet, $contenu, $headers);
		}
	}

 ?>

<?php

	require('views/contact.view.php');