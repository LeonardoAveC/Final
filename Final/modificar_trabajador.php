<?php
    include "modelo/conexion.php";

    if (isset($_GET["id"]) && !empty($_GET["id"])) {
        $id = intval($_GET["id"]); 

        
        $sql = $conexion->query("SELECT * FROM trabajadores WHERE id = $id");

        if (!$sql) {
            
            die("Error en la consulta: " . $conexion->error);
        }
    } else {
        
        die("ID no proporcionado.");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Trabajador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form class="col-3 p-2 m-auto" method="POST">
        <h3 class="text-center text-secondary">Modificar Trabajador</h3>
        <?php
        include "controlador/modificar_trabajador_controlador.php";
        while($datos = $sql->fetch_object()) { ?>
            <div class="mb-2">
                <input type="hidden" class="form-control" name="id" value="<?= htmlspecialchars($_GET["id"]) ?>" readonly>
            </div>
            <div class="mb-2">
                <label for="nombre" class="form-label">Nombre del trabajador</label>
                <input type="text" class="form-control" name="nombre" value="<?= htmlspecialchars($datos->nombre) ?>">
            </div>
            <div class="mb-2">
                <label for="puesto" class="form-label">Puesto</label>
                <input type="text" class="form-control" name="puesto" value="<?= htmlspecialchars($datos->puesto) ?>">
            </div>
            <div class="mb-2">
                <label for="departamento" class="form-label">Departamento</label>
                <input type="text" class="form-control" name="departamento" value="<?= htmlspecialchars($datos->departamento) ?>">
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="btnregistrar" value="ok">Modificar Trabajador</button>
        <?php } ?>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>

