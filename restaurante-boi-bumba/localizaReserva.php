  <?php require_once("conecta.php") ?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
  <body>
  	<center>
	<fieldset id="pesquisa">
		<legend> &nbsp Buscar Reserva &nbsp </legend>
		<?php $login = $_GET['user']; $perfil = $_GET['perfil'];
		echo '<form method="POST" action="recebeLocalizaReserva.php?a=buscar&user='.$login.'&perfil='.$perfil.'">' ?>
			<label>Nome: </label>
			<input type="text" name="nome" />
			<br>
			<br>
			<button type="submit">Buscar</button>
		</form>
	</fieldset>
	</center>
 </body>
</html>

