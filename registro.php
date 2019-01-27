<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  </head>
  <body>
    <h1>Porfavor proporcione sus datos para crear una cuenta.</h1>

    <div class="">
      <form class="" action="controller_login.php" method="post">


        <label for="">Email: </label> <input type="email" name="email" value="" required>
        <label for="">Password: </label> <input type="password" name="pass" value="" required>
        <input type="submit" name="registrarse" value="Crear Cuenta">
      </form>
      <br>
      <label for="">Ya tengo una cuenta gracias. <a href="index.php">Login</a></label>
    </div>

  </body>
</html>
