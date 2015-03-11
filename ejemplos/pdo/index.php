<?php

include_once("html.php");

cabecera("Aplicación IAW");
?>
<div class="container">
  <div class="jumbotron">
    <h1>Bienvenido a la aplicación PHP de IAW 2015</h1>
    <p>Aplicación para demostración de operaciones básicas con bases de datos</p>
    <p>Ten en cuenta que por defecto se conecta a MySQL, base de datos 'desarrollo', usuario y clave 'angel'.</p>
    <p>Buscará la tabla <strong>comentarios(<u>codigo</u>,texto,fecha)</strong>.</p>
    <p><a class="btn btn-primary btn-lg" href="listado.php" role="button">¡¡Obten el listado!!</a></p>
  </div>
</div>

<?php
pie();
?>
 

