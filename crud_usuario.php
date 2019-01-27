<?php
	require_once('Conn.php');
	require_once('usuario.php');

	class CrudUsuario{

		public function __construct(){}

		//inserta los datos del usuario
		public function insertar($usuario){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO Usuario VALUES(null,null,null,:emailusuario, :psdusuario)');
			$insert->bindValue('emailusuario',$usuario->getEmail());
			//Encriptamos la contrasena.
			$pass=password_hash($usuario->getPass(),PASSWORD_DEFAULT);
			$insert->bindValue('psdusuario',$pass);
			$insert->execute();
		}

		//Recuperamos el usuario para el logueo.
		public function obtenerUsuario($nombre, $clave){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM Usuario WHERE emailusuario=:emailusuario');//Y clave=:clave
			$select->bindValue('emailusuario',$nombre);
			$select->execute();
			$registro=$select->fetch();
			$usuario=new Usuario();
			//Verificamos si la clave es correcta. La funcion password_verify.
			if (password_verify($clave, $registro['psdusuario'])) {
				//Si es correcta, asignamos los valores que traemos desde la base de datos.
				$usuario->setId($registro['idusuario']);
				$usuario->setEmail($registro['emailusuario']);
				$usuario->setPass($registro['psdusuario']);
			}
			return $usuario;
		}

		//Busca el email del usuario si existe. Para no duplicar cuentas de usuario.
		public function buscarUsuario($nombre){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM Usuario WHERE emailusuario=:emailusuario');
			$select->bindValue('emailusuario',$nombre);
			$select->execute();
			$registro=$select->fetch();
			if($registro['idusuario']!=NULL){
				$usado=False;
			}else{
				$usado=True;
			}
			return $usado;
		}
	}
?>
