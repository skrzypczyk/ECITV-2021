<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Ceci est un titre</title>
	<meta name="description" content="ceci est la description de ma page">
</head>
<body>
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

		//echo "Bonjour ";
		//echo $myFirstname;

		/*
			Concaténation : addition de chaînes
		*/
		//echo "Bonjour " . $myFirstname . ", vous avez ".$myAge." ans";

		// Symboles : + - * / %

		//echo 4+2; //6


		//Afficher "Dans 1 an Yves aura 19 ans";

		//echo "Dans 1 an ".$myFirstname." aura ".($myAge+1)." ans";


		//Incrémentation et décrémentation

		/*
			$cpt = 1;
			echo $cpt; //1
			$cpt = $cpt+1;
			echo $cpt; //2
			$cpt += 1; //j'augmente de 1 la valeur de $cpt
			echo $cpt; //3
			echo $cpt+1; //4
			echo $cpt; //3
			echo $cpt++; //3 (il incrémente la valeur apres l'affichage)
			echo $cpt; //4
			echo ++$cpt; //5



			$cpt = 2;
			echo $cpt+1; //3
			echo $cpt; //2
			echo $cpt=$cpt+1; //3
			echo ++$cpt; //4
			echo $cpt--; //4
			echo $cpt; //3
		*/


		/*
			Les conditions

			si l'age est sup à 18 afficher majeur
			sinon si l'age est = à 18 afficher tout juste majeur
			sinon afficher mineur

		*/
			/*
			$myAge = 170;

			//if(condition)
			if($myAge>100){
				echo "Vieux";
			}
			elseif($myAge > 18){
				echo "Majeur";
			}
			elseif($myAge == 18){
				echo "Tout juste majeur";
			}
			else{
				echo "Mineur";
			}



			if($myAge>18  &&  $myAge<=100){
				echo "Majeur";
			}
			elseif($myAge > 100){
				echo "Vieux";
			}
			elseif($myAge == 18){
				echo "Tout juste majeur";
			}
			else{
				echo "Mineur";
			}


			$scope = "Editeur";

			switch ($scope) {
				case "Admin":
					echo "Modifier la config";

				case "Editeur":
					echo "Modifier les contenus";

				case "Auteur":
					echo "Modifier ses contenus";

				default :
					echo "consulter le site";
			}

			



			for ($cpt=1 ; $cpt<10 ; $cpt++ ) {
				echo $cpt;
			}


			//lancement d'un dé = aléatoire entre 1 et 6
			$number = rand(1,100);
			$cpt = 1;

			while($number != 22){
				$number = rand(1,100);
				$cpt++;
			}

			echo $cpt." tentative(s)";

			*/

			/*
			$student = ["Juliette","GUION"];
			//print_r($student);
			//echo $student[0];
			//echo $student[1];



			$class = [
						[
							["Juliette","Margaux", "Michelle"],
							"GUION"
						],

						["Lucie","BERTHUY"],
						
						["Quentin","CHEVALIER"]
					];

			echo "<pre>";
			print_r($class);
			echo $class[0][0][1]; //Margaux
			echo $class[0][1]; //GUION


			//$pourIlan = [[],[[[],[[]]]]];


			$student = [
							"firstname"=>"Michel", 
							"lastname"=>"Pierre", 
							"average"=>12
						];

			// Prénom Nom a une moyenne de X
			echo $student["firstname"]. " " .$student["lastname"]. " a une moyenne de ".$student["average"];


			*/


			$listOfFirstnames = [
							"Simon", 
							"Ruth", 
							"Nelly", 
							"Gloria", 
							"Capucine",
							"Katlyn"
						];


 		?>

 		<ul>
 			<?php

 			$ballons = [
 							"ballon1",
 							"ballon2",
 							"ballon3",
 							"ballon4",
 							"ballon5",
						];
			
 			//Pour chaque elements de $listOfFirstnames
 			//les valeurs seront mises dans $firstname

			foreach ($ballons as $ballon) {
				//echo "<li>".$ballon."</li>";
			}

 			?>
 		</ul>





 		<?php



 		$classe = [	
 						["lastname"=>"Cognet","firstname"=>"Simon","CC1"=>12, "CC2"=>13, "partiel"=>5],
 						["lastname"=>"Bricout","firstname"=>"Valentin","CC1"=>0, "CC2"=>15, "partiel"=>10],
 						["lastname"=>"Vincent","firstname"=>"Leïla","CC1"=>10, "CC2"=>15, "partiel"=>17],
 						["lastname"=>"Sayegh","firstname"=>"Sara","CC1"=>12, "CC2"=>10, "partiel"=>12]

 					];

 		?>




 	<table border="1px">
 		<tr>
 			<th>Prénom</th>
 			<th>Nom</th>
 			<th>Moyenne</th>
 		</tr>

 		<tr>
 			<td>Sara</td>
 			<td>Sayegh</td>
 			<td>11.3</td>
 		</tr>
 	</table>









 	</p>
</body>
</html>


