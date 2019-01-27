<!DOCTYPE html>
<html>
<head>
	<title>Error al ingresar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<header>
		<div class="">
			<h1>Lo sentimos</h1>
		</div>
</header>

	<div class="">
		<h1><?php echo $_GET['mensaje'];?></h1>
		<a href="index.php">Volver a ingresar</a>
	</div>
</body>
</html>
