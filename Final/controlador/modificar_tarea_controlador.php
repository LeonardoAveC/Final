<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["id_tarea"]) and !empty($_POST["nombre_tarea"]) and !empty($_POST["descripcion_tarea"]) and !empty($_POST["fecha_ini"]) and !empty($_POST["fecha_final"]) and !empty($_POST["encargado"])) {
        
        $id_tarea = $_POST["id_tarea"];
        $nombre_tarea = $_POST["nombre_tarea"];
        $descripcion_tarea = $_POST["descripcion_tarea"];
        $fecha_ini = $_POST["fecha_ini"];
        $fecha_final = $_POST["fecha_final"];
        $encargado = $_POST["encargado"];

        $sql = $conexion->query("UPDATE tareas SET nombre_tarea='$nombre_tarea', descripcion_tarea='$descripcion_tarea', fecha_ini='$fecha_ini', fecha_final='$fecha_final', encargado='$encargado' WHERE id_tarea=$id_tarea");
        
        if ($sql == 1) {
            header("location:tareas.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar</div>";
        }
        
    } else {
        echo "<div class='alert alert-warning'>Espacios sin completar</div>";
    }
}

?>
