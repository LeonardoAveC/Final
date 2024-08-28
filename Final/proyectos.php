<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos CRUD</title>
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
    </style>
</head>
<body>
    <h1 class="text-center p-3">Proyectos Master</h1>
    <div class="container-fluid row">
        <form class="col-3 p-2" method="POST">
            <h3 class="text-center text-secondary">Registro de proyectos</h3>
            <?php
            include "modelo/conexion.php";
            include "controlador/registro_proyecto.php";
            ?>
            <div class="mb-2">
                <label for="id" class="form-label">ID del proyecto</label>
                <input type="text" class="form-control" name="id">
            </div>
            <div class="mb-2">
                <label for="nombre" class="form-label">Nombre del proyecto</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-2">
                <label for="desc" class="form-label">Descripción del proyecto</label>
                <input type="text" class="form-control" name="descripcion">
            </div>
            <div class="mb-2">
                <label for="fechaini" class="form-label">Fecha de inicio del proyecto</label>
                <input type="date" class="form-control" name="fecha_inicio">
            </div>
            <div class="mb-2">
                <label for="fechafin" class="form-label">Fecha final del proyecto</label>
                <input type="date" class="form-control" name="fecha_fin">
            </div>
            <div class="mb-2">
                <label for="estado" class="form-label">Estado del proyecto</label>
                <input type="text" class="form-control" name="estado">
            </div>
            <div class="mb-2">
                <label for="comentarios" class="form-label">Comentarios del proyecto</label>
                <input type="text" class="form-control" name="comentario">
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="btnregistrar" value="ok">Registrar Proyecto</button>
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
                        <th scope="col">Estado</th>
                        <th scope="col">Comentarios</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("SELECT * FROM proyectos");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->id ?></td>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->descripcion ?></td>
                            <td><?= $datos->fecha_inicio ?></td>
                            <td><?= $datos->fecha_fin ?></td>
                            <td><?= $datos->estado ?></td>
                            <td><?= $datos->comentario ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i> Editar
                                    </a>
                                    <a href="" class="btn btn-danger btn-sm">
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

