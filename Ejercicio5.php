<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 5</title>
</head>
<body>
	<form action="#" method="post">
		<h1>EJERCICIO 5</h1>
		<label>escriba la base del triangulo</label>
		<br>
		<input type="text" name="base"><label>cm</label>
		<br>
		<label>escriba la altura del triangulo</label>
		<br>
		<input type="text" name="height"><label>cm</label>
		<br>
		<button type="sumbit">ENVIAR</button>
	</form>
	<section>
		<?php
		    if (isset($_POST['base'])!=""&& isset($_POST['height'])!=""){
		    	$base = $_POST['base'];
		    	$height = $_POST['height'];
		    	$surface = ($base * $height) / 2;
		    	echo "la superficie del triangulo es: " .$surface. "cm2";
		    }
		?>    
	</section>
</body>
</html>		