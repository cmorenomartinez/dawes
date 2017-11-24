<?php
	echo '<p><b>Probando $r=range(7,11); </b></p>';
	$r=range(7,11);
	foreach($r as $clave=>$valor){
		echo "Clave: ",$clave," Valor: ",$valor,"<br>";
	}
	
	echo '<p><b>Probando shuffle($r); </b></p>';
	srand (time());
	shuffle($r);
	foreach($r as $clave=>$valor){
		echo "Clave: ",$clave," Valor: ",$valor,"<br>";
	}

	echo '<p><b>Insertamos tres ceros al principio $r=array_unshift($r,0,0,0); </b></p>';
	array_unshift($r,0,0,0);
	foreach($r as $clave=>$valor){
		echo "Clave: ",$clave," Valor: ",$valor,"<br>";
	}
	
	echo '<p><b>Insertamos tres ceros al final $r=array_push($r,0,0,0); </b></p>';
	array_push($r,0,0,0);
	foreach($r as $clave=>$valor){
		echo "Clave: ",$clave," Valor: ",$valor,"<br>";
	}
	
	echo '<p><b>Creamos un array de ceros con array_pad($array,10,0); </b></p>';
	$array = array(0);
	array_pad($array,10,0);
	foreach($array as $clave=>$valor){
		echo "Clave: ",$clave," Valor: ",$valor,"<br>";
	}
?>