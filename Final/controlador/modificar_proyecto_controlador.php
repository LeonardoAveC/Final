<?php

    if (!empty($_POST["btnregistrar"])) {
        if (!empty($_POST["id"]) and !empty($_POST["nombre"]) and !empty($_POST["descripcion"]) and !empty($_POST["fecha_inicio"]) and !empty($_POST["fecha_fin"]) and !empty($_POST["estado"]) and !empty($_POST["comentario"])) {
            
            $id=$_POST["id"];
            $nombre=$_POST["nombre"];
            $descripcion=$_POST["descripcion"];
            $fecha_inicio=$_POST["fecha_inicio"];
            $fecha_fin=$_POST["fecha_fin"];
            $estado=$_POST["estado"];
            $comentario=$_POST["comentario"];

            $sql=$conexion->query(" update proyectos set nombre='$nombre', descripcion='$descripcion', fecha_inicio='$fecha_inicio', fecha_fin='$fecha_fin', estado='$estado', comentario='$comentario' where id=$id");
            if ($sql==1) {
                header("location:proyectos.php");
            } else {
                echo"<div class='alert alert-danger'>Error al modificar</div>";
            }
            
        }else {
            echo"<div class='alert alert-warning'>Espacios sin completar</div>";
        }
    }

?>