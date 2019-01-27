<?php
	session_start();
	if (!isset($_SESSION['email'])) {
		header('Location: index.php');
	}
	$tecato = $_POST['usuario'];
	$pecho = 'pechofrio';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tu Cuenta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<div class="">
		<h1>Bienvenue <?php echo $tecato ?> a tu cuenta.</h1>
		<?php
		$nombre = $_POST['email'];
		echo $nombre;
		 ?>
	</div>
	<p></p>
	<form class="" action="controller_login.php" method="post">
		<input type="submit" name="salir" value="Salir">
	</form>
</body>
</html>
