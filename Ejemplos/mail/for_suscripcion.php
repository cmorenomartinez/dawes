<html>
	<body>
		<form action="res_suscripcion.php" method="GET">
		<p><b>Formulario de inscripcion</b></p>
		<table>
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="nombre"></td>
				<td>Apellidos</td>
				<td><input type="text" name="apellidos"></td>
			</tr>
			<tr>
				<td>Edad</td>
				<td><input type="text" name="edad"></td>
				<td>Sexo</td>
				<td>
					Hombre <input type="radio" name="sexo" value="Hombre" checked>
					Mujer <input type="radio" name="sexo" value="Mujer">
				</td>
			</tr>
			<tr>
				<td>Mail</td>
				<td colspan="3"><input type="text" name="mail"></td>
			</tr>
			<tr>
				<td colspan="4">
					<input type="submit" value="Suscribirse"> 
					<input type="reset" value="Borrar Datos">
				</td>
			</tr>
		</table>
		</form>
	</body>
</html>