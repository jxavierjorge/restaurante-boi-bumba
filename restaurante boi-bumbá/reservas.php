<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Restaurante Boi-Bumbá</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" href="imagens/favicon.png" type="image/gif" sizes="16x16">
	</head>
	<body>
	<center>
		<div id="borda">
			<h1>
				<img src="imagens/favicon.png" style="width:42px;height:42px;border:0;position:relative;top:10px;left:6px"/>
				Restaurante Boi-Bumbá
			</h1>
		<table>
			<tr>
				<td><a href="index.php"><button>Sobre</button></a></td>
				<td><a href="reservas.php"><button>Reservas</button></a></td>
				<td><a href="cardapio.php"><button>Cardápio</button></a></td>
			</tr>
		</table>
		<hr>
		<h2 id="title">Faça sua reserva</h2>
		<form action="adicionaReserva.php" method="POST">
			<table>
			<tr>
				<td>Nome:</td>
				<td><input type="text" name="nome"></td>
			</tr>
			<tr>
				<td>Telefone:</th>
				<td><input type="number" name="telefone"></th>
			</tr>
			<tr>
				<td>E-mail:</th>
				<td><input type="text" name="email"></th>
			</tr>
			<tr>
				<td>Data:</th>
				<td><input type="date" name="data"></th>
			</tr>
			<tr>
				<td>Qtd. Pessoas:</th>
				<td><input type="number" name="pessoas"></th>
			</tr>
			<tr>
				<td><button type="submit">Enviar</button></td>
				<td><button type="reset">Limpar</button></td>
			</tr>
			</table>
		</form>
		<hr>
			<h2 id=title>Horários</h2>
		<marquee>	
			<p>11:00 às 14:00 - De Segunda a Sábado - Telefone: (00) 9999-9999</p>
		</marquee>
		<a href="login.php">Pagina do colaborador</a>
		</div>
	</center>	
	</body>
</html>
