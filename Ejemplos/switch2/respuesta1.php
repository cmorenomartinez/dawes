<html>
	<body>
		<?php
			// Recogemos el mes seleccionado.
			$mes=$_REQUEST['mes'];
			//Calculamos el numero de dias del mes.
			switch ($mes) {
				// 30 dias trae 'Noviembre' con 'Abril', 'Junio' y 'Septiembre'
				case 'Noviembre':
				case 'Abril':
				case 'Junio':
				case 'Septiembre':
					$dias=30;
				break;
					
				// 'Febrero' tiene 28.
				case 'Febrero':
					$dias=28;
				break;
				
				// El resto 31.
				default:
					$dias=31;
			}
			// Se muestra el mensaje indicando el numero de dias.
			echo $mes.' tiene '.$dias.' dias.';
		?>
	</body>
</html>