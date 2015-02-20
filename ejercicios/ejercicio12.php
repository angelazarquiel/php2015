<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejemplo3</title>
	<link rel="stylesheet" href="">
</head>
<body>
<h1>Indice de masa corporal</h1>
<?php
$peso = $_REQUEST['peso'];
$altura = $_REQUEST['altura'];
$altura = $altura/100.0; 
$masa = round($peso / ($altura * $altura),2);
print 'Con un peso de ' . $peso . 'kg y una altura de ' . $altura . "cm, su indice de masa corporal es de " . $masa;
if ($masa <19 ) {
	print "<p>Tines más extrema delgadez, come mucho mas.</p>";
} elseif ($masa >= 19 && $masa <= 24){
	print "<p>Tines una extrema delgadez, come mas.</p>";
} elseif ($masa >= 25 && $masa <= 29){
	print "<p>Tines una complexión normal, sigue asi.</p>";
} else {
	print "<p>Tines sobrepeso, sal a correr.</p>";
}
?>
</body>
</html>