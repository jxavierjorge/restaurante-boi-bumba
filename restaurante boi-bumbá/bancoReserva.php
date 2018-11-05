<?php require_once ("conecta.php") ?>
<?php require_once ("Reserva.php") ?>


<?php

	function adicionaUsuario($conexao, $usuario){
		
		$sql = "INSERT INTO usuario(login, senha, perfil) VALUES ('{$usuario->login}', '{$usuario->senha}', '{$usuario->perfil}')";
		
		$resultado = mysqli_query($conexao, $sql);
		return $resultado;
		
	}
	
	function verificaPerfil($usuario){		
		if($usuario->perfil == 1){
			$perfil = "Administrador";
			return $perfil;
		}
		else{
			$perfil = "Cliente";
			return $perfil;
		}	
	}
	
	function buscaPerfil($conexao, $login){
		$sql = "SELECT perfil FROM usuario WHERE login LIKE '%".$login."%'";
		$resultado = mysqli_query($conexao, $sql); //o resultado do método é true or false
		
		$perfil= mysqli_fetch_assoc($resultado); //retorna o registro procurado
		return $perfil['perfil'];
	}
	
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
	
	
	function adicionaReserva($conexao, $reserva, $login) {
		
		$login = buscaId($conexao, $login);
		$sql = "INSERT INTO reserva(nome, telefone, email, data, pessoas, id_usuario) VALUES 
		('{$reserva->nome}', '{$reserva->telefone}', '{$reserva->email}', '{$reserva->data}', '{$reserva->pessoas}', 
		'{$login}')";
	
		$resultado = mysqli_query($conexao, $sql);
		return $resultado;
	}
	
	function buscaId($conexao, $login){
		/*
		$sql = "SELECT usuario.id FROM usuario INNER JOIN reserva
				ON reserva.id = usuario.id_reserva WHERE login = '{$login}'";*/
		//$sql = "SELECT MAX(id) FROM usuario";
		
		$sql = "SELECT id FROM usuario WHERE login = '$login'"; //capturar o campo auto_increment de usuario
				
		$resultado = mysqli_query($conexao, $sql);
		
		$array = mysqli_fetch_assoc($resultado);
		return $array['id'];
		
	}
	
	function apagaReserva($conexao, $id){
		
		$sql = "DELETE FROM reserva WHERE id_usuario = '$id'";
		
		$resultado = mysqli_query($conexao, $sql);
		return $resultado;
	}
	
	function listaReserva($conexao){ //Chamado na página listaReserva.php
		
		 echo "<center><h1> Dados</h1></center>";
		
		$sql = "SELECT * FROM reserva";

		$resultado = mysqli_query($conexao, $sql);
		
		while($array = mysqli_fetch_assoc($resultado)){ ?> <!-- Percorre cada linha da tabela e exibe os valores buscados por meio da variável array -->
		
		<head>
			<link rel="stylesheet" type="text/css" href="style.css">
		</head>
		<center>
		<div>
			<form action="alteraReserva.php" method="POST">
				<table>
					<tr>
						<td><input type=hidden value=<?php echo $array['id_usuario'] ?> name=id> </td> <!-- ID para controle das reservas -->
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
						<td colspan=2><center><input type=submit value="Alterar"></td></center>
					</tr>
			</form>
			<form action="apagaReserva.php" method="POST">
				<table>
					<tr>
						<td><input type=hidden value=<?php echo $array['id_usuario'] ?> name=id></td>
						<td><button> Remover </button></td> <!-- Ação do form -->
					</tr>
				</table>
			</form>
		</div>	
		</center>	
			
		<?php	
			
		} //fim do while  ?> <br/><a href="login.php">Adicionar Reservas</a><?php //Dentro do método relacionado
	} //fim do método

	function localizaReserva($conexao, $a, $nome){
		if (($a == "buscar") && ($nome != null)){
			
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
					echo '<td>ID:</td>'. '<td>'.$exibe->id_usuario.'</td>';
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
