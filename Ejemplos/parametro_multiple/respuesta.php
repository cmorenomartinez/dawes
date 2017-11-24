<html>
	<body>
		<?php
			$nombre=$_REQUEST['nombre'];
			$aficiones=$_REQUEST['aficiones'];
			// Escribo el nombre
			echo '<p>Nombre: '.$nombre.'</p>';
			echo '<ul>';
			// $aficiones es un array. Por tanto, lo recorremos
			// para obtener sus valores.
			foreach ($aficiones as $indice => $aficion)
				echo '<li>'.$indice.' '.$aficion.'</li>';
			echo '</ul>';
		?>
	</body>
</html>