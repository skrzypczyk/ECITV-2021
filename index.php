<?php
	include "includes/header.php";
	require "includes/functions.php";
?>

<?php
	helloYou("Yves");
	helloYou("Valentin");




	$lastname="  SkRZYPcZYK   ";
	$lastname = cleanLastname($lastname);
	echo $lastname;


?>

	<section>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</section>


	<?php

	//Les fonctions 

	//Comment fait-on pour appeler une fonction ?
	helloWorld();



	?>



<?php
	include "includes/footer.php";
?>