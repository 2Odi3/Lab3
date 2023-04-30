<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Ejercicio 1</title>
</head>
<body>
  <div class="container my-4">
        <h1>Login</h1>
  </div>
  <form class="container my-4" method="post">
    <div class="mb-3">
      <label class="form-label">Nombres</label>
      <input name="nom" required type="text" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label class="form-label">Email</label>
      <input name="ema" required type="email" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary mb-3">Ingresar</button>
    <?php
      $nombre = $_POST['nom'];
      $email = $_POST['ema'];
      if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo '<div class="alert alert-primary" role="alert">Nombre: ' . $nombre . '<br>' . 'Email: ' . $email . '</div>';
      }
    ?>
  </div>
</form>
</body>
</html>
