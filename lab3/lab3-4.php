<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Ejercicio 4</title>
</head>
<body>
<div class="container my-4">
        <h1>Número Mayor</h1>
        <form method="POST">
            <div class="form-group mb-3">
                <label for="num1">Primer número:</label>
                <input type="number" class="form-control" id="num1" name="num1" required>
            </div>
            <div class="form-group mb-3">
                <label for="num2">Segundo número:</label>
                <input type="number" class="form-control" id="num2" name="num2" required>
            </div>
            <div class="form-group mb-3">
                <label for="num3">Tercer número:</label>
                <input type="number" class="form-control" id="num3" name="num3" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Calcular</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            $mayor = $num1;
            if ($num2 > $mayor) {
                $mayor = $num2;
            }
            if ($num3 > $mayor) {
                $mayor = $num3;
            }
            echo '<div class="alert alert-success mt-3" role="alert">El número mayor es: ' . $mayor . '</div>';
        }
        ?>
    </div>
</body>
</html>