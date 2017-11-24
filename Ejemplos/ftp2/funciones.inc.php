<?php
	// Realiza la conexion al servidor.
	// Parametros:
	// 		$usuario: usuario
	//		$password: password
	//
	//	Devuelve una conexion en la variable $conexion
	function conectar($usuario,$password) {
		// Realizamos la conexion con el servidor
		if ($conexion=@ftp_connect("127.0.0.1",21)) {
			// Nos logueamos con el usuario y contraseña dada
			if (@ftp_login($conexion,$usuario,$password)) 
				return $conexion;
			else {
				echo '<p>Error de Autentificaci&oacute;n</p>';
				include('login.php');
				return false;
			}
		}		
		else {
			echo '<p>Error de Conexi&oacute;n</p>';
			include('login.php');
			return false;
		}
	}
?>

<?php
	// obtiene el listado de los elementos que hay en un directorio.
	// Estos estan ordenados primero los directorios y despues los ficheros
	// Parametros:
	//		$conexion
	//		$directorio: directorio de donde se obtiene el listado
	//
	//	Devuelve un array de dichos elementos en la variable $listado
	function obtener_listado($conexion,$directorio) {
		//Nos posicionamos en el directorio $directorio
		ftp_chdir($conexion,$directorio);
		$listado = ftp_nlist($conexion,'');
		// Organizamos los nombres para que aparezcan primero los directorios
		// y despues los ficheros. Para ello, usamos dos arrays: uno de fichero y otro 
		// de directorios y despues los unimos.
		// Tenemos en cuenta que el ftp_size() devuelve -1 si es un directorio.
		// En primer lugar, creamos los arrays vacios.
		$ficheros = array();
		$directorios = array();
		// Recorremos el listado insertando el elemento en el arrya adecuado
		foreach ($listado as $fichero)
			if (ftp_size($conexion,$fichero) == -1)
				$directorios[] = $fichero;
			else 				
				$ficheros[] = $fichero;
		// Una vez obtenido los arrays $directorios y $ficheros, los uno con array_merge()	
		$listado = array_merge($directorios,$ficheros);
		
		return $listado;
	}
?>