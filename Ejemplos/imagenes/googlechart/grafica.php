<?php
	$aprobados = $_REQUEST['aprobados'];
	$suspensos = $_REQUEST['suspensos'];
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Calificacion', 'Num. Alumnos'],
          ['Aprobados',     <?php echo $aprobados; ?>],
          ['Suspensos',     <?php echo $suspensos; ?>]
        ]);

        var options = {
          title: 'Relación de Aprobados y Suspensos.',
          is3D: true,
		  colors: ['#28b463','#f7dc6f']
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 400px; height: 300px;"></div>
  </body>
</html>