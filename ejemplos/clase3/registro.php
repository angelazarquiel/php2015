<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registro de usuarios</title>
</head>
<body>
<h1>Usuario registrado con éxito</h1>
<?php
if (array_key_exists('nombre', $_REQUEST) && !($_REQUEST['nombre']=='')) {
	print 'Nombre: ' . $_REQUEST['nombre'] . '<br>';
	print 'Apellidos: ' . $_REQUEST['apellidos'] . '<br>';
	print 'Correo: ' . $_REQUEST['email'] . '<br>';
	print 'Password: ' . $_REQUEST['clave'] . '<br>'; 
	print 'Sexo: ';
	if ($_REQUEST["sexo"] == "Masculino") 
	   print 'Hombre';
	else 
	   print 'Mujer';
} else 
{
	print 'Faltan datos';
}
?>
</body>
</html>








