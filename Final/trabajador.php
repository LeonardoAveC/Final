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
        
        .table thead th {
            background-color: #fd7e14; 
            color: #333; 
        }
        
        .table tbody tr:hover {
            background-color: #f1f1f1;
        }
        
        .table {
            border-collapse: collapse;
        }
        .table th, .table td {
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
        <?php
        include "modelo/conexion.php";
        ?>
    <h1 class="text-center p-3">Trabajadores Máster Plan</h1>
    <a href="central.php" class="btn btn-secondary btn-back">Regresar a Central</a>
    <div class="container-fluid row">
        <form class="col-3 p-2" method="POST">
            <h3 class="text-center text-secondary">Registro de Trabajadores</h3>
            <?php
            include "controlador/registro_trabajador.php";
            include "controlador/eliminar_trabajador.php";
            ?>
            <div class="mb-2">
                <label for="id" class="form-label">ID de trabajador</label>
                <input type="text" class="form-control" name="id">
            </div>
            <div class="mb-2">
                <label for="nombre" class="form-label">Nombre del trabajador</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-2">
                <label for="desc" class="form-label">Puesto</label>
                <input type="text" class="form-control" name="puesto">
            </div>
            <div class="mb-2">
                <label for="fechaini" class="form-label">Departamento</label>
                <input type="text" class="form-control" name="departamento">
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="btnregistrar" value="ok">Registrar </button>
        </form>

        <div class="col-9 p-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("SELECT * FROM trabajadores");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->id ?></td>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->puesto ?></td>
                            <td><?= $datos->departamento ?></td>
                            <td>
                            <div class="btn-group">
                                    <a href="modificar_trabajador.php?id=<?= $datos->id?>" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i> Editar
                                    </a>
                                    <a href="trabajador.php?id=<?= $datos->id?>" class="btn btn-danger btn-sm">
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