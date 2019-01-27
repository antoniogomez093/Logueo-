<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Logueo@</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  </head>
  <body>
    <h1>Bienvenido</h1>
    <p>Por favor proporcione sus credenciales para poder ingresar.</p>
    <div class="">
      <form class="" action="controller_login.php" method="post">
        <label for="">Email: </label><input type="email" name="email" value="" required>
        <br>
        <br>
        <label for="">Password: </label><input type="password" name="pass" value="" required>
        <input type="submit" class="btn btn-primary" name="entrar" value="Aceptar">
      </form>
      <br>
      <br>
      <label for="">Si todavía no se ha registrado puede hacerlo aquí. <a href="registro.php">Registrarse</a></label>
    </div>
  </body>
</html>
