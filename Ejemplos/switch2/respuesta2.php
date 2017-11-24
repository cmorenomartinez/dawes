<html>
	<body>
		<?php
			// Recogemos el mes y el anio seleccionados.
			$mes=$_REQUEST['mes'];
			$anio=$_REQUEST['anio'];
			
			//Calculamos el numero de dias del mes.
			switch ($mes) {
				// 30 dias trae 'Noviembre' con 'Abril', 'Junio' y 'Septiembre'
				case 'Noviembre':
				case 'Abril':
				case 'Junio':
				case 'Septiembre':
					$dias=30;
				break;
					
				// 'Febrero' tiene 28 y si es bisiesto 29.
				case 'Febrero':
					$dias=28;
					// Calculamos si es bisiesto.
					if (($anio%4==0 && $anio%100!=0) || ($anio%400==0))
						$dias=29;
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