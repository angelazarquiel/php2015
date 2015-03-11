<?php

include_once("html.php");
include_once("basedatos.php");

             
        $db=conectarDB();
        $sql = "DELETE FROM comentarios WHERE codigo = ?";
        $q=$db->prepare($sql);
        if ($q->execute(array($_REQUEST['codigo']))) {
          header("Location: borrar.php");
        } else {
          print "Error al borrar";
        }
         
        $db=null;
    

?>