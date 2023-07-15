<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Google</title>
</head>
<body>
	<h1>MI PAG</h1>
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

	<?php

			$estado=true;
			$instituto="SENATI";
			$edad=19;
			$peso=55.5; 

			echo "<h1>SENATI - ETI</h1>";

			var_dump($estado);
			echo "<br>";

			var_dump($instituto);
			echo "<br>";

			var_dump($edad);
			echo "<br>";

			var_dump($peso);
			echo "<br>";
	 
	 ?>

	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

	<?php
		echo"<h1>$instituto</h1>";
		echo"<h1>".$instituto."</h1>";
	?>
</body>
</html>