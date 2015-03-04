<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>horas</title>
	</head>
	<body>
		<?php
		if ($_REQUEST['segundos']>0) {
			$horas=($_REQUEST['segundos']/3600);
			$minutos=($_REQUEST['segundos']%3600)/60;
			$segundos=($_REQUEST['segundos']%3600)%60;
print 'Resultado: ' . round($horas) . ' horas ' . round($minutos) . ' minutos ' . ($segundos) . ' segundos';
		} else {
			print '<p style "color:red,"> debes incluir valores positivos</p>';
		}
		?>

	</body>
</html>