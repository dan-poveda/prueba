<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 9</title>
</head>
<body>
    <form action="#" method="post">	
	    <h1> EJERCICIO 9</h1>
	    <input type="text" name="cm">
	    <button type="sumbit">enviar</button>
</form>
<section>
	<?php
	$ft = 0;
	$inch = 0;
	if (isset($_POST['cm'])!="") {
		$cm = $_POST['cm'];
		$ft = $cm / 30.48;
		$inch = $cm / 2.54;
		echo "los ".$cm. " centimetros colocados son " .$ft. " en pies y " . $inch . " en pulgadas ";
	}
	?>
</section>	    
</body>
</html>
