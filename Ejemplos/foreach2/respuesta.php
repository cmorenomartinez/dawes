<html>
	<body>
		<!-- Comenzamos con la marca de inicio de tabla y la cabecera -->
		<table border='1'>
		<tr><td></td><td>Matematicas</td><td>Biologia</td><td>Ingles</td><td>Num Suspensos</tr>
		<!-- Comienza el script PHP -->
		<?php
			// Declaramos el array que contiene los datos.
			// En las filas (primer indice) estan los alumno.
			// En las columnas (segundo indice) estan sus notas.
			$calificaciones =array(
							'Jose Lopez' => array('Matematicas' => 5, 'Biologia' => 4, 'Ingles' => 5),
							'Maria del Carmen Jimenez' => array('Matematicas' => 7, 'Biologia' => 5, 'Ingles' => 1),
							'Luis Torres' => array('Matematicas' => 5, 'Biologia' => 7, 'Ingles' => 5),
							'Ana Maria Santos' => array('Matematicas' => 6, 'Biologia' => 5, 'Ingles' => 5)
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
				foreach ($alumno as $nota) {
					// Si es menor que cinco que la pinte de rojo, sino que la pinte normal
					if ($nota < 5) {
						echo '<td bgcolor="red">'.$nota.'</td>';
						$suspensos++;
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
	</body>
</html>