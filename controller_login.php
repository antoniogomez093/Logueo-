<?php
  ini_set('display_errors', 'On');
	require_once('usuario.php');
	require_once('crud_usuario.php');
	require_once('Conn.php');

	//inicio de sesion
	session_start();

	$usuario=new Usuario();
	$crud=new CrudUsuario();
	//Verificamos si la variable registrarse esta definida, enviada desde el formulario de registro con el boton.
	//Se da que está definicda cuando el usuario se registra, ya que la envía en la petición.
	if (isset($_POST['registrarse'])) {
		$usuario->setEmail($_POST['email']);
		$usuario->setPass($_POST['pass']);
		if ($crud->buscarUsuario($_POST['email'])) { //Buscamos el usuario si ya existe en la base de datos.
			$crud->insertar($usuario); // Si no existe lo insertamos.
			header('Location: index.php');
		}else{ // Si existe se le notifica al cliente que dicho usuario ya existe.
			header('Location: error.php?mensaje=El nombre de usuario ya existe en nuestro sistema.');
		}

	}elseif (isset($_POST['entrar'])) { //Verificamos si la variable entrar está definida.
		$usuario=$crud->obtenerUsuario($_POST['email'],$_POST['pass']);
		// si el id del objeto retornado no es null, quiere decir que encontro un registro en la base
		if ($usuario->getId()!=NULL) {
			$_SESSION['email']=$usuario; //Si el usuario se encuentra, crea la sesión de usuario.
			header('Location: cuenta.php'); //envia a la página que simula la cuenta
		}else{
			header('Location: error.php?mensaje=Tu nombre de usuario o clave son incorrectos.'); // cuando los datos son incorrectos envia a la página de error
		}
	}elseif(isset($_POST['salir'])){ // cuando presiona el botòn salir
		header('Location: index.php');
		unset($_SESSION['email']); //destruye la sesión
	}
?>
