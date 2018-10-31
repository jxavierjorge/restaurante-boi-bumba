<?php require_once("conecta.php") ?>
<?php require_once("Reserva.php") ?>
<?php require_once("bancoReseva.php") ?>


<!DOCTYPE html>


<?php

	$reserva= new Reserva ();
	$reserva->id=$_POST['id'];
	$reserva->nome=$_POST['nome'];
	$reserva->telefone=$_POST['telefone'];
	$reserva->email=$_POST['email'];
	$reserva->data=$_POST['data'];
	$reserva->pessoas=$_POST['pessoas'];
	
	if (adicionaReserva ($conexao, $reserva)) {
		echo 'id:' . $reserva->id;
		echo 'nome:' . $reserva->nome;
		echo 'telefone:' . $reserva->telefone;
		echo 'email:' . $reserva->email;
		echo 'data:' . $reserva->data;
		echo 'pessoas:' . $reserva->pessoas;
	}
	else{
		echo "Erro na reserva";
		echo mysqli_error($conexao);
	}
?>

	<a href="listaReserva.php"> lista de reservas </a>









