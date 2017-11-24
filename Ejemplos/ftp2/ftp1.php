
<?php
	# Conectamos con el servidor FTP
	if($conexion=ftp_connect("127.0.0.1",21))
		echo "Conexión FTP activada<br>";
	else
		echo "No se activo lo conexión FTP<br>";
	// Nos logueamos con el usuario 'pepe' contraseña 'pepe1234'
	if (ftp_login($conexion,'pepe','pepe1234'))
		echo 'Conectado con usuario "pepe".<br>';
	else
		echo 'Error de autentificaci&oacute;n<br>';
	// Mostramos el directorio actual
	$directorio = ftp_pwd($conexion);
	echo 'Directorio Actual: '.$directorio.'<br>';
	// Listamos el nombre de todos los ficheros que contiene 
	// el directorio actual
	echo '<br><br>Listado con la funcion ftp_nlist()<br>';
	$listado = ftp_nlist($conexion,'');
	foreach ($listado as $fichero)
		echo $fichero.'<br>';
	echo '<br><br>';
	echo '<br><br>Listado con la funcion ftp_rawlist()<br>';
	$listado = ftp_rawlist($conexion,'');
	foreach ($listado as $fichero)
		echo $fichero.'<br>';
	echo '<br><br>';
	// Pasamos al directorio 'carpeta1' y listamos su contenido.
	ftp_chdir($conexion,'carpeta1');
	echo 'Contenido de "carpeta1"<br>';
	$listado = ftp_rawlist($conexion,'');
	foreach ($listado as $fichero)
		echo $fichero.'<br>';
	echo '<br><br>';
	// Creamos un directorio llamado 'carpeta3'.
	if (ftp_mkdir($conexion,'carpeta3'))
		echo 'Directorio "carpeta3" creado.<br>';
	else
		echo 'Error de creaci&oacute;n<br>';
	// Cerramos la conexion al servidor FTP
	if (ftp_quit($conexion))
		echo 'Conexion cerrada<br>';
	else
		echo 'Error de al cerrar la conexi&oacute;n.<br>';
?>