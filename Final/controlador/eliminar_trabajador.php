<?php
    include "modelo/conexion.php";

    if (!empty($_GET["id"])) {
        $id = $_GET["id"];
        $sql = $conexion->query("DELETE FROM trabajadores WHERE id = $id");
        
        if ($sql) {
            echo "<div class='alert alert-success'>Trabajador eliminado correctamente</div>";
        } else {
            echo "<div class='alert alert-warning'>Error al eliminar trabajador</div>";
        }
    }
?>
