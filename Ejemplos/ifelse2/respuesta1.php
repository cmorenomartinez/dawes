<html>
	<body>
		<?php
			$numero=$_REQUEST['numero'];
			if ($numero==0) 
				echo "El n&uacute;mero es cero.";
			elseif ($numero%2==0)
				echo "El n&uacute;mero es par.";
			else
				echo "El n&uacute;mero es impar.";
		?>
	</body>
</html>