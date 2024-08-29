<?php

if (!empty($_GET["id_tarea"])) {
    $id_tarea = $_GET["id_tarea"];
    $sql = $conexion->query("DELETE FROM tareas WHERE id_tarea = $id_tarea");
    
    if ($sql == 1) {
        echo "<div class='alert alert-success'>Tarea eliminada correctamente</div>";
    } else {
        echo "<div class='alert alert-warning'>Error al eliminar tarea</div>";
    }
}

?>
