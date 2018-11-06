
<?php require_once "conecta.php" ?>
<?php require_once "bancoReserva.php" ?>

<?php 
  $id = $_POST['id'];
  $login = $_GET['user'];
  $perfil = $_GET['perfil'];
  
  if (apagaReserva($conexao,$id)){
		header("Location:listaReserva.php?removido=true&user=$login&perfil=$perfil"); 
  }
   else{
	    echo " <h1>Não removido</h1>";
	    $error= mysqli_error($conexao);
		echo $error;
       }

?>