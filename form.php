<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
<form action="thanks.php" method="post">
	<div>
		<label for="lastName">Nom :</label>
		<input type="text" id="lastName" name="user_lastName">
	</div>
	<div>
		<label for="firstName">Prénom :</label>
		<input type="text" id="firstName" name="user_firstName">
	</div>
	<div>
		<label for="email">Email :</label>
		<input type="email" id="email" name="user_email">
	</div>
	<div>
		<label for="phone">Téléphone :</label>
		<input type="tel" id="phone" name="user_phone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}"
			   placeholder="00-00-00-00-00">
	</div>
	<div>
		<label for="subject">Sujet :</label>
		<select id="subject" name="subject">
			<option>Problème Php</option>
			<option>Envie d'écrire</option>
			<option>Solution pour rien</option>
			<option>Pas envie de dire</option>
			<option>Exercice formulaire</option>
		</select>
	</div>
	<div>
		<label for="message">Message :</label>
		<textarea id="message" name="user_message"></textarea>
	</div>
	<div class="button">
		<button type="submit" name="submit">Envoyer votre message</button>
	</div>

</form>
</body>
</html>
