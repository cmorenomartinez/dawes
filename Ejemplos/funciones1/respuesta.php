<html>
	<body>
		<?php
			// Funcion tabla($num_filas,$num_columnas): Dibuja una tabla con
			// el numero de filas y columnas indicado.
			function tabla($num_filas,$num_columnas) {
				echo '<table border="1">';
				// Bucle para dibujar cada una de las filas.
				for ($fila=1; $fila<=$num_filas; $fila++){
					// Marca de inicio de fila
					echo '<tr>';
					// Con el segundo bucle for dibujamos las celdas que tiene la fila.
					for ($columna=1; $columna<=$num_columnas; $columna++)
						echo '<td>&nbsp;</td>';
					// Marca de final de fila.
					echo '</tr>';	
				}
				echo '</table>';
			}
			// Capturamos los valores del numero de filas y columnas.
			$filas = $_REQUEST['filas'];
			$columnas = $_REQUEST['columnas'];
			
			// Llamamos a la funcion tabla.
			echo '<p>La tabla solicitada es la siguiente:</p>';
			tabla($filas,$columnas);
			echo '<p>La tabla inversa a la solicitada es la siguiente:</p>';
			tabla($columnas,$filas);
		?>
	</body>
</html>