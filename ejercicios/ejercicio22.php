<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejercicio 2</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
	if ($_REQUEST['pies']>=0 && $_REQUEST['pulgadas']>=0) {
		$centimetros=($_REQUEST['pulgadas']+$_REQUEST['pies']*12)*2.54;
		print 'Resultado: ' . round($centimetros,2) . 'cm';
	} else {
		print '<p style="color:red;">Debes incluir valores positivos o cero</p>';
	}
?>
</body>
</html>