<?php

if (!empty($_POST["btnregistrar"])){
    if (!empty($_POST["id_tarea"]) and !empty($_POST["nombre_tarea"]) and !empty($_POST["descripcion_tarea"]) and !empty($_POST["fecha_ini"]) and !empty($_POST["fecha_final"]) and !empty($_POST["encargado"])){

        $id_tarea = $_POST["id_tarea"];
        $nombre_tarea = $_POST["nombre_tarea"];
        $descripcion_tarea = $_POST["descripcion_tarea"];
        $fecha_ini = $_POST["fecha_ini"];
        $fecha_final = $_POST["fecha_final"];
        $encargado = $_POST["encargado"];

        $sql=$conexion->query(" insert into Tareas(id_tarea,nombre_tarea,descripcion_tarea,fecha_ini,fecha_final,encargado)values('$id_tarea','$nombre_tarea','$descripcion_tarea','$fecha_ini','$fecha_final','$encargado') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Tarea registrada de manera correcta</div>';
        } else {
            
        }
        

    }else{
        echo '<div class="alert alert-warning">Alguno de los campos esta sin completar</div>';
    }
}

?>