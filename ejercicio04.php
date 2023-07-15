<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 04</title>
</head>
<body>
	<h1>Formularios</h1>
	<!-- Los formularios pemiten el envio de datos del front-end al back-end -->
	<form>
		<fieldset>
			<legend>Ingresar al Sistema</legend>
			<table>
				<tr>
					<td><label>Usuario</label></td>
					<td><input type="text" name="txtUsuario"></td>
				</tr>
				<tr>
					<td><label>Contraseña</label></td>
					<td><input type="password" name="txtClave"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Ingresar"></td>
				</tr>
			</table>
		</fieldset>

		<fieldset>
			<legend>Datos Personales</legend>
			<table>
				<tr>
					<td><label>Nombre completo</label></td>
					<td><input type="text" name="txtNombre" placeholder="Digite su nombre"></td>
				</tr>
				<tr>
					<td><label>Edad</label></td>
					<td><input type="number" name="txtEdad" min=0 max=100></td>
				</tr>
				<tr>
					<td><label>Nota</label></td>
					<td><input type="range" name="txtNota" min=0 max=20></td>
				</tr>
				<tr>
					<td><label>Fecha</label></td>
					<td><input type="date" name="txtFecha"></td>
				</tr>								
				<tr>
					<td><label>Estado Civil</label></td>
					<td>
						<select name="lstEstadoCivil">
							<option>Soltero</option>
							<option>Casado</option>
							<option>Viudo</option>
							<option>Divorciado</option>
							<option>Conviviente</option>
						</select>
					</td>
				</tr>

				<tr>
					<td><label>Estado Civil</label></td>
					<td>
						<input name="cmbEstadoCivil" list="listaOpciones">
						<datalist id="listaOpciones">
							<option>Soltero</option>
							<option>Casado</option>
							<option>Viudo</option>
							<option>Divorciado</option>
							<option>Conviviente</option>
						</datalist>
					</td>
				</tr>

				<tr>
					<td><label>Estado Civil</label></td>
					<td>
						<fieldset>
							<input type="radio" name="opcEstadoCivil" value="Soltero"><label>Soltero</label><br>
							<input type="radio" name="opcEstadoCivil" value="Casado"><label>Casado</label><br>
							<input type="radio" name="opcEstadoCivil" value="Viudo"><label>Viudo</label><br>
							<input type="radio" name="opcEstadoCivil" value="Divorciado"><label>Divorciado</label><br>
							<input type="radio" name="opcEstadoCivil" value="Conviviente"><label>Conviviente</label>
						</fieldset>
					</td>
				</tr>

				<tr>
					<td><label>Condiciones de uso:</label></td>
					<td>
						<input type="checkbox" name="chkContrato" checked value="si"><label>Acepto el contrato.</label>
						<input type="checkbox" name="chkPublicidad" value="ok"><label>Deseo publicidad.</label>
					</td>
				</tr>

				<tr>
					<td><label>Color favorito:</label></td>
					<td>
						<input type="color" name="txtColor">
					</td>
				</tr>

				<tr>
					<td><label>Enviar archivo:</label></td>
					<td>
						<input type="file" name="txtArchivo">
					</td>
				</tr>


			</table>

		</fieldset>
	</form>

</body>
</html>