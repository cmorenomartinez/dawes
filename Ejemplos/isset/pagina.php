<html>
	<body>
		<?php
			// Funcion pintaformulario(). Muestra el codigo HTML 
			// del formulario
			function pintaformulario() {
		?>
		<!-- Definimos el codigo HTML del formulario -->
		<form action="pagina.php" method="GET">
		<input type="hidden" name="paso" value="1">
		<table>
			<tr>
				<td>Nombre y Apellidos</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="Enviar"> 
					<input type="reset" value="Borrar">
				</td>
			</tr>
		</table>
		</form>
		<?php
			}
			
			// Si el parametro valor esta definido.
			if (isset($_REQUEST['paso'])){
				// Damos la respuesta
				if ($_REQUEST['nombre']!='') {
					$nombre=$_REQUEST['nombre'];
					echo 'Nombre: '.$nombre;
				}
				else {
					echo '<p>Cadena "nombre" vacia.</p>';
					pintaformulario();
				}
			}
			else {
			// Mostramos el formulario inicial
				pintaformulario();
			}
		?>
	</body>
</html>