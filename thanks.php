<?php
// Vérifier si le formulaire est soumis
if ( isset( $_POST['submit'] ) ) {
	/* récupérer les données du formulaire en utilisant
       la valeur des attributs name comme clé
      */
	$firstName = $_POST['user_firstName'];
	$lastName = $_POST['user_lastName'];
	$email = $_POST['user_email'];
	$phone = $_POST['user_phone'];
	$subject = $_POST['subject'];
	$message = $_POST['user_message'];
	// afficher le résultat

	echo 'Merci ' . $firstName . ' ' .  $lastName . ' de nous avoir contacté à propos de '  . "$subject" . '<br>';
	echo 'Un de nos conseillers vous contactera soit à l’adresse ' .  $email . ' ou par téléphone au ' . $phone . ' dans les plus brefs
	délais pour traiter votre demande : ';
	echo $message;
}
?>