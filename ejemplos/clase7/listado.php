<?php

require_once "base_datos.php";

$db=conectaDb();

print "<h1> Gestión de comentarios </h1>";

$consulta = "SELECT codigo,texto,fecha FROM `comentarios` ORDER BY fecha DESC LIMIT 2 ";
$result = $db->query($consulta);
if (!$result) {
	print "<p>Error en la consulta.</p>\n";
} else {
	print "<p>Comentarios</p>";
	print "<ul>";
	foreach ($result as $valor) {
		print "<li>Comentario número: $valor[codigo]";
		print "<p>$valor[texto]</p><strong>$valor[fecha]</strong>\n";
		print "</li>";
	}
	print "</ul>";
}

$db = null;

?>











