<?php require_once("conecta.php") ?>
<?php require_once("Reserva.php") ?>
<?php require_once("bancoReserva.php") ?>

<!DOCTYPE html>

<html>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<center>
	<h2 id="title">Cadastro de Usuário</h2>
		<form action="adicionaLogin.php" method="GET">
			<table style="border-color: darkorange;border-style: solid;width: 25%; padding: 5px; background-color: orange;border-radius: 25px;">
				<tr>
					<td style="text-align: right;"><label>Usuário:</label></td>
					<td><input type="text" name="login"></td>
				</tr>
				<tr>
					<td style="text-align: right;"><label>Senha:</label></td>
					<td><input type="password" name="senha"></td>
				</tr>
				<tr>
					<td  style="text-align: right;"><label>Perfil: </label></td>
					<td><input type="radio" value=1 name="perfil">Adiministrador</td></tr>
					<tr><td></td><td style="float:left; margin: 0px 60px;"><input type="radio" value=2 name="perfil" />Cliente</td>
				</tr>
				<tr>
					<td colspan="2" style="position:relative;top:2px;left:-27px;"><input type="submit" value="Cadastrar" name="entrar"></td>
				</tr>
			</table>
			</center>
		</form>

<?php
	
	if(isset ($_GET['entrar']) && ($_GET['entrar'] == "Cadastrar")){
		$usuario->login = $_GET['login'];
		$usuario->senha = $_GET['senha'];
		$usuario->perfil = $_GET['perfil'];
		
		if (adicionaUsuario ($conexao, $usuario)) {
			echo '<center>';
			echo '<link rel="stylesheet" type="text/css" href="style.css">';
			echo '<h2 style="color: white;">Cadastro Realizado!</h2>';
			echo '<table border="2" id="resultados">';
			echo '<tr>';
			echo '<td>Nome:</td>' .'<td>'.$usuario->login .'</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td>Senha:</td>' .'<td>'.$usuario->senha .'</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td>Perfil:</td>' . '<td>'.verificaPerfil($usuario) .'</td>';
			echo '</tr>';
			echo '</table>';
			echo '<br/><a href="login.php"><button>Realizar login</button></a>';
		}
		else{
			echo "Erro no login";
			echo mysqli_error($conexao);
		}
	}
	
	?>
</html>
