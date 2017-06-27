<?php

// je mets dans des variables les reponses de l'utilisateur
$q1 = $_POST['q1'];

$q2 = $_POST['q2'];

$q3 = $_POST['q3'];

$q4 = $_POST['q4'];

$q5 = $_POST['q5'];

// je mets dans une variable le score de depart 0
$score = 0;

// si la reponse de la question 1 est egale a la bonne réponse on rajoute 1
if($q1 == "Un language informatique"){

	$score ++;

}

if($q2 == "Un language informatique"){

	$score ++;

}

if($q3 == "Un language informatique"){

	$score ++;

}

if($q4 == "Un language informatique"){

	$score ++;

}

if($q5 == "Une base de donnée"){

	$score ++;

}

// je sanitize et valide l'email
$email = $_POST['email'];

$emailIsSani = sanitize($email);

$emailIsValid = filter_var($emailIsSani, FILTER_VALIDATE_EMAIL);

function sanitize($email){

	return strip_tags($email);

}

// si l'email est valide alors on retourne le resultat a l'utilisateur par email
if($emailIsValid == true){

	mail($email, 'Résultat du QCM', "Ta note est de " . $score . "/5");

}

?>

<!DOCTYPE html>

<html>

<head>

	<title>QCM note</title>

	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/base-min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<meta charset="utf-8" />

</head>

<body>

	<form class="pure-form" action="note.php" method="POST">

		<h1> QCM </h1>

		<hr>

		<h2>Voici le résultat !</h2>

		Tu a répondu aux 5 questions, félicitation, voici tes réponses et ta note sur 5, bonne continuation !

		<hr>

		<h3>Voici tes réponses</h3>

		Ton prénom :

		<?php 

		echo "</br>";

		//sanitization du prenom
		$prenomsani = filter_var($_POST["prenom"], FILTER_SANITIZE_STRING);

		echo($prenomsani);

		?>

		<br>

		Ton nom :

		<?php 

		echo "</br>";

		//sanitization du nom
		$nomsani = filter_var($_POST["nom"], FILTER_SANITIZE_STRING);

		echo($nomsani);

		?>

		<br>

		Ton Email :

		<?php 

		echo "</br>";

		echo $_POST['email'];

		?>

		<br><br>

		Qestion 1 :

		<br><br>

		Ta réponse :

		<?php 

		echo "</br>";

		echo $_POST['q1'];

		?>

		<br>

		La bonne réponse est :

		<br>

		Un language informatique

		<br><br>

		Qestion 2 :

		<br><br>

		Ta réponse :

		<?php 

		echo "</br>";

		echo $_POST['q2'];

		?>

		<br>

		La bonne réponse est :

		<br>

		Un language informatique

		<br><br>

		Qestion 3 :

		<br><br>

		Ta réponse :

		<?php 

		echo "</br>";

		echo $_POST['q3'];

		?>

		<br>

		La bonne réponse est :

		<br>

		Un language informatique

		<br><br>

		Qestion 4 :

		<br><br>

		Ta réponse :

		<?php 

		echo "</br>";

		echo $_POST['q4'];

		?>

		<br>

		La bonne réponse est :

		<br>

		Un language informatique

		<br><br>

		Qestion 5 :

		<br><br>

		Ta réponse :

		<?php 

		echo "</br>";

		echo $_POST['q5'];

		?>

		<br>

		La bonne réponse est :

		<br>

		Une base de donnée

		<br><br>

		<?php

		echo "Ta note est de " . $score . "/5";

		?>

		<hr>

		<h1> Bonne étude </h1>

	</form>

</body>
</html>