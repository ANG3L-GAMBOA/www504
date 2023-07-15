<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 05</title>
</head>
<body>
	<h1>Venta</h1>
	<p>A partir del precio y la cantidad, Calcular el total, el igv y el total incluido igv</p>

	<?php 
		require_once("ejercicio05POO.PHP");

		//Instanciar el Objeto
		$objVenta = new Venta();

		// $_GET[] / $_POST[]
		//var_dump(isset($_GET['txtPrecio']))

		if(isset($_GET['txtPrecio']))
			{
				/*
			//leer las variables enviadas
			$precio = $_GET['txtPrecio'];
			$cantidad = $_GET['txtCantidad'];
			*/
			$objVenta ->precio = $_GET["txtPrecio"];
			$objVenta ->cantidad = $_GET["txtCantidad"];
			}else{
				//Asignar valores predeterminados 
				/*
				$precio = 0;
				$cantidad = 0; */
				$objVenta ->precio = 0;
				$objVenta ->cantidad = 0;

			}

		/* //Calcular 
			$total = $precio * $cantidad;
			$igv = 0.18 * $total;
			$totaliGV = $total + $igv;*/



	?>

	<form>
		<table>
			<tr>
				<td>Precio</td>
				<td><input type="text" name="txtPrecio" value="<?php echo $objVenta->precio ?>"></td>
			</tr>
			<tr>
				<td>Cantidad</td>
				<td><input type="text" name="txtCantidad" value="<?php echo $objVenta->cantidad ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Calcular"></td>
			</tr>
		</table>
		
	</form>

	<?php

	echo "<h1>Total S/. " . $objVenta->getTotal() ."</h1>";
	echo "<h1>IGV S/. ". $objVenta-> getIgv() ."</h1>";
	echo "<h1>TotaIGV S/. ". $objVenta -> getTotalIGV() ."</h1>";


	?>
	
</body>
</html>