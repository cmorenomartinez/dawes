<html>
	<body>
		<table border="1">
		
		<?php
			// Recuperamos la cantidad y el porcentaje de IVA.
			$cantidad=$_REQUEST['cantidad'];
			$porcentajeIVA=$_REQUEST['porcentajeIVA'];
			// Calculamos la cantidad de IVA y el total a pagar
			$montanteiva = $cantidad * $porcentajeIVA/100;
			$total = $cantidad + $montanteiva;
			// Mostramos la informacion
			echo '<tr><td width="150px">Cantidad</td><td align="right" width="150px">'.number_format($cantidad,2).'&euro;</td></tr>';
			echo '<tr><td>IVA('.$porcentajeIVA.')%</td><td align="right">'.number_format($montanteiva,2).'&euro;</td></tr>';
			echo '<tr><td>Total a Pagar</td><td align="right">'.number_format($total,2).'&euro;</td></tr>';
		?>
	</body>
</html>