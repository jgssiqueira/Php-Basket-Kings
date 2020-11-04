<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Pedidos</title>		
	</head>
	<body>
		<h1>Enviar Pedido</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="envios.php">
			<label>Cliente: </label>
			<input type="text" name="cliente" placeholder="Digite o nome do cliente"><br><br>
			
			<label>Produto: </label>
			<input type="text" name="produto" placeholder="Digite o nome do produto"><br><br>
			
			<label>Quantidade: </label>
			<input type="text" name="quantidade" placeholder="Digite a quantidade"><br><br>
			
			<label>Endereço: </label>
			<input type="text" name="endereço" placeholder="Digite o endereço"><br><br>
			
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>