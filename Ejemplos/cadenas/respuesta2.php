<html>
	<body>
		<table border="1">
		<p><b>Funciones de cadena.</b></p>
		
		<?php
			// Recuperamos la informacion.
			$nombre=$_REQUEST['nombre'];
			$apellidos=$_REQUEST['apellidos'];
			$edad=$_REQUEST['edad'];
			// Pasamos las cadenas a Mayusculas
			$nombre = strtoupper($nombre);
			$apellidos = strtoupper($apellidos);
			// Generamos el array
			$array[] = $nombre;
			$array[] = $apellidos;
			$array[] = $edad;
			// Usamos la funcion implode para generar la cadena
			$cadena = implode(';',$array);
			// Mostramos la cadena
			echo '<p>Cadena Resultante: <b>'.$cadena.'</b>.</p>';			
		?>
		
		</table>
	</body>
</html>