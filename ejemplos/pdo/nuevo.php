<?php

include_once("html.php");
include_once("basedatos.php");

  $alert=null;

    if ( !empty($_POST)) {
         
        // tomar valores
        $texto = $_REQUEST['texto'];
        $fecha = $_REQUEST['fecha'];
         
        $db=conectarDB();
        $sql = "SELECT MAX(codigo) FROM comentarios";
        $result = $db->query($sql);
        $codigo= $result->fetchColumn();
        $codigo++;

        // insert
        $sql = "INSERT INTO comentarios (codigo,texto,fecha) values(?, ?, ?)";
        $q = $db->prepare($sql);
        if ($q->execute(array($codigo,$texto,$fecha))) {
          header("Location: listado.php");
        } else {
          $alert="Los datos son incorrectos, no se ha podido realizar la inserción";
        }
         
        $db=null;
    }

cabecera("Nuevo mensaje");
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
             <h3>Nuevo mensaje</h3>
             </div>
             <div class="row">
                    <form class="form-horizontal" action="nuevo.php" method="post">
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Texto</label>
                        <div class="col-sm-10">
                            <input name="texto" type="text"  placeholder="mensaje..." value="" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Fecha</label>
                        <div class="col-sm-10">
                            <input name="fecha" type="date" placeholder="fecha..." value="" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Crear</button>
                          <a class="btn btn-default" href="index.php">Descartar</a>
                        </div>
                      </div>
                    </form>
              </div>
                 
    </div> <!-- /container -->
<?php

pie();

?>