<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Restaurante Boi-Bumbá</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" href="imagens\favicon.png" type="image/gif" sizes="16x16">
	</head>
	<body>
	<center>
		<div id="borda">
			<h1>
				<img src="imagens/favicon.png" style="width:42px;height:42px;border:0;position:relative;top:10px;left:6px"/>
				Restaurante Boi-Bumbá
			</h1>
		<hr>
		<h2 id="title">Página do Colaborador</h2>
		<form action="validaLogin.php" method="post">
			<table style="border-color: darkorange;border-style: solid;width: 45%; padding: 5px; background-color: orange;border-radius: 25px;">
				<tr>
					<td style="text-align: right;"><label>Usuário:</label></td>
					<td><input type="text" name="login"></td>
				</tr>
				<tr>
					<td style="text-align: right;"><label>Senha:</label></td>
					<td><input type="password" name="senha"></td>
					<?php 
						if(isset ($_GET['login']) && ($_GET['login'] == 0)){
							
							echo "Usuário ou senha errados!";
						}
					?>
				</tr>	
				<tr>
					<td colspan="2" style="position:relative;top:2px;left:-27px;"><input type="submit" value="entrar" id="entrar" name="entrar"></td>
				</tr>
			</table>
		</form>
		<br/>
		<a href="adicionaLogin.php">Cadastre-se aqui!</a>
		<br/>
	</body>
</html>