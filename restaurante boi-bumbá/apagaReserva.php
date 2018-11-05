
<?php require_once "conecta.php" ?>
<?php require_once "bancoReserva.php" ?>

<?php 
  $id = $_POST['id'];
   apagaReserva($conexao,$id);
  
  if (apagaReserva($conexao,$id)){
		header("Location:listaReserva.php?removido=true"); 
  }
   else{
	    echo " <h1>Não removido</h1>";
	    $error= mysqli_error($conexao);
		echo $error;
       }

?>