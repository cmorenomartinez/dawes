<?php
	Header("Content-type: image/png");
	// El script debe empezar siempre por esta cabecera
	// SIN ESPACIOS, JUSTO DESPUES DE <?php
	
	// Creamos una imagen de 500X400 pixeles
	$imagen = imagecreate(500,400);
	
	// Definimos colores para usarlos despues
	$naranja = imagecolorallocate($imagen, 255, 87, 51);
	$negro = imagecolorallocate($imagen, 0, 0, 0);
	$blanco = imagecolorallocate($imagen, 255, 255, 255);

	// Le ponemos el fondo de un color. Si la imagen es png, dara
	// error si no se pinta. Si es jpg, no ocurrira esto.
	imagefill($imagen,100,100,$blanco);
	
	//Dibujamos una elipse
	imagearc($imagen,250,200,200,150,0,360,$naranja);
		
	//Dibujamos una circulo
	imagefilledarc($imagen,150,150,200,200,0,45,$naranja,(IMG_ARC_EDGED | IMG_ARC_NOFILL));

	// Visualizamos la imagen
	imagepng($imagen);
	
	// Una vez, visualizada, conviene destruir la imagen
	imagedestroy($imagen);
?>