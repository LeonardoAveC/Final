<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .btn-group-vertical .btn {
            width: 100%;
            margin-bottom: 5px;
        }
        form {
            font-size: 0.9rem;
        }
        .form-label {
            margin-bottom: 0.25rem;
        }
        .form-control {
            padding: 0.4rem;
        }
        .btn-group {
            display: flex;
            gap: 5px;
        }
        table {
            font-size: 0.9rem;
        }
        .btn-back {
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
</head>
<body>
        <?php
        include "modelo/conexion.php";
        ?>
    <h1 class="text-center p-3">Tareas Master Plan</h1>
    <a href="central.php" class="btn btn-secondary btn-back">Regresar a Central</a>
    <div class="container-fluid row">
        <form class="col-3 p-2" method="POST">
            <h3 class="text-center text-secondary">Registro de tareas</h3>
            <?php
            include "controlador/registro_tarea.php";
            include "controlador/eliminar_tarea.php";
            ?>
            <div class="mb-2">
                <label for="id" class="form-label">ID de la tarea</label>
                <input type="text" class="form-control" name="id_tarea">
            </div>
            <div class="mb-2">
                <label for="nombre" class="form-label">Nombre de la tarea</label>
                <input type="text" class="form-control" name="nombre_tarea">
            </div>
            <div class="mb-2">
                <label for="desc" class="form-label">Descripción de la tarea</label>
                <input type="text" class="form-control" name="descripcion_tarea">
            </div>
            <div class="mb-2">
                <label for="fechaini" class="form-label">Fecha inicio</label>
                <input type="date" class="form-control" name="fecha_ini">
            </div>
            <div class="mb-2">
                <label for="fechafin" class="form-label">Fecha final</label>
                <input type="date" class="form-control" name="fecha_final">
            </div>
            <div class="mb-2">
                <label for="estado" class="form-label">Encargado</label>
                <input type="text" class="form-control" name="encargado">
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="btnregistrar" value="ok">Registrar Tarea</button>
        </form>

        <div class="col-9 p-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Fecha Inicio</th>
                        <th scope="col">Fecha Fin</th>
                        <th scope="col">Encargado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("SELECT * FROM tareas");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->id_tarea ?></td>
                            <td><?= $datos->nombre_tarea ?></td>
                            <td><?= $datos->descripcion_tarea ?></td>
                            <td><?= $datos->fecha_ini ?></td>
                            <td><?= $datos->fecha_final ?></td>
                            <td><?= $datos->encargado ?></td>
                            <td>
                            <div class="btn-group">
                                    <a href="modificar_tarea.php?id_tarea=<?= $datos->id_tarea?>" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i> Editar
                                    </a>
                                    <a href="tareas.php?id_tarea=<?= $datos->id_tarea?>" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i> Eliminar
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>