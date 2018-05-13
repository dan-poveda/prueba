<!DOCTYPE html>
<html>
<head>
	<title> EJERCICIO 1 </title>
</head>
<body>
<h1> Actividad 1 </h1>
<form action="#" method="post">
<ul>
	<li><label> Ingrese el primer numero  </label>
	<input type="text" name="number1">
	
	<li><label> Ingrese el segundo numero </label>
	<input type="text" name="number2">
	
	<li><label> Ingrese el tercer numero </label>
	<input type="text" name="number3">
	
	<li><label> Ingrese el cuarto numero </label>
	<input type="text" name="number4">
	
	<li><label> Ingrese el quinto numero </label>
	<input type="text" name="number5">
	<button type="submit"> enviar</button>
</ul>
</form>
</li>
<section>
	<?php
	if(isset($_POST['number1'])!=""){
		$number1= $_POST['number1'];
		$number2= $_POST['number2'];
		$number3= $_POST['number3'];
		$number4= $_POST['number4'];
		$number5= $_POST['number5'];

		$adition = $number1+$number2+$number3+$number4+$number5;
		$average = $adition/5;
	
		echo "El promedio es: ".$average;
}
		
	?>
</section>
</body>	
</html>