<?php

$vector = array(1,2,3,4,5,6);

$vector[3]=7;

foreach ($vector as $n) {
	print "<p>$n</p>\n";
}


for($i=0;$i<count($vector);$i++) {
	print "<p>$vector[$i]</p>";
}

?>