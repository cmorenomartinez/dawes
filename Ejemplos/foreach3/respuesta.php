<html>
	<body>
		<!-- Mostramos la tabla con las calificaciones -->
		<p>Calificaciones de la Clase.</p>
		<table border='1'>
		<tr><td></td><td>Matematicas</td><td>Biologia</td><td>Ingles</td><td>Num Suspensos</tr>
		<!-- Comienza el script PHP -->
		<?php
			// Declaramos el array que contiene las notas de los alumnos.
			// En las filas (primer indice) estan los alumno.
			// En las columnas (segundo indice) estan sus notas.
			$calificaciones =array(
							'Jose Lopez' => array('Matematicas' => 5, 'Biologia' => 4, 'Ingles' => 5),
							'Maria del Carmen Jimenez' => array('Matematicas' => 7, 'Biologia' => 5, 'Ingles' => 1),
							'Luis Torres' => array('Matematicas' => 5, 'Biologia' => 7, 'Ingles' => 5),
							'Ana Maria Santos' => array('Matematicas' => 6, 'Biologia' => 5, 'Ingles' => 5)
					);
					
			// Declaramos un array asociativo que contenga como indice el nombre de la 
			// materia y el numero de suspensos como valor. Lo inicializamos a cero.
			$numsuspensos = array(
								'Matematicas' => 0,
								'Biologia' => 0,
								'Ingles' => 0
							);
			
			// Para cada uno de los alumnos
			foreach ($calificaciones as $nombre => $alumno){
				// Inicializamos el contador de materias suspensas
				$suspensos = 0;
				// Abrimos fila
				echo '<tr>';
				// Escribimos el nombre
				echo '<td>'.$nombre.'</td>';
				// Para cada una de las notas del alumno
				foreach ($alumno as $materia => $nota) {
					// Si es menor que cinco que la pinte de rojo, sino que la pinte normal
					if ($nota < 5) {
						echo '<td bgcolor="red">'.$nota.'</td>';
						// Contamos el numero de suspensos del alumno en particular.
						$suspensos++;
						// Actualizamos el array numsuspensos para las estaditicas
						$numsuspensos[$materia]++;
					}
					else
						echo '<td>'.$nota.'</td>';
				}
				// Mostramos el numero de suspensos
				echo '<td>'.$suspensos.'</td>';
				// Cerramos la fila
				echo '</tr>';
			}
		?>
		</table>
		<p>Estadisticas de Suspensos por Materia.</p>
		<table border="1">
			<tr><td>Materia</td><<td>Num. Suspensos</td></tr>
		<?php
			foreach ($numsuspensos as $materia => $numero) {
				echo '<tr>';
				echo '<td>'.$materia.'</td><td>'.$numero.'</td>';
				echo '<tr>';
			}
		?>
			
	</body>
</html>