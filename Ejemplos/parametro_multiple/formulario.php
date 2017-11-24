<html>
	<body>
		<form action="respuesta.php" method="GET">
		<table>
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr><td colspan="2"><b>Aficiones</b></td></tr>
			<tr>
				<td>
					<input type="checkbox" name="aficiones[]" value="M&uacute;sica">M&uacute;sica<br>
					<input type="checkbox" name="aficiones[]" value="Deporte">Deporte<br>
					<input type="checkbox" name="aficiones[]" value="Aire Lbre">Aire Libre<br>
				</td>
				<td valign="top">
					<input type="checkbox" name="aficiones[]" value="Lectura">Lectura<br>
					<input type="checkbox" name="aficiones[]" value="Arte">Arte<br>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="Enviar"> 
					<input type="reset" value="Borrar">
				</td>
			</tr>
		</table>
		</form>
	</body>
</html>