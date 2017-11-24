<?php
	// Funcion formularioalumno(). Muestra el codigo HTML 
	// del formulario del Alumno
	function formularioalumno() {
?>
		<!-- Definimos el codigo HTML del formulario del Alumno -->
		<form action="pagina.php" method="GET">
		<input type="hidden" name="paso" value="2">
		<input type="hidden" name="tipo" value="alumno">
		<table>
			<tr>
				<td>Nombre y Apellidos</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr>
				<td> Ciclo </td>
				<td>
					<input type="radio" name="ciclo" value="ASIR" checked> ASIR
					<input type="radio" name="ciclo" value="DAW" > DAW
					<input type="radio" name="ciclo" value="DAM" > DAM
				</td>
			</tr>
			<tr>
				<td> Curso </td>
				<td>
					<input type="radio" name="curso" value="Primero" checked> Primero
					<input type="radio" name="curso" value="Segundo"> Segundo
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

<?php
	// Funcion respuestaalumno(). Muestra la respuesta
	// del formulario del Alumno
	function respuestaalumno() {
		$nombre = $_REQUEST['nombre'];
		$ciclo = $_REQUEST['ciclo'];
		$curso = $_REQUEST['curso'];
		echo $nombre.' es alumno de '.$curso.' de '.$ciclo;
	}
?>