<html>
	<body>
		<table>
		<?php
			//Inicializamos el contador
			$contador=1;
			// Con el primer bucle for dibujamos las filas
			for ($fila=1; $fila<=5; $fila++){
				echo '<tr>';
				// Con el segundo bucle for dibujamos las columnas
				for ($columna=1; $columna<=7; $columna++){
					echo '<td>'.$contador.'</td>';
					$contador++;
				}	
				echo '</tr>';	
			}
		?>
		</table>
	</body>
</html>