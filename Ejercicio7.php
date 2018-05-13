<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 7</title>
</head>
<body>
	<form action="#" method="post">
		<h1>EJERCICIO 7</h1>
		<br>
		<input type="text" name="number">
		<button type="submit">ENVIAR</button>
	</form>
	<section>
		<?php
		    if (isset($_POST['number'])!=""){
		    	$number = $_POST['number'];
		    	if ($number % 2)
		    		echo "el numero " .$number. "es impar";
		    	else
		    		echo "el numero " .$number. "es par";
		    }
		?>    
	</section>	

</body>
</html>