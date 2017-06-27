<!DOCTYPE html>
<html>
<head>

	<title>QCM</title>

	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/base-min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<meta charset="utf-8" />

</head>
<body>

	<form class="pure-form" action="note.php" method="POST">

			<h1> QCM </h1>

			<hr>

			<h2>Test tes connaissances !</h2>

			Réponds a toutes les questions (une seule bonne reponse) et recois ta note , bonne chance !

			<hr>

			<label for="prenom">Prénom</label>
			<input id="prenom" name="prenom" type="text" placeholder="prenom" required/>

			<br>

			<label for="nom">Nom</label>
			<input id="nom" name="nom" type="text" placeholder="nom" required/>

			<br>

			<label for="email">Email</label>
			<input id="email" name="email" type="email" placeholder="email"/>

			<hr>

			<h3>Quesque du html ?</h3>
			<input id="q1r1" type="radio" name="q1" value="Un language informatique" required/>
			<label for="q1r1" class="pure-radio">Un language informatique</label>

			<br>
			<input id="q1r2" type="radio" name="q1" value="Une marque de voiture" required/>
			<label for="q1r2" class="pure-radio">Une marque de voiture</label>

			<br>
			<input id="q1r3" type="radio" name="q1" value="Un parti politique" required/>
			<label for="q1r3" class="pure-radio">Un parti politique</label>

			<hr>

			<h3>Quesque du css ?</h3>
			<input id="q2r1" type="radio" name="q2" value="Un language informatique" required/>
			<label for="q2r1" class="pure-radio">Un language informatique</label>

			<br>

			<input id="q2r2" type="radio" name="q2" value="Une marque de voiture" required/>
			<label for="q2r2" class="pure-radio">Une marque de voiture</label>

			<br>

			<input id="q2r3" type="radio" name="q2" value="Un parti politique" required/>
			<label for="q2r3" class="pure-radio">Un parti politique</label>

			<hr>

			<h3>Quesque du php ?</h3>
			<input id="q3r1" type="radio" name="q3" value="Un language informatique" required/>
			<label for="q3r1" class="pure-radio">Un language informatique</label>

			<br>

			<input id="q3r2" type="radio" name="q3" value="Une marque de voiture" required/>
			<label for="q3r2" class="pure-radio">Une marque de voiture</label>

			<br>

			<input id="q3r3" type="radio" name="q3" value="Un parti politique" required/>
			<label for="q3r3" class="pure-radio">Un parti politique</label>

			<hr>

			<h3>Quesque du javascript ?</h3>
			<input id="q4r1" type="radio" name="q4" value="Un language informatique" required/>
			<label for="q4r1" class="pure-radio">Un language informatique</label>

			<br>

			<input id="q4r2" type="radio" name="q4" value="Une marque de voiture" required/>
			<label for="q4r2" class="pure-radio">Une marque de voiture</label>

			<br>

			<input id="q4r3" type="radio" name="q4" value="Un parti politique" required/>
			<label for="q4r3" class="pure-radio">Un parti politique</label>

			<hr>

			<h3>Quesque MYSQL ?</h3>
			<input id="q5r1" type="radio" name="q5" value="Une base de donnée" required/>
			<label for="q5r1" class="pure-radio">Une base de donnée</label>

			<br>

			<input id="q5r2" type="radio" name="q5" value="Une marque de voiture" required/>
			<label for="q5r2" class="pure-radio">Une marque de voiture</label>

			<br>

			<input id="q5r3" type="radio" name="q5" value="Un parti politique" required/>
			<label for="q5r3" class="pure-radio">Un parti politique</label>

			<hr>

			<button type="submit" class="pure-button pure-button-primary">Recois ta note !</button>

			<hr>

			<h1> Bonne étude </h1>

	</form>

</body>
</html>
