<html>
	<body>
		<table>
		<?php
			//Declaramos los arrays.
			$escalar = array(4,5,7,8,2,12,9);
			$asociativo =array(
								'blanco' => 12,
								'verde' => 8,
								'azul' => 15,
								'rojo' => 19);
			// Escribimos los valores del array escalar
			echo '<p><b>Array Escalar:</b></p>';
			foreach ($escalar as $indice => $contenido)
				echo 'Indice: '.$indice.' Contenido: '.$contenido.'<br>';
			// Escribimos los valores del array asociativo
			echo '<p><b>Array Asociativo:</b></p>';
			foreach ($asociativo as $indice => $contenido)
				echo 'Indice: '.$indice.' Contenido: '.$contenido.'<br>';			
		?>
		</table>
	</body>
</html>