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
	imagefill($imagen,0,0,$naranja);
	
	//Dibujamos un rectangulo relleno
	imagefilledrectangle($imagen, 20, 20, 200, 100, $blanco);
	
	//Dibujamos un rectangulo vacio
	imagerectangle($imagen, 320, 120, 400, 300, $negro);
	
	// Dibujamos un poligono
	$vertices = array(450,10,50,200,400,300); /* Se definen tres vertices */
	imagepolygon($imagen, $vertices, 3, $blanco);
	

	// Visualizamos la imagen
	imagepng($imagen);
	
	// Una vez, visualizada, conviene destruir la imagen
	imagedestroy($imagen);
?>