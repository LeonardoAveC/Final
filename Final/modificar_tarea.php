<?php
    include "modelo/conexion.php";
    $id_tarea = $_GET["id_tarea"];

    $sql = $conexion->query("SELECT * FROM tareas WHERE id_tarea = $id_tarea");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Tarea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form class="col-3 p-2 m-auto" method="POST">
        <h3 class="text-center text-secondary">Modificar Tarea</h3>
        <?php
        include "controlador/modificar_tarea_controlador.php";
        while($datos = $sql->fetch_object()) { ?>
            <div class="mb-2">
                <input type="hidden" class="form-control" name="id_tarea" value="<?= $_GET["id_tarea"] ?>" readonly>
            </div>
            <div class="mb-2">
                <label for="nombre_tarea" class="form-label">Nombre de la tarea</label>
                <input type="text" class="form-control" name="nombre_tarea" value="<?= $datos->nombre_tarea ?>">
            </div>
            <div class="mb-2">
                <label for="descripcion_tarea" class="form-label">Descripción de la tarea</label>
                <input type="text" class="form-control" name="descripcion_tarea" value="<?= $datos->descripcion_tarea ?>">
            </div>
            <div class="mb-2">
                <label for="fecha_ini" class="form-label">Fecha de inicio</label>
                <input type="date" class="form-control" name="fecha_ini" value="<?= $datos->fecha_ini ?>">
            </div>
            <div class="mb-2">
                <label for="fecha_final" class="form-label">Fecha final</label>
                <input type="date" class="form-control" name="fecha_final" value="<?= $datos->fecha_final ?>">
            </div>
            <div class="mb-2">
                <label for="encargado" class="form-label">Encargado</label>
                <input type="text" class="form-control" name="encargado" value="<?= $datos->encargado ?>">
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="btnregistrar" value="ok">Modificar Tarea</button>
        <?php } ?>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
