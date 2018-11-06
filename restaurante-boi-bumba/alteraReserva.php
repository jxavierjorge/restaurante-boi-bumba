<?php require "conecta.php" ?>

<?php
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$data = $_POST['data'];
	$pessoas = $_POST['pessoas'];
	$login = $_GET['user'];
	$perfil = $_GET['perfil'];
	
	function alteraReserva ($conexao, $nome, $telefone, $email, $data, $pessoas, $id){
		$sql = "UPDATE reserva SET nome = '{$nome}', telefone = '{$telefone}', email = '{$email}', data = '{$data}', pessoas = '{$pessoas}' 
				WHERE id_usuario = '$id'";
		$resultado = mysqli_query($conexao, $sql);
		
		return $resultado;
	}
	
	if (alteraReserva ($conexao, $nome, $telefone, $email, $data, $pessoas, $id)){
		echo "<center><h2>Dados Alterados</h2></center>";
	}
	else{
		$error = mysqli_error($conexao);
			echo $error;
	}
	
?>

<?php
	echo '<center>';
	echo '<br>';
	echo '<link rel="stylesheet" type="text/css" href="style.css">';
	echo '<table border="2" id="resultados">';
	echo '<tr>';
	echo '<td colspan=2>'.'<a href = "listaReserva.php?user='.$login.'&perfil='.$perfil.'">'.'<button> Voltar </button>'.'</a>'.'</td>';
	echo '</tr>';
	echo '</table>';
	echo '</center>';