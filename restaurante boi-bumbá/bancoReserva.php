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
			
	function formataData($reserva){	
		$data = new DateTime($reserva->data); //Criando um objeto apartir da classe DateTime
		echo 'Data: ' . $reserva->data = $data->format('d/m/y'); //exibe no formato string a referente data na mesma variável 	
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
						<td><input type=submit value="Alterar"></td>
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
			
			$sql = "SELECT * FROM reserva WHERE nome LIKE '%".$palavra."%' ORDER BY nome";
			
			$consulta = mysqli_query($conexao, $sql);
			$numRegistros = mysqli_num_rows($consulta);
			
			if ($numRegistros != 0){
				while($exibe = mysqli_fetch_object($consulta)){	
					echo '<link rel="stylesheet" type="text/css" href="style.css">';
					echo '<center>';
					echo '<table id="resultados">';
					echo '<tr>';	
					echo '<td>ID:</td>'. '<td>'.$exibe->id.'</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td>Nome:</td>' .'<td>'.$exibe->nome.'</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td>Telefone:</td>' .'<td>'.$exibe->telefone.'</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td>Email:</td>' .'<td>'.$exibe->email.'</td>';
					echo '</tr>';
					$reserva = new Reserva(); //recriamos o objeto dentro do método para ser possível passar o valor para o formataData
					$reserva->data = $exibe->data;
					echo '<tr>';
					echo '<td colspan="2">';
					formataData($reserva);
					echo '</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td>Pessoas:</td>' .'<td>'.$exibe->pessoas .'</td>';	
					echo '</tr>';
					echo '</table>';
					echo '<br>';				
				}		
			}
			
			else {
				echo '<link rel="stylesheet" type="text/css" href="style.css">';
				echo '<center>';
				echo '<div id="alerta">Nenhuma reserva com o nome '.$nome.' foi encontrado</div>';
			
			}
			
			
		}
		
		?>
		<br>	
		<a href="listaReserva.php"><button>Lista completa de reservas</button></a>
		<br><br>
		<a href="localizaReserva.php"><button>Fazer outra pesquisa</button></a>	
		<?php
		echo '</center>';
	}
	echo '</center>';
?>	