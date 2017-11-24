<?php
	// Obtenemos el voto
	$voto = $_REQUEST['voto'];
	// Abrimos el fichero en modo actualizacion (a) y añadimos el voto
	$fichero = fopen('datos.dat','a');
	// Debemos, ademas de incluir el nombre del equipo \r\n para que salte
	// a la siguiente linea
	fputs($fichero,"\r\n".$voto);
	// Cerramos el fichero
	fclose($fichero);
	// Inicializamos el array asociativo que contendra el resultado de las votaciones
	$votos = ['Real Madrid' => 0, 'Barcelona' => 0, 'Atletico de Madrid' => 0,
	 				'Valencia' => 0, 'Otros' => 0];
	// Abrimos el fichero en modo solo lectura (r)
	$fichero = fopen('datos.dat','r');
	// Recorremos el fichero introducciendo la informacion
	while (!feof($fichero)) {
		// Leo la lina que contiene el equipo
		$equipo = trim(fgets($fichero));
		// Contabilizamos el voto
		$votos[$equipo] = $votos[$equipo] + 1;
	}
	// Cerramos el fichero
	fclose($fichero);
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Equipo', 'Num. Alumnos'],
          ['Real Madrid, F.C.',     <?php echo $votos['Real Madrid']; ?>],
		  ['F.C. Barcelona',     <?php echo $votos['Barcelona']; ?>],
		  ['Valencia, F.C.',     <?php echo $votos['Valencia']; ?>],
		  ['Atlético de Madrid',     <?php echo $votos['Atletico de Madrid']; ?>],
		  ['Otros',     <?php echo $votos['Otros']; ?>]
        ]);

        var options = {
          title: '¿Quien ganará la Liga?',
          is3D: true,
		  colors: ['#bfc9ca', '#1a5276', '#f39c12', '#e74c3c', '#212f3c']
        };

        var chart = new google.visualization.PieChart(document.getElementById('grafico'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="grafico" style="width: 600px; height: 300px;"></div>
  </body>
</html>