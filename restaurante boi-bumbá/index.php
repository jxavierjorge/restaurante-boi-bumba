<!DOCTYPE HTML>
<?php require "Reserva.php"?>
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
			<?php require_once "menu.php" ?>
			<hr>
			<h2 id="title">Nossa história</h2>
			<p id="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et tellus et tortor hendrerit bibendum. Etiam ut urna lectus. Quisque rutrum erat a tincidunt feugiat. Morbi vitae libero vitae nibh scelerisque eleifend vitae a purus. Curabitur aliquet sapien nec iaculis accumsan. Phasellus pellentesque bibendum lectus et porta. Nam pretium eleifend quam, at convallis orci rutrum in. Morbi vel mi velit. Etiam bibendum magna et porttitor tincidunt. Phasellus tincidunt efficitur ipsum. In malesuada id eros vitae vehicula. Cras id mi sed ex efficitur sagittis. Mauris porttitor magna at nunc semper, non dignissim metus dignissim. </p>
			<p id="content">In hac habitasse platea dictumst. Sed facilisis lacus a lacus euismod, eget dapibus ipsum finibus. Nullam sit amet luctus nibh, sed congue orci. Duis facilisis est vel dolor facilisis, a mollis metus tempor. Suspendisse sed massa sapien. Praesent ac lobortis ligula, ac porta ligula. Aliquam sed nulla in tortor aliquam pellentesque venenatis nec mi. Sed tristique luctus scelerisque. </p>
			<hr>
				<h2 id="title">Horários</h2>
			<marquee>	
				<p>11:00 às 14:00 - De Segunda a Sábado - Telefone: (00) 9999-9999</p>
			</marquee>
			<hr>
			<?php include_once "mapa.php"  ?>
		</center>
	</body>
</html>