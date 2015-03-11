<?php

include_once("html.php");
include_once("basedatos.php");

  $alert=null;

    if ( !empty($_POST)) {
   
        // tomar valores
        $codigo = $_REQUEST['codigo'];
        $texto = $_REQUEST['texto'];
        $fecha = $_REQUEST['fecha'];
         
        $db=conectarDB();

        // insert
        $sql = "UPDATE comentarios SET texto=?,fecha=? WHERE codigo=?";
        $q = $db->prepare($sql);
        if ($q->execute(array($texto,$fecha,$codigo))) {
          $alert="Actualización correcta";
        } else {
          $alert="Actualización no se ha realizado";
        }
         
        $db=null;
    }

cabecera("Nuevo mensaje");

$codigo=null;
$fecha=null;
$texto=null;
$pdo = conectarDB();
$result = $pdo->query('SELECT * FROM comentarios WHERE codigo='. $_REQUEST['codigo']);
if (!$result) {
  print "<p>Error en la consulta.</p>\n";
} else {
    foreach ($result as $row) {
        $codigo=$row['codigo'];
        $texto=$row['texto'];
        $fecha=$row['fecha'];
  }
}

?>

    <div class="container">
    		<?php
               if (!empty($alert)) {
                ?>
                  <div class="alert alert-danger" role="alert"> <?php print $alert ?></div>
                <?php
                }
             ?>
             <div class="row">
             <h3>Mensaje a Modificar</h3>
             </div>
             <div class="row">
                    <form class="form-horizontal" action="update.php" method="post">
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Codigo</label>
                        <div class="col-sm-10">
                            <input readonly name="codigo" type="number" value="<?php print $codigo; ?>" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Texto</label>
                        <div class="col-sm-10">
                            <input name="texto" type="text"  placeholder="mensaje..." value="<?php print $texto; ?>" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Fecha</label>
                        <div class="col-sm-10">
                            <input name="fecha" type="date" placeholder="fecha..." value="<?php print $fecha; ?>" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-warning">Actualizar</button>
                          <a class="btn btn-default" href="index.php">Volver</a>
                        </div>
                      </div>
                    </form>
              </div>
                 
    </div> <!-- /container -->
<?php

pie();

?>