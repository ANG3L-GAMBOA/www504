<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 03</title>
</head>
<body>
	<h1>ARREGLOS - ARRAYS</h1>
	<?php
		//Forma 2: Declarar el arreglo SIN elementos
	$dias = array();

	var_dump($dias);
	echo "<br>";

	//Agregamos elementos
	$dias[] = "Lunes";
	$dias[] = "Martes";
	$dias[] = "Miercoles";
	$dias[] = "Jueves";
	$dias[] = "Viernes";
	var_dump($dias);
	echo "<br>";
	?>
	<table border="1">
		<tr>
			<td><?php echo $dias[0];?></td>
		</tr>
		<tr>
			<td><?php echo $dias[1];?></td>
		</tr>
		<tr>
			<td><?php echo $dias[2];?></td>
		</tr>
		<tr>
			<td><?php echo $dias[3];?></td>
		</tr>
		<tr>
			<td><?php echo $dias[4];?></td>
		</tr>
		
	</table>

	<br>

	<table border="2">
		<?php
		for($i=0;$i<=(count($dias)-1);$i++)
		{
		?>
		<tr>
			<td><?php echo $dias[$i];?></td>
		</tr>
		<?php
		}
		?>
	</table>

	<br>

	<table border="3">
		<?php
		foreach ($dias as $dia){
		?>
	<tr>
		<td><?php echo $dia;?></td>
	</tr>
	<?php
	}
	?>
	</table>

</body>
</html>