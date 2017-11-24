<?php
	// Funcion formularioinicial(). Muestra el codigo HTML 
	// del formulario
	function formularioinicial() {
?>
	<!-- Definimos el codigo HTML del formulario -->
	<form action="pagina.php" method="GET">
	<input type="hidden" name="paso" value="1">
	<table>
		<tr>
			<td>
				<input type="radio" name="tipo" value="alumno" checked> Alumno
				<input type="radio" name="tipo" value="profesor"> Profesor
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
<?php
	}	
?>		