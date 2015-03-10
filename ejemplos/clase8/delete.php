<?php

require_once "../clase7/base_datos.php";
require_once "generadores.php";

cabeceraHTML("Borrar mensaje");

$db=conectaDb();
$dbTabla="comentarios";
$codigo=$_REQUEST["mensaje"];

$consulta = "DELETE FROM $dbTabla WHERE codigo=$codigo";

if ($db->query($consulta)) {
	print "<p>Mensaje borrado</p>\n";
} else {
	print "<p>Error al borrar.</p>\n";
}

$db = null;

print "<a href=\"formdelete.php\"> Volver a borrar </a>";

pieHTML();

?>