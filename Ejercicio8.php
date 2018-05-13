<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 8</title>
</head>
<body>
	<form action="#" method="post">
		<h1>EJERCICIO 8</h1>
		<br>
		<input type="text" name="celsius">
		<button type="sumbit">ENVIAR</button>
	</form>
	<section>
		<?php
		    if (isset($_POST['celsius'])!=""){
		    $celsius = $_POST['celsius'];
		    $fahrenheit = ((9/5) * $celsius) + 32;
		    echo "los ".$celsius. "grados celsius son " .$fahrenheit. "grados fahrenheit";
		    }
		?>    
	</section>	

</body>
</html>