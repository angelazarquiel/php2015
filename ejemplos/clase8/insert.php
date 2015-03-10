<?php

require_once "../clase7/base_datos.php";
require_once "generadores.php";

cabeceraHTML("Crear nuevo mensaje");

$db=conectaDb();
$dbTabla="comentarios";

$consulta = "SELECT MAX(codigo) from $dbTabla";
$result=$db->query($consulta);
$codigomaximo = $result->fetchColumn();
$codigomaximo++;

$consulta = "INSERT INTO $dbTabla (codigo,texto,fecha)" .
 "VALUES ($codigomaximo,:texto,:fecha)";

$result = $db->prepare($consulta);
if ($result->execute(array(
		 ":texto" => $_REQUEST['texto'],
		 ":fecha" => $_REQUEST['fecha']))
)
 {
	print "<p>Registro creado correctamente.</p>\n";
} else {
	print "<p>Error al crear el registro.<p>\n";
}

$db = null;

pieHTML();

?>