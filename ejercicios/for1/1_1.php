<pre>
<?php
//primera línea
// 2     3     4     5     6     7     8     9    10    11
for($i=2;$i<=11;$i++) {
	printf("%6d",$i);
}
print("\n");

for($i=1;$i<=10;$i++) {
	printf("%6d",$i+1);
}
print("\n");

//segunda línea
// 2     4     6     8    10    12    14    16    18
for($i=2;$i<=18;$i+=2) {
	printf("%6d",$i);
}
print("\n");

for($i=1;$i<=9;$i++) {
	printf("%6d",$i*2);
}
print("\n");

//tercera línea
//5     8    11    14    17    20    23    26    29    32
for($i=5;$i<=32;$i+=3) {
	printf("%6d",$i);
}
print("\n");

for($i=1;$i<=10;$i++) {
	printf("%6d",$i*3+2);
}
print("\n");

// 0     5    10    15    20    25
for($i=0;$i<=25;$i+=5) {
	printf("%6d",$i);
}
print("\n");

for($i=1;$i<=6;$i++) {
	printf("%6d",($i-1)*5);
}
print("\n");

// 8     6     4     2     0    -2    -4    -6    -8   -10
for($i=8;$i>=-10;$i-=2) {
	printf("%6d",$i);
}
print("\n");

for($i=1;$i<=10;$i++) {
	printf("%6d",(5-$i)*2);
}
print("\n");





?>
</pre>








