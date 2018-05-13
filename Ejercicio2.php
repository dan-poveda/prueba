<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 3</title>
</head>
<body>
	<form action="#" method="post">
		<h1>EJERCICIO 2</h1>
		<input type="text" name="number">
		<button type="text submit">enviar</button>
	</form>
	<section>
		<?php
		if (isset($_POST['number'])!="") {
			$number = $_POST ['number'];
			if ($number < 0)
			   echo "ERROR, el numero debe ser mayor que cero";
			   $potency = $number * $number;
			   echo "El promedio es: ".$potency 
		}
		?>
	</section>
</body>
</html>