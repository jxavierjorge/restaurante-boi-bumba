<?php require "conecta.php" ?>
<?php require "bancoReserva.php" ?>

<?php 
	
	$a = $_GET['a'];
	$nome = $_POST['nome'];
	
	localizaReserva($conexao, $a, $nome);

?>