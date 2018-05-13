<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 11</title>
</head>
<body>
	<from action="#" method="post">
		<h1>EJERCICIO 11</h1>
	</from>	
	<section>
		<?php
		    $sum =2;
		    for ($i=2; $i < 100; $i++){
		    		$sum = $sum + 2;
		    	} 
		    echo "existen entre 1 y 100," .$sum. "numeros pares";
		    ?>
	</section>
</body>
</html>