<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Ejercicio 2</title>
</head>
<body>
    <div class="container my-4">
        <h1>Calculadora</h1>
    </div>
    <form class="container my-4" method="post">
        <div class="mb-3">
        <label class="form-label">Número 1</label>
        <input name="nb1" type="number" class="form-control" aria-describedby="emailHelp">
        </div>
    
        <div class="mb-3">
        <label class="form-label">Número 2</label>
        <input name="nb2" type="number" class="form-control" aria-describedby="emailHelp">
        </div>
    
        <label class="form-label">Número 3</label>
        <input name="nb3" type="number" class="form-control" aria-describedby="emailHelp">
        </div>
    
        <div class="mb-3">
        <label class="form-label">Número 4</label>
        <input name="nb4" type="number" class="form-control" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Calcular</button>

        <?php
            $num1 = $_POST['nb1'];
            $num2 = $_POST['nb2'];
            $num3 = $_POST['nb3'];
            $num4 = $_POST['nb4'];

            $suma = $num1 + $num2;
            $producto = $num3 * $num4;
        ?>

        <div class="mb-3">
        <label class="form-label">Suma</label>
        <input name="an1" disabled type="text" class="form-control" aria-describedby="emailHelp" value="
        <?php
            echo $suma;
        ?>
        ">
        </div>

        <div class="mb-3">
        <label class="form-label">Producto</label>
        <input name="an2" disabled type="text" class="form-control" value="
        <?php
            echo $producto;
        ?>
        ">
        </div>
</body>
</html>