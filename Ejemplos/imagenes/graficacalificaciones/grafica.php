<?php
	Header("Content-type: image/png");
	// El script debe empezar siempre por esta cabecera
	// SIN ESPACIOS, JUSTO DESPUES DE <?php
	
	if (isset($_REQUEST['aprobados']) && isset($_REQUEST['suspensos'])) {
		// Recogemos los valores enviados como parametro
		$aprobados = $_REQUEST['aprobados'];
		$suspensos = $_REQUEST['suspensos'];
		$total = $aprobados + $suspensos;
		// Hacemos los calculos
		$aprobados = ($aprobados * 360) / $total; 
		// Creamos una imagen de 400X300 pixeles
		$imagen = imagecreate(400,300);
		// Definimos colores para usarlos despues
		$naranja = imagecolorallocate($imagen, 255, 87, 51); 
		$verde = imagecolorallocate($imagen, 34, 153, 84);
		$blanco = imagecolorallocate($imagen, 255, 255, 255);
		// Le ponemos el fondo de un color. Si la imagen es png, dara
		// error si no se pinta. Si es jpg, no ocurrira esto.
		imagefill($imagen,0,0,$blanco);
		//Dibujamos los arcos
		imagefilledarc($imagen,200,150,200,150,0,$aprobados+1,$verde,IMG_ARC_EDGED);
		imagefilledarc($imagen,200,150,200,150,$aprobados-1,360,$naranja,IMG_ARC_EDGED);
		// Dibujamos la leyenda
		// imagestring ($imagen, 3, x, y, $txt, $col);
		// Visualizamos la imagen
		imagepng($imagen);
		// Una vez, visualizada, conviene destruir la imagen
		imagedestroy($imagen);
	}	
?>