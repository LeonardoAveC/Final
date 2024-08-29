<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["puesto"]) && !empty($_POST["departamento"])) {
        
        $nombre = $_POST["nombre"];
        $puesto = $_POST["puesto"];
        $departamento = $_POST["departamento"];

        $sql = $conexion->query("INSERT INTO trabajadores (nombre, puesto, departamento) VALUES ('$nombre', '$puesto', '$departamento')");
        
        if ($sql == 1) {
            echo "<div class='alert alert-success'>Trabajador registrado correctamente</div>";
        } else {
            echo "<div class='alert alert-danger'>Error al registrar trabajador</div>";
        }
        
    } else {
        echo "<div class='alert alert-warning'>Por favor, complete todos los campos</div>";
    }
}

?>
