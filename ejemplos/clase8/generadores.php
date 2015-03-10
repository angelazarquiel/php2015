<?php

function cabeceraHTML($titulo) {
	print "<!DOCTYPE html>\n<html>\n";
	print "<head>\n";
	print "<meta charset=\"utf-8\">\n";
	print "<title>$titulo</title>\n";
	print "</head>\n";
	print "<body>\n";
}


function pieHTML() {
   print "</body>\n";
   print "</html>";
}


?>