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
		<h1>Restaurante Boi-Bumbá</h1>
		<table>
			<tr>
				<td><a href="index.php"><button>Sobre</button></a></td>
				<td><a href="reservas.php"><button>Reservas</button></a></td>
				<td><a href="cardapio.php"><button>Cardápio</button></a></td>
			</tr>
		</table>
		<hr>
		<h2 id="title">Faça sua reserva</h2>
		<form>
			<table style="border-color: darkorange;border-style: solid;width: 45%;background-color: orange;border-radius: 25px;">
				<tr>
					<td style="text-align: right;">Nome: </td>
					<td><input type="text" name="nome"></td>
				</tr>
				<tr>
					<td style="text-align: right;">Telefone: </td>
					<td><input type="text" name="tel"></td>
				</tr>	
				<tr>
					<td style="text-align: right;">Nº de Pessoas: </td>
					<td><input type="number" name="q_pessoas"></td>
				</tr>
				<tr>
					<td colspan="2"><button style="border-style: none;border-radius: 80px;">Reservar</button></td>
				</tr>
			</table>
		</form>
		<hr>
			<h2 id=title>Horários</h2>
		<marquee direction="left">	
			<p>11:00 às 14:00 - De Segunda a Sábado - Telefone: (00) 9999-9999</p>
		</marquee>
		<hr>
		<center>
		<div class="mapouter">
			<div class="gmap_canvas">
				<iframe width="600" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=proje%C3%A7%C3%A3o%20campus%202&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
				</iframe>
				<a href="https://www.crocothemes.net"></a>
				</div>
				<style>.mapouter{text-align:right;height:300px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:600px;}</style>
				</div>
				<br>
		</center>
		<footer><a href="login.php">Página do colaborador</a></footer>
		</div>
	</center>	
	</body>
</html>