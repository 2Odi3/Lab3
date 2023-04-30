<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Ejercicio 3</title>
</head>
<body>
    <div class="container my-4">
        <h1>Calculadora</h1>
        <form method="post">
            <div class="form-group mb-3">
                <label for="num1">Número 1</label>
                <input type="number" class="form-control" id="num1" name="num1" required>
            </div>
            <div class="form-group mb-3">
                <label for="num2">Número 2</label>
                <input type="number" class="form-control" id="num2" name="num2" required>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Calcular</button>
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                if ($num2 == 0) {
                    echo '<div class="alert alert-danger" role="alert">Error: el segundo número no puede ser cero</div>';
                } else {
                    if ($num1 > $num2) {
                        $suma = $num1 + $num2;
                        $resta = $num1 - $num2;
                        echo '<div class="alert alert-success" role="alert">Suma: ' . $suma . ' / Diferencia: ' . $resta . '</div>';
                    } else {
                        $producto = $num1 * $num2;
                        $division = $num1 / $num2;
                        echo '<div class="alert alert-success mb-3" role="alert">Producto: ' . $producto . ' / División: ' . $division . '</div>';
                    }
                }
            }
        ?>
    </div>
</body>
</html>