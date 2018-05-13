<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 3</title>
</head>
<body>
	<form action="#" method="post">
		<h1>EJERCICIO 3</h1>
		<label>presione el boton para calcular 10 numeros y decir cuantos son mayores a 0 y menores a 0</label>
	</form>
	<section>
		<?php
		$sum = 0;
		$subtraction = 0;
		    for ($i=0; $i < 10; $i++) { 
		    	$number = rand(-50,50);
		    	if($number > 0)
		    		$sum = $sum + 2;
		    	else
		    		$subtraction = $subtraction - 2;
		    }
		    echo "los numeros que son mayores a 0 son: ".$sum;
		    echo "los numeros que son menores a 0 son: ".$subtraction;
		    ?>
	</section>
</body>	
</html>