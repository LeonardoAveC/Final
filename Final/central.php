<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Plan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }
        .container {
            text-align: center;
        }
        h1 {
            font-size: 4rem;
            margin-bottom: 3rem;
            color: #343a40;
        }
        .btn-custom {
            width: 200px;
            height: 60px;
            border-radius: 30px;
            font-size: 1.5rem;
            margin: 10px;
        }
        .btn-proyectos {
            background-color: #5bc0de;
            color: white;
        }
        .btn-tareas {
            background-color: #ffc107;
            color: white;
        }
        .btn-trabajadores {
            background-color: #fd7e14;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Master Plan</h1>
        <div>
            <a href="proyectos.php" class="btn btn-custom btn-proyectos">Proyectos</a>
            <a href="tareas.php" class="btn btn-custom btn-tareas">Tareas</a>
            <a href="trabajadores.php" class="btn btn-custom btn-trabajadores">Trabajadores</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
