<html>
	<body>
		<table border="1">
		<p><b>Funciones de cadena.</b></p>
		
		<?php
			// Recuperamos el nombre.
			$nombre=$_REQUEST['nombre'];
			// Mostramos la informacion
			echo '<tr><td width="150px">$nombre</td><td>"'.$nombre.'"</td></tr>';
			echo '<tr><td width="150px">strlen($nombre)</td><td>'.strlen($nombre).'</td></tr>';
			echo '<tr><td>strtolower($nombre)</td><td>'.strtolower($nombre).'</td></tr>';
			echo '<tr><td>strtoupper($nombre)</td><td>'.strtoupper($nombre).'</td></tr>';
			echo '<tr><td>ucwords($nombre)</td><td>'.ucwords($nombre).'</td></tr>';
			echo '<tr><td>ucfirst($nombre)</td><td>'.ucfirst($nombre).'</td></tr>';
			echo '<tr><td>ltrim($nombre)</td><td>"'.ltrim($nombre).'"</td></tr>';
			echo '<tr><td>rtrim($nombre)</td><td>"'.rtrim($nombre).'"</td></tr>';
			echo '<tr><td>substr($nombre,6)</td><td>'.substr($nombre,6).'</td></tr>';
			echo '<tr><td>substr($nombre,-6)</td><td>'.substr($nombre,-6).'</td></tr>';
			echo '<tr><td>strrev($nombre)</td><td>'.strrev($nombre).'</td></tr>';
			echo '<tr><td>str_pad($nombre,30,"*",STR_PAD_BOTH)</td><td>'.str_pad($nombre,30,"*",STR_PAD_BOTH).'</td></tr>';
			echo '<tr><td>str_pad($nombre,30,"*",STR_PAD_LEFT)</td><td>'.str_pad($nombre,30,"*",STR_PAD_LEFT).'</td></tr>';
			echo '<tr><td>str_pad($nombre,30,"*",STR_PAD_RIGHT)</td><td>'.str_pad($nombre,30,"*",STR_PAD_RIGHT).'</td></tr>';
		?>
		
		</table>
	</body>
</html>