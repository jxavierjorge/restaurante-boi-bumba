<?php require "conecta.php" ?>
<?php require "bancoReserva.php" ?>
<?php require "Reserva.php" ?>

<?php 
	
	$a = $_POST['a'];
	$nome = $_POST['palavra'];
	
	localizaReserva($conexao, $a, $nome);

?>