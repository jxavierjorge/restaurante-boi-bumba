  <?php require_once("conecta.php") ?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
  <body>
  	<center>
	<fieldset id="pesquisa">
		<legend> &nbsp Buscar Reserva &nbsp </legend>
		<form method="POST" action="recebeLocalizaReserva.php?a=buscar">
			<label>Nome: </label>
			<input type="text" name="nome" />
			<br>
			<br>
			<button type="submit">Buscar</button>
			<hr>
			<p>Obs: se quiser conferir todas as reservas registradas, favor deixar o campo vazio</p>
		</form>
	</fieldset>
	</center>
 </body>
</html>

