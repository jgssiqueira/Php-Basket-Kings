<?php
session_start();
include_once("conexao.php");

$cliente = filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_STRING);
$produto = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_STRING);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_STRING);
$endereço = filter_input(INPUT_POST, 'endereço', FILTER_SANITIZE_STRING);

//echo "Cliente: $cliente <br>";
//echo "Produto: $produto <br>";
//echo "Quantidade: $quantidade <br>";
//echo "Endereço: $endereço <br>";

$result_pedidos = "INSERT INTO pedidos (cliente, produto, quantidade, endereço, created) VALUES ('$cliente', '$produto', '$quantidade', '$endereço', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Produto enviado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Produto não foi enviado com sucesso</p>";
	header("Location: index.php");
}
