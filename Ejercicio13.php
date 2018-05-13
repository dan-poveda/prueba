<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 13</title>
</head>
<body>
	<form action="#" method="post">
		<h1>EJERCICIO 13</h1>
		<br>
	</form>
	<section>
		<?php
		    $n1=0;
		    $n2=1;
		    for ($i=0; $i<20;$i++){
		    	$suma=$n1+$n2;
		    	$n1=$n2;
		    	$n2=$suma;
		    	echo $n2. "<br>";
		    }
		    ?>
	</section>
</body>
</html>		