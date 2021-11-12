<?php


	//Déclaration d'une fonction en respectant le camel case
	function helloWorld(){
		//Code executé à l'appel de la fonction;
		echo "Bonjour tout le monde";

	}


	function helloYou($firstname){
		echo "Bonjour ".$firstname;
	}




	function cleanLastname($word){
		//Tout mettre en majuscule;
		$word = strtoupper($word);

		//Enlever les espaces en début et en fin de chaîne
		$word = trim($word);

		//retourne le mot nettoyé (en maj et sans espace en début et en fin)
		return $word;

	}

?>