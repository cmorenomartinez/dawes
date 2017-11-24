<html>
	<body>
		<p>La tabla solicitada es la siguiente:</p>
		<?php
			// Funcion factorial($n): Calcula el factorial de un numero.
			// el numero de filas y columnas indicado.
			function factorial($n=0) {
				$resultado = 1;
				if ($n>=1){
					for ($indice=1 $indice<=$n; $indice++)
						$resultado = $resultado * indice;
				return $resultado;
			}
			// Capturamos los valores del numero de filas y columnas.
			$filas = $_REQUEST['filas'];
			$columnas = $_REQUEST['columnas'];
			
			// Llamamos a la funcion tabla.
			tabla($filas,$columnas);
		?>
	</body>
</html>