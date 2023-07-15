<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 07-PDO</title>
</head>
<body>
	<h1>PDO: Objetos de Datos de PHP</h1>
	<?php
		$cadena="mysql:host=127.0.0.1; dbname=bdmarket";
		$usuario="root";
		$clave="";
		
		//Instanciar un objeto de conexion PDO
		$conexion = new PDO($cadena, $usuario, $clave);

		//Preparar la sentencia SQL
		$sentencia = $conexion->prepare("select * from producto;");

		//Ejecutar la sentencia de SQL
		$sentencia->execute();

		//Recoger el resultado de la eleccion de la sentencia de SQL
		$tabla = $sentencia->fetchAll();//Recogiendo todas las filas

		echo"<table border = 1>";

		echo "<tr><th>CODIGO</th><th>DESCRIPCION</th><th>CATEGORIA</th><th>PRECIO</th></tr>";
		foreach($tabla as $fila)
		{
			echo "<tr>";
			echo "<td>" . $fila[0]."</td>";
			echo "<td>" . $fila[1]."</td>";
			echo "<td>" . $fila[2]."</td>";
			echo "<td>" . $fila[3]."</td>";
			echo "</tr>";
		} 
		echo"</table>"
		

	?>
</body>
</html>