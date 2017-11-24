<html>
	<body>
		<?php
			$numero=$_REQUEST['numero'];
			if ($numero==0)
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