<html>
	<body>
		<?php
			// Funcion formularioinicial(). Muestra el codigo HTML 
			// del formulario
			function formularioinicial() {
		?>
		<!-- Definimos el codigo HTML del formulario -->
		<form action="pagina2.php" method="GET">
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
			
			// Funcion formularioalumno(). Muestra el codigo HTML 
			// del formulario del Alumno
			function formularioalumno() {
		?>
		<!-- Definimos el codigo HTML del formulario del Alumno -->
		<form action="pagina2.php" method="GET">
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
			
			// Funcion formularioprofesor(). Muestra el codigo HTML 
			// del formulario del Profesor
			function formularioprofesor() {
		?>
		<!-- Definimos el codigo HTML del formulario del Alumno -->
		<form action="pagina2.php" method="GET">
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
			
			// Si el parametro 'paso' no esta definido es que es la primera vez que 
			// se ejecuta el script. Con lo cual, hay mostrar el formulario de seleccion
			// de alumno o profesor.
			if (!isset($_REQUEST['paso'])){
				formularioinicial();
			}
			else {
				// Si esta definido 'paso', comprobamos si 'tipo' vale 'alumno' o 'profesor'.
				// Si 'tipo' vale 'alumno'
				if ($_REQUEST['tipo']=='alumno') {
					// Comprobamos en que 'paso' estamos. Si estamos en el paso 1, mostramos 
					// el formulario de alumno.
					if ($_REQUEST['paso']==1)
						formularioalumno();
					// Si no, estamos en paso 2 y tratamos la informacion.
					else {
						$nombre = $_REQUEST['nombre'];
						$ciclo = $_REQUEST['ciclo'];
						$curso = $_REQUEST['curso'];
						echo $nombre.' es alumno de '.$curso.' de '.$ciclo;
					}
				}
				// Si 'tipo' vale 'profesor'
				else {
					// Comprobamos en que 'paso' estamos. Si estamos en el paso 1, mostramos 
					// el formulario de profesor.
					if ($_REQUEST['paso']==1)
						formularioprofesor();
					// Si no, estamos en paso 2 y tratamos la informacion.
					else {
						$nombre = $_REQUEST['nombre'];
						$ciclo = $_REQUEST['ciclo'];
						$curso = $_REQUEST['curso'];
						$tutor = $_REQUEST['tutor'];
						if ($tutor=='NO')
							echo $nombre.' no es tutor de ningun grupo.';
						else
							echo $nombre.' es tutor de '.$curso.' de '.$ciclo;
					}
				}
					
			}
		?>
	</body>
</html>