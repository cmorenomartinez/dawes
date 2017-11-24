<html>
	<body>
		<?php
			//Capturamos el valor del numero e inicializamos el contador.
			$numero=$_REQUEST['numero'];
			$contador=0;
			
			//Mientras que no lleguemos al 10.
			while ($numero==0)
				echo "El n&uacute;mero es cero.";
			else
				switch ($numero%2) {
					case 0:
						echo "El n&uacute;mero es par";
					break;
					
					case 1:
						echo "El n&uacute;mero es impar";
					break;
				}
		?>
	</body>
</html>