<?php require_once("conecta.php") ?>
<?php require_once("Reserva.php") ?>
<?php require_once("bancoReserva.php") ?>


<!DOCTYPE html>


<?php

	$reserva= new Reserva ();
	$reserva->nome=$_POST['nome'];
	$reserva->telefone=$_POST['telefone'];
	$reserva->email=$_POST['email'];
	$reserva->data=$_POST['data'];
	$reserva->pessoas=$_POST['pessoas'];
	
	if (adicionaReserva ($conexao, $reserva)) {
		echo '<center>';
		echo '<br>';
		echo '<link rel="stylesheet" type="text/css" href="style.css">';
		echo '<table border="2" id="resultados">';
		echo '<tr>';
		echo '<td>Nome:</td>' .'<td>'.$reserva->nome.'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td>Telefone:</td>' .'<td>'.$reserva->telefone.'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td>E-mail:</td>' .'<td>'.$reserva->email.'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td>Data:</td>' .'<td>'.$reserva->data.'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td>Qtd. Pessoas:</td>' .'<td>'.$reserva->pessoas.'</td>';
		echo '</tr>';
	}
	else{
		echo "Erro na reserva";
		echo mysqli_error($conexao);
	}
?>
<?php
	echo '<tr>';
	echo '<td colspan=2>'.'<a href="listaReserva.php">'.'<button> Listar Reservas </button>'.'</a>'.'</td>';
	echo '</tr>';
	echo '</table>';
	echo '</center>';









