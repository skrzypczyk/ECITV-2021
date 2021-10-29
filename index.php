<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Ceci est un titre</title>
	<meta name="description" content="ceci est la description de ma page">
</head>
<body>
	<h1>
		Nous sommes le <?php echo date("d/m/Y");?>
		
	</h1>
 	<p>

 		<?php


 		/*
 			Mon commentaire
 		*/
 		//commentaire sur une ligne

 		/*
			Syntaxe d'une variable
			-> Commence tj pas un $
			-> sans espace
			-> en anglais
			-> cohérent
			-> camel case $itSMyNewFirstname;

 		*/
		/*
			5 types :
			-> integer -> entier
			-> string -> chaine de caractères
			-> boolean -> true ou false
			-> float -> chiffre à virgule
			-> Null -> null
		*/

		$myFirstname = "Yves";
		$myAge = 18;
		$adult = true;
		$size = 1.94;
		$cgu;


		/*
			Instruction : Ordre -> serveur php
		*/

		echo "Bonjour ";
		echo $myFirstname;

		/*
			Concaténation : addition de chaînes
		*/
		echo "Bonjour " . $myFirstname . ", vous avez ".$myAge." ans";

		// Symboles : + - * / %

		echo 4+2; //6


		//Afficher "Dans 1 an Yves aura 19 ans";

		echo "Dans 1 an ".$myFirstname." aura ".($myAge+1)." ans";


 		?>



 		Lorem &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>ipsum</b> <strong>dolor</strong> <i>sit</i> amet, <u>consectetur</u> <s>adipisicing</s> elit, sed do eiusmod
 		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 		consequat.<br> Duis aute irure dolor in reprehenderit in voluptate velit esse
 		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
 	</p>
</body>
</html>