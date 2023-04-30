<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas del Alumno</title>
    <!-- Incluimos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container my-4">
        <h1>Notas</h1>
        <form method="post">
            <div class="mb-3">
                <label for="nota1" class="form-label">Nota 1</label>
                <input type="number" class="form-control" id="nota1" name="nota1" required>
            </div>
            <div class="mb-3">
                <label for="nota2" class="form-label">Nota 2</label>
                <input type="number" class="form-control" id="nota2" name="nota2" required>
            </div>
            <div class="mb-3">
                <label for="nota3" class="form-label">Nota 3</label>
                <input type="number" class="form-control" id="nota3" name="nota3" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary mb-3">Calcular</button>
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nota1 = $_POST['nota1'];
                $nota2 = $_POST['nota2'];
                $nota3 = $_POST['nota3'];
                
                $promedio = ($nota1 + $nota2 + $nota3) / 3;
                
                if($promedio >= 13) {
                    echo '<div class="alert alert-success" role="alert">El alumno ha aprobado.</div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">El alumno ha reprobado.</div>';
                }
            }
        ?>
    </div>
</body>
</html>
