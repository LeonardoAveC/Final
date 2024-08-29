<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["id"]) && !empty($_POST["nombre"]) && !empty($_POST["puesto"]) && !empty($_POST["departamento"])) {
        
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $puesto = $_POST["puesto"];
        $departamento = $_POST["departamento"];

        $sql = $conexion->query("UPDATE trabajadores SET nombre='$nombre', puesto='$puesto', departamento='$departamento' WHERE id=$id");
        
        if ($sql == 1) {
            header("Location: trabajador.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar trabajador</div>";
        }
        
    } else {
        echo "<div class='alert alert-warning'>Por favor, complete todos los campos</div>";
    }
}

?>
