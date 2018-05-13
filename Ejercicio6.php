<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 6</title>
</head>
<body> 
	<form action="#" method="post">
		<h1>EJERCICIO 6</h1>
		<br>
		<input type="text" name="number">
		<button type="submit">ENVIAR</button>
	</form>
	<section>
		<?php
		    if (isset($_POST['number'])!=""){
		    	$number = $_POST['number'];
		    	if ($number < 0)
		    		echo "el numero " .$number. "es negativo";
		    	else
		    		echo "el numero " .$number. "es positivo";
		    }
		?>    
	</section>	

</body>
</html>