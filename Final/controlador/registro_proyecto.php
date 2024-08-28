<?php

if (!empty($_POST["btnregistrar"])){
    if (!empty($_POST["id"]) and !empty($_POST["nombre"]) and !empty($_POST["descripcion"]) and !empty($_POST["fecha_inicio"]) and !empty($_POST["fecha_fin"]) and !empty($_POST["estado"]) and !empty($_POST["comentario"])){

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $fecha_inicio = $_POST["fecha_inicio"];
        $fecha_fin = $_POST["fecha_fin"];
        $estado = $_POST["estado"];
        $comentario = $_POST["comentario"];

        $sql=$conexion->query(" insert into proyectos(id,nombre,descripcion,fecha_inicio,fecha_fin,estado,comentario)values('$id','$nombre','$descripcion','$fecha_inicio','$fecha_fin','$estado','$comentario') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Proyecto registrado de manera correcta</div>';
        } else {
            
        }
        

    }else{
        echo '<div class="alert alert-warning">Alguno de los campos esta sin completar</div>';
    }
}

?>