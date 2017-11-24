<html>
	<body>
		<form action="fcopren2.php" method="GET">
		<table>
			<tr>
				<td colspan="2"><b>Operaciones sobre el ficheros.'<b></td>
			</tr>
			<tr>
				<td>Fichero de Origen(con extensi&oacute;n)</td>
				<td><input type="text" name="origen"></td>
			</tr>
			<tr>
				<td>Fichero de Destino / Nuevo Nombre(con extensi&oacute;n)</td>
				<td><input type="text" name="destino"></td>
			</tr>
			<tr>
				<td colspan="2">
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