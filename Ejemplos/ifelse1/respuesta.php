<html>
	<body>
		<?php
			$valor=$_REQUEST['edad'];
			if ($valor<18) {
				echo "Eres menor de edad";
		?>
		
		<h1>Esto es HTML puesto por el medio del IF.</h1>
		
		<?php
			}
			else {
		?>
		
		<h1>Esto es HTML puesto por el medio del ELSE.</h1>
		
		<?php
				echo "Eres mayor de edad";
			}
		?>
	</body>
</html>