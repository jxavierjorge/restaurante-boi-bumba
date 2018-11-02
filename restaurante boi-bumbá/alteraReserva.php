<?php require "conecta.php" ?>

<?php
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$data = $_POST['data'];
	$pessoas = $_POST['pessoas'];
	
	function alteraReserva ($conexao, $id, $nome, $telefone, $email, $data, $pessoas){
		$sql = "UPDATE reserva SET nome = '{$nome}', telefone = '{$telefone}', email = '{$email}', data = '{$data}', pessoas = '{$pessoas}' 
				WHERE id = '{$id}'";
		$resultado = mysqli_query($conexao, $sql);
		
		return $resultado;
	}
	
	if (alteraReserva ($conexao, $id, $nome, $telefone, $email, $data, $pessoas)){
		echo "Dados Alterados<br/>";
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
	echo '<td colspan=2>'.'<a href = "listaReserva.php">'.'<button> Voltar </button>'.'</a>'.'</td>';
	echo '</tr>';
	echo '</table>';
	echo '</center>';