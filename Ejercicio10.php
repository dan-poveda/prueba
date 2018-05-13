<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 10</title>
</head>
<body>
	<from action="#" method="post">
		<h1>EJERCICIO 10</h1>
	</from>	
	<section>
		<?php
		    $sum =0;
		    for ($i=0; $i < 100; $i++){
		    	if ($i % 2) {
		    		echo $i. ",";
		    		$sum = $sum + 1;
		    	}
		    } 
		    echo "existen entre 1 y 100," .$sum. "numeros impares";
		    ?>
	</section>
</body>
</html>	