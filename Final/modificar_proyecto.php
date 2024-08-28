<?php
    include "modelo/conexion.php";
    $id = $_GET["id"];

    $sql = $conexion->query("SELECT * FROM proyectos WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form class="col-3 p-2 m-auto" method="POST">
        <h3 class="text-center text-secondary">Modificar Proyectos</h3>
        <?php
        include "controlador/modificar_proyecto_controlador.php";
        while($datos = $sql->fetch_object()) { ?>
            <div class="mb-2">
                <input type="hidden" class="form-control" name="id" value="<?= $_GET["id"] ?>" readonly>
            </div>
            <div class="mb-2">
                <label for="nombre" class="form-label">Nombre del proyecto</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
            </div>
            <div class="mb-2">
                <label for="descripcion" class="form-label">Descripción del proyecto</label>
                <input type="text" class="form-control" name="descripcion" value="<?= $datos->descripcion ?>">
            </div>
            <div class="mb-2">
                <label for="fecha_inicio" class="form-label">Fecha de inicio del proyecto</label>
                <input type="date" class="form-control" name="fecha_inicio" value="<?= $datos->fecha_inicio ?>">
            </div>
            <div class="mb-2">
                <label for="fecha_fin" class="form-label">Fecha final del proyecto</label>
                <input type="date" class="form-control" name="fecha_fin" value="<?= $datos->fecha_fin ?>">
            </div>
            <div class="mb-2">
                <label for="estado" class="form-label">Estado del proyecto</label>
                <input type="text" class="form-control" name="estado" value="<?= $datos->estado ?>">
            </div>
            <div class="mb-2">
                <label for="comentario" class="form-label">Comentarios del proyecto</label>
                <input type="text" class="form-control" name="comentario" value="<?= $datos->comentario ?>">
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="btnregistrar" value="ok">Modificar Proyecto</button>
        <?php } ?>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
