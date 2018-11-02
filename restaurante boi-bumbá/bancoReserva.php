<?php require_once ("conecta.php") ?>
<?php require_once ("Reserva.php") ?>


<?php

	function buscaUsuario($conexao, $login, $senha){
		
		$loginUsuario = mysqli_real_escape_string($conexao, $login);
		
		$sql = "SELECT * FROM usuario WHERE login = '{$loginUsuario}' and senha = '{$senha}'";
		
		$consulta = mysqli_query($conexao, $sql);
		
		$resultado = mysqli_num_rows($consulta);
		return $resultado;
	
	}
	
	function adicionaReserva($conexao, $reserva) {
		
		$sql = "INSERT INTO reserva(nome, telefone, email, data, pessoas) VALUES 
		('{$reserva->nome}', '{$reserva->telefone}', '{$reserva->email}', '{$reserva->data}', '{$reserva->pessoas}')";
		
		$resultado = mysqli_query($conexao, $sql);
		return $resultado;
	}
	
	function cancelaReserva($conexao, $id){
		
		$sql = "DELETE FROM reserva WHERE id = '$id'";
		
		$resultado = mysqli_query($conexao, $sql);
		return $resultado;
	}
	
	function listaReserva($conexao, $reserva){ //Chamado na página listaReserva.php
		
		$sql = "SELECT * FROM reserva";
		$resultado = mysqli_query($conexao, $reserva);
		
		return $resultado;	
		
		while($array = mysqli_fetch_assoc($resultado)){ ?> <!-- Percorre cada linha da tabela e exibe os valores buscados por meio da variável array -->
			
		<h2>Dados: </h2>
		<center>
			<table>
				<form action="alteraReserva.php" method="POST">
					<tr>
						<td><input type=hidden value=<?php echo $array['id'] ?> name=id> </td> <!-- ID para controle das reservas -->
					</tr>
					<tr>
						<td>Nome: <input type=text value=<?php echo $array['nome'] ?> name=nome> </td> <!-- Novo name para atualizar os dados -->
					</tr>
					<tr>
						<td>Telefone: <input type=number_format value=<?php echo $array['telefone'] ?> name=telefone > </td>
					</tr>
					<tr>
						<td>E-mail: <input type=text value=<?php echo $array['email'] ?> name=email > </td>
					</tr>
					<tr>
						<td>Data: <input type=date value=<?php echo $array['data'] ?> name=data > </td>
					</tr>
					<tr>
						<td>Pessoas: <input type=number_format value=<?php echo $array['pessoas']?> name=pessoas ></td>
					</tr>
					<tr>
						<td><input type=submit value="alterar"></td>
					<tr>
				</form>
				<form action="cancelaReserva.php" method="POST">
					<tr>
						<td><input type=hidden value=<?php echo $array['id'] ?> name=id> </td>
						<button> Remover </button> <!-- Ação do form -->
					</tr>
				</form>
			</table>
		</center>
			
		<?php	
			
		} //fim do while  ?> <a href="login.php">Adicionar Reservas</a><?php //Dentro do método relacionado
	} //fim do método

	function localizaReserva($conexao, $a, $nome){
		if ($a == "buscar"){
			
			$palavra = trim($nome);
			
			$sql = "SELECT * FROM reserva WHERE nome LIKE %".$palavra."% ORDER BY nome";
			
			$consulta = mysqli_query($conexao, $sql);
			$numRegistros = mysqli_num_rows($consulta);
			
			if ($numRegistro != 0){
				while($exibe = mysqli_fetch_object($consulta)){		
					echo 'ID: ' . $exibe->id;
					echo '<br/>Nome: ' . $exibe->nome;
					echo '<br/>Telefone: ' . $exibe->telefone;
					echo '<br/>Email: ' . $exibe->email;
					echo '<br/>Data: ' . $exibe->data;
					echo '<br/>Pessoas: ' . $exibe->pessoas;					
				}		
			}
		}
		else {
			
			echo "Nenhuma reserva com o nome: ".$a." foi encotrado";
			
		}
	}
?>	
