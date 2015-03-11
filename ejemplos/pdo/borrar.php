<?php

include_once("html.php");
include_once("basedatos.php");

cabecera("Aplicación IAW");
?>

<div class="container">
            <div class="row">
                <h1>Listado de comentarios almacenados</h1>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Codigo</th>
                      <th>Mensaje</th>
                      <th>Fecha</th>
                      <th>Acción</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   $pdo = conectarDB();
                   $result = $pdo->query('SELECT * FROM comentarios ORDER BY codigo DESC');
                   if (!$result) {
                      print "<p>Error en la consulta.</p>\n";
                    } else {
                        foreach ($result as $row) {
                            print '<tr>';
                            print '<td>'. $row['codigo'] . '</td>';
                            print '<td>'. $row['texto'] . '</td>';
                            print '<td>'. $row['fecha'] . '</td>';
                            print '<td><a class="btn btn-danger" href="delete.php?codigo='.$row['codigo'].'">Borrar</a></td>';
                            print '</tr>';
                      }
                    }
                   $pdo=null;
                  ?>
                  </tbody>
            </table>
        </div>
<?php

pie();

?>
