<table>
	<tr>
		<?php //inserir essa tag toda nas próximas páginas que serão chamadas pelos botões
			$perfil = $_GET['perfil'];
			$login = $_GET['user'];
			echo '<td><a href="index.php?user='.$login.'&perfil='.$perfil.'"><button>Home</button></a></td>';
			if($perfil == 1){
				//Inserir a td contendo o listaReservas aqui e o localizaReservas tbm, da mesma forma dos exemplos acima e abaixo
			}
			echo '<td><a href="reservas.php?user='.$login.'&perfil='.$perfil.'"><button>Reservas</button></a></td>';
			echo '<td><a href="cardapio.php?user='.$login.'&perfil='.$perfil.'"><button>Cardápio</button></a></td>';
			
		?>
		
	</tr>
</table>