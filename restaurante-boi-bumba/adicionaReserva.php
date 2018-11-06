<?php require_once("conecta.php") ?>
<?php require_once("Reserva.php") ?>
<?php require_once("bancoReserva.php") ?>

<head>
		<meta charset="UTF-8">
		<title>Restaurante Boi-Bumbá</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" href="imagens/favicon.png" type="image/gif" sizes="16x16">
</head>

<?php

	$reserva= new Reserva ();
	$reserva->nome=$_POST['nome'];
	$reserva->telefone=$_POST['telefone'];
	$reserva->email=$_POST['email'];
	$reserva->data=$_POST['data'];
	$reserva->pessoas=$_POST['pessoas'];
	$login = $_GET['user'];
	$perfil = $_GET['perfil'];
	
	
	if (adicionaReserva ($conexao, $reserva, $_GET['user'])) { //só entra se o retorno for verdadeiro
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
		echo '<td colspan="2">';
		formataData($reserva);
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td>Qtd. Pessoas:</td>' .'<td>'.$reserva->pessoas.'</td>';
		echo '</tr>';
	}
	else{
		echo "<p>&nbsp Erro na reserva, você já tem uma reserva agendada</p>";
		//echo mysqli_error($conexao);
	}
?>
	
<?php
	echo '<tr>';
	echo '<td colspan=2>'.'<a href="listaReserva.php?user='.$login.'&perfil='.$perfil.'">'.'<button> Listar Reservas </button>'.'</a>'.'</td>';
	echo '</tr>';
	echo '</table>';
	echo '</center>';

?>







