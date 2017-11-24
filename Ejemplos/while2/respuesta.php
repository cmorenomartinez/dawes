<html>
	<body>
		<table width=500px>
		<?php
			//Inicializamos el primer valor
			$a1=0;
			// Para cada uno de los valores de $a1 de cinco en cinco
			while ($a1<=255){
				// Inicializamos el segundo valor
				$a2 = 0;
				// Para cada uno de los valores de $a2 de cinco en cinco
				while ($a2<=255){
					// Principio de fila
					echo '<tr>';
					// Inicializamos el tercer valor
					$a3 = 0;
					// Para cada uno de los valores de $a3 de cinco en cinco
					while ($a3<=255){
						echo '<td style="background-color:RGB('.$a2.','.$a1.','.$a3.'); height=10px;"></td>';
						$a3 = $a3 + 5;
					}
					$a2 = $a2 + 5;
					// Fin de fila.
					echo '</tr>';
				}	
				$a1 = $a1 +5;
			}
		?>
		</table>
	</body>
</html>