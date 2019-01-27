<?php

	class Usuario{
		private $id;
		private $email;
		private $pass;

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function getPass(){
			return $this->pass;
		}

		public function setPass($pass){
			$this->pass = $pass;
		}
	}
?>
