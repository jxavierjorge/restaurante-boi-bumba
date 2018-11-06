<?php require "conecta.php" ?>
<?php require "bancoReserva.php" ?>

<?php 
	
	$a = $_GET['a'];
	$nome = $_POST['nome'];
	
	$login = $_GET['user'];
	$perfil = $_GET['perfil'];
	localizaReserva($conexao, $a, $nome, $login, $perfil);

?>