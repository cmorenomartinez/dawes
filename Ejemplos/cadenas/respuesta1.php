<html>
	<body>
		<p><b>Contador de palabras.</b></p>
		
		<?php
			// Recuperamos el texto.
			$texto=$_REQUEST['texto'];
			// Borramos los espacios que pueda haber al principio y al final.
			$texto = ltrim($texto);
			$texto = rtrim($texto);
			// Parseamos (extraemos las distintas palabras) la cadena con la funcion explode
			$palabras = explode(' ',$texto);
			// Contamos el numero de elementos (palabras) del array $palabras
			// con la funcion count($palabras)
			$num_palabras_count = count($palabras);
			// Por otro lado recorremos el array $palabras con un foreach
			$num_palabras_foreach = 0;
			foreach ($palabras as $valor)
				if ($valor != '')
					$num_palabras_foreach++;
			// Mostramos la informacion.
			echo '<p>Texto introducido: '.$texto.'</p>';
			echo '<p>Num. Palabras con la funcion count: '.$num_palabras_count.'</p>';
			echo '<p>Num. Palabras con foreach: '.$num_palabras_foreach.'</p>';
		?>
		
		</table>
	</body>
</html>