
<?php
	// Capturamos los parametros de conexion
	$usuario = $_REQUEST['usuario'];
	$password = $_REQUEST['password'];
	// Realizamos la conexion con el servidor
	if ($conexion=@ftp_connect("127.0.0.1",21)) {
		// Nos logueamos con el usuario y contraseña dada
		if (@ftp_login($conexion,$usuario,$password)) {
			ftp_quit($conexion);
			include('listado.php');
		}
		else {
			echo '<p>Error de Autentificaci&oacute;n</p>';
			include('login.php');
		}
	}		
	else {
		echo '<p>Error de Conexi&oacute;n</p>';
		include('login.php');
	}
?>