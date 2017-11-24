<html>
	<body>
		<form action="fcopren1.php" method="GET">
		<table>
			<tr>
				<td colspan="2"><b>Operaciones sobre el fichero 'fichero.txt'<b></td>
			</tr>
			<tr>
				<td>Nuevo Nombre (con extensi&oacute;n)</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr>
				<td rowspan="2">
					<input type="radio" name="operacion" value="copy" checked> Copiar
					<input type="radio" name="operacion" value="rename"> Renombrar
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