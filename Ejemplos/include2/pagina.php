<html>
	<body>
	<?php
		// Inclusion de ficheros de funciones con include
		include('inicio.inc.php');
		include('alumno.inc.php');
		include('profesor.inc.php');
		// Si el parametro 'paso' no esta definido es que es la primera vez que 
		// se ejecuta el script. Con lo cual, hay mostrar el formulario de seleccion
		// de alumno o profesor.
		if (!isset($_REQUEST['paso'])){
			formularioinicial();
		}
		else {
			// Si esta definido 'paso', comprobamos si 'tipo' vale 'alumno' o 'profesor'.
			// Si 'tipo' vale 'alumno'
			if ($_REQUEST['tipo']=='alumno') {
				// Comprobamos en que 'paso' estamos. Si estamos en el paso 1, mostramos 
				// el formulario de alumno.
				if ($_REQUEST['paso']==1)
					formularioalumno();
				// Si no, estamos en paso 2 y tratamos la informacion.
				else {
					respuestaalumno();
				}
			}
			// Si 'tipo' vale 'profesor'
			else {
				// Comprobamos en que 'paso' estamos. Si estamos en el paso 1, mostramos 
				// el formulario de profesor.
				if ($_REQUEST['paso']==1)
					formularioprofesor();
				// Si no, estamos en paso 2 y tratamos la informacion.
				else {
					respuestaprofesor();
				}
			}			
		}
	?>
	</body>
</html>