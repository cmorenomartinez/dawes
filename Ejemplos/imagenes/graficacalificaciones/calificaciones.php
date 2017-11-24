<HTML>
<BODY>
<?php
	// Si estan definidos valores para aprobados y suspensos (ninguno de los campos esta vacio)
	// se llama al script de la grafica grafica.php pasandole dichos parametros.
	if (isset($_REQUEST['aprobados']) && isset($_REQUEST['suspensos']) 
		&& !empty($_REQUEST['aprobados']) && !empty($_REQUEST['suspensos'])){
		$aprobados = $_REQUEST['aprobados'];
		$suspensos = $_REQUEST['suspensos'];
		echo '<IMG src="grafica.php?aprobados='.$aprobados.'&suspensos='.$suspensos.'">';
	}
	// Si no se muestra el formulario para introducir los datos.
	else {
?>
	<form action="calificaciones.php" method="GET">
		<table>
			<tr>
				<td>Aprobados</td>
				<td><input type="text" name="aprobados"></td>
				<td>Suspensos</td>
				<td><input type="text" name="suspensos"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="Generar Gr&aacute;fica"> 
					<input type="reset" value="Borrar Datos">
				</td>
			</tr>
		</table>
		</form>
<?php
	}
?>
</BODY>
</HTML>