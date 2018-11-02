  <?php require_once("conecta.php") ?>

<html>
  <body>
	<fieldset style="width:25%;">
		<legend>Buscar Reserva</legend>
		<form method="POST" action="recebeLocalizaReserva.php?a=buscar">
			<label>Nome: </label>
			<input type="text" name="nome" />
			<input type ="submit" value="Buscar" />
		</form>
	</fieldset>
 </body>
</html>

