<?php 	
	
	class Reserva {
		public $nome;
		public $telefone;
		public $email;
		public $data;
		public $pessoas;
		public $id_usuario;//Se refere a quantidade de pessoas por reserva, em nome do cliente
	}
	
	class Usuario {
		public $login;
		public $senha;
		public $_perfil;
		
		public function setPerfil($p){
			$this->_perfil = $p;
		}
		public function getPerfil(){
			return $this->_perfil;		
		}
		
	}
	
	$usuario = new Usuario();
	$perfil = new Usuario();
?>	