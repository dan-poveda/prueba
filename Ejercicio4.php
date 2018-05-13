<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 4</title>
</head>
<body>
	<form action="#" method="post">
		<h1> EJERCICIO 4</h1>
		<input type="text" name="radius">
		<button type="submit">ENVIAR</button>
	</form>
	    <section>
	        <?php
	            if (isset($_POST['radius'])!=''){
	          	    $radius = $_POST['radius'];
	          	    $area = ((3.1416) * ($radius * $radius));
	          	    $length = (2 * (3.1416 * $radius));
	          	    echo "el area del radio dado es: " .$area. "y la circunferencia es: " .$length;
	            }	
	        ?>
	    </section>
</body>
</html>	            