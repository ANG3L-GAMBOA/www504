<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 06</title>
</head>
<body>
	<h1>Triangulo</h1>
	<p>A partir del ingreso de los lados del triangulo
	determinar si existe o no existe.
	Si existe: calcular el perimetro, el area
	y el tipo (equilatero, isoceles, escaleno)
	</p>
	<p>
		|b-c| < a < b+c
		|a-c| < b < a+c
		|b-a| < c < b+a
	</p>
	<?php
		require_once("ejercicio06POO.php");

		$objTriangulo = new Triangulo();

		if(isset($_GET['txtA']))
		{
			$objTriangulo->a = $_GET['txtA'];
			$objTriangulo->b = $_GET['txtB'];
			$objTriangulo->c = $_GET['txtC'];

		}else{
			$objTriangulo->a = 0;
			$objTriangulo->b = 0;
			$objTriangulo->c = 0;
		}
	?>

	<form>
		<table>
			<tr>
				<td>Lado A:</td>
				<td><input type="text" name="txtA" value=<?php echo $objTriangulo->a ?>></td>
			</tr>
			<tr>
				<td>Lado B:</td>
				<td><input type="text" name="txtB" value=<?php echo $objTriangulo->b ?>></td>
			</tr>
			<tr>
				<td>Lado C:</td>
				<td><input type="text" name="txtC" value=<?php echo $objTriangulo->c ?>></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="calcular"></td>
			</tr>
			<tr>
				<td>Existe</td>
				<td><input type="text" value="<?php echo $objTriangulo->getExiste()?'SI':'NO'?>"></td>
			</tr>
			<tr>
				<td>Perimetro</td>
				<td><input type="text" value="<?php echo $objTriangulo->getPerimetro()?>"></td>
			</tr>
			<tr>
				<td>Área</td>
				<td><input type="text" value="<?php echo $objTriangulo->getArea()?>"></td>
			</tr>
			<tr>
				<td>Tipo</td>
				<td><input type="text" value="<?php echo $objTriangulo->getTipo()?>"></td>
			</tr>
		</table>
		<img src="<?php echo $objTriangulo->getTipo() . '.jpg'?>">
	</form>

</body>
</html>