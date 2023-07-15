<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 02</title>
</head>
<body>
	<h1>Arreglos - Arrays</h1>
	<?php
		//forma 1: Declarar el arreglos con sus elmentos 
		$dias = array("Lunes","martes","miercoles","jueves","viernes");

		var_dump($dias);
	?>
	<br>

	<?php
	echo $dias[0];
	echo "<br>";
	echo $dias[1];
	echo "<br>";
	echo $dias[2];
	echo "<br>";
	echo $dias[3];
	echo "<br>";
	echo $dias[4];
	echo "<br>";
	?>
	<br>

	<h1>(1)Acedinedo con FOR a cada elemto de arreglo</h1>
	<?php
		for($i=0;$i<=4;$i=$i+1)
		{
			echo $dias[$i];
			echo "<br>";
		}
	?>


	<h1>(2) Acedinedo con FOR a cada elemto de arreglo</h1>
	<?php
		//Obtener la cantidad de elementos
		$can= count($dias);

		//Fror utilizamos la cantidad de elementos
		for($i=0;$i<=($can - 1);$i=$i+1)
		{
			echo $dias[$i];
			echo "<br>";
		}
	?>


	<h1>(3) Acedinedo con FOREACH a cada elemto de arreglo</h1>
	<?php
		foreach ($dias as $elemento)
		{
			echo $elemento;
			echo "<br>";
		}
	?>
</body>
</html>