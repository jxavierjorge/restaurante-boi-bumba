
    <?php require_once("conecta.php") ?>
	<?php require_once ("bancoReserva.php") ?>
	
    <?php
		
		$perfil = $_GET['perfil'];
		$login = $_GET['user'];
		listaReserva($conexao, $perfil, $login);
	 
	 ?>
