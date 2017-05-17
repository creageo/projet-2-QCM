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
		echo $_POST['prenom'];

		?>

		<br>

		Ton nom :

		<?php 

		echo "</br>";
		echo $_POST['nom'];

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
		echo $_POST['optionsRadios'];

		?>

		<br>

		La bonne réponse est :

		<br>

		Un language indormatique

		<br><br>

		Qestion 2 :

		<br><br>

		Ta réponse :

		<?php 

		echo "</br>";
		echo $_POST['optionsRadios2'];

		?>

		<br>

		La bonne réponse est :

		<br>

		Un language indormatique

		<br><br>

		Qestion 3 :

		<br><br>

		Ta réponse :

		<?php 

		echo "</br>";
		echo $_POST['optionsRadios3'];

		?>

		<br>

		La bonne réponse est :

		<br>

		Un language indormatique

		<br><br>

		Qestion 4 :

		<br><br>

		Ta réponse :

		<?php 

		echo "</br>";
		echo $_POST['optionsRadios4'];

		?>

		<br>

		La bonne réponse est :

		<br>

		Un language indormatique

		<br><br>

		Qestion 5 :

		<br><br>

		Ta réponse :

		<?php 

		echo "</br>";
		echo $_POST['optionsRadios5'];

		?>

		<br>

		La bonne réponse est :

		<br>

		Une base de donnée

		<br><br>

		<?php

		$optionsRadios = $_POST['optionsRadios'];

		$optionsRadios2 = $_POST['optionsRadios2'];

		$optionsRadios3 = $_POST['optionsRadios3'];

		$optionsRadios4 = $_POST['optionsRadios4'];

		$optionsRadios5 = $_POST['optionsRadios5'];

		$score = 0;

		if($optionsRadios == "Un language informatique"){
			$score ++;
		}
		if($optionsRadios2 == "Un language informatique"){
			$score ++;
		}
		if($optionsRadios3 == "Un language informatique"){
			$score ++;
		}
		if($optionsRadios4 == "Un language informatique"){
			$score ++;
		}
		if($optionsRadios5 == "Une base de donnée"){
			$score ++;
		}

		echo "Ta note est de " . $score . "/5";

		$email = $_POST['email'];

		if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			mail($email, 'Résultat du QCM', "Ta note est de " . $score . "/5");
		}


		?>

		<hr>

		<h1> Bonne étude </h1>

	</form>

</body>
</html>