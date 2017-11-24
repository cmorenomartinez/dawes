<html>
	<body>
		<?php
			$numero=$_REQUEST['numero'];
			if ($numero==0) {
		?>
		
			<font color="red"> El n&uacute;mero es cero.</font>

		<?php	
			}
			elseif ($numero%2==0) {
		?>
			<font color="blue"> El n&uacute;mero es par.</font>
		
		<?php
			}
			else {
		?>		
			<font color="green"> El n&uacute;mero es impar.</font>
			
		<?php } ?>
		
	</body>
</html>