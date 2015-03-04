<?php

for($i=0;$i<=10;$i++) {

	print $i . "<br>";

}

print "<h1>Tabla del 2</h1>";
for($i=0;$i<=10;$i++) {
	
	print "2x" . $i . "=" . ($i*2) . "<br>";

}

print "<h1>Tabla del 2</h1>";
$multiplicacion=0;
for($i=0;$i<=10;$i++) {
	
	print "2x" . $i . "=" . $multiplicacion . "<br>";
	$multiplicacion+=2;

}

print "<h1>Fibonacci hasta 100</h1>";
$penultimo=1;
$ultimo=1;
print $penultimo . "<br>";
while ($ultimo<=100) {
	print $ultimo . "<br>";
	$nuevo=$penultimo+$ultimo;
	$penultimo=$ultimo;
	$ultimo=$nuevo;
}

print "<h1>Fibonacci hasta 100</h1>";
$y=0;
for ($i=1;$i<=100;$i=$x+$y) {
	$x=$y;
	$y=$i;
	print $i . "<br>";
}

for($p=1,$u=1;$u<=100;$p=$u,$u=$n) {
	print $u . "<br>";
	$n=$p+$u;
}


printf("Un número: %6d, otro: %d, y %.2f",6,7,5.6);













?>