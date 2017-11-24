<?php
	// Funcion formularioprofesor(). Muestra el codigo HTML 
	// del formulario del Profesor
	function formularioprofesor() {
		?>
		<!-- Definimos el codigo HTML del formulario del Alumno -->
		<form action="pagina.php" method="GET">
		<input type="hidden" name="paso" value="2">
		<input type="hidden" name="tipo" value="profesor">
		<table>
			<tr>
				<td>Nombre y Apellidos</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr>
				<td> Tutor </td>
				<td>
					<input type="radio" name="tutor" value="SI" checked> Si
					<input type="radio" name="tutor" value="NO"> No
				</td>
			</tr>
			<tr>
				<td> Ciclo </td>
				<td>
					<input type="radio" name="ciclo" value="ASIR" checked> ASIR
					<input type="radio" name="ciclo" value="DAW"> DAW
					<input type="radio" name="ciclo" value="DAM"> DAM
				</td>
			</tr>
			<tr>
				<td> Curso </td>
				<td>
					<input type="radio" name="curso" value="Primero" checked> Primero
					<input type="radio" name="curso" value="Segundo" checked> Segundo
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
	function respuestaprofesor() {
		$nombre = $_REQUEST['nombre'];
		$ciclo = $_REQUEST['ciclo'];
		$curso = $_REQUEST['curso'];
		$tutor = $_REQUEST['tutor'];
		if ($tutor=='NO')
			echo $nombre.' no es tutor de ningun grupo.';
		else
			echo $nombre.' es tutor de '.$curso.' de '.$ciclo;
	}
?>