<?php

    if(!empty($_GET["id"])){
        $id=$_GET["id"];
        $sql=$conexion->query(" delete from proyectos where id=$id ");
        if ($sql==1) {
            echo"<div class='alert alert-success'>Proyecto eliminado correctamente</div>";
        } else {
            echo"<div class='alert alert-warning'>Error al eliminar proyecto</div>";
        }
    }

?>