<?php

require_once "../clase7/base_datos.php";
require_once "generadores.php";

cabeceraHTML("Crear nuevo mensaje");


$db=conectaDb();
$dbTabla="comentarios";

$consulta = "SELECT * from $dbTabla";
$result=$db->query($consulta);

if (!$result) {
	print "<p>Error al recuperar mensajes.</p>\n";
} else {
	print "<p>Comentarios</p>";
	print "<form action=\"delete.php\" method=\"GET\">";
	foreach ($result as $valor) {
		print "<input type=\"radio\" name=\"mensaje\" value=\"$valor[codigo]\"";
		print "/> $valor[texto] ($valor[fecha])<br>\n";
	}
	print "<input type=\"submit\" value=\"Borrar\">";
	print "</form>";
}

$db = null;


pieHTML();

?>