<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fseletrobasketkings";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("A conexão ao BD falhou: " . mysqli_connect_error());
    }

    if (isset($_POST['cliente']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['descricao']) && isset($_POST['preco_venda']) && isset($_POST['quantidade'])) {
        $cliente = $_POST['cliente'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $descricao = $_POST['descricao'];
        $preco_venda = $_POST['preco_venda'];
        $quantidade= $_POST['quantidade'];

        $sql = "insert into pedidos (cliente, endereco, telefone, descricao, preco_venda, quantidade) values ('$cliente', '$endereco', '$telefone', '$descricao', '$preco_venda', '$quantidade')";
        $result = $conn->query($sql);

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>
    <main class="pedidos">
        <div class="produtos">
            <?php
                include('menu.html');
            ?>
        </div>
        
        <section class="painel-solic">

            <div class="formulario">

                <form action="#" method="post">

                    <h1>Solicitação de pedido</h1>
                    <input type="text" name="cliente" placeholder="Digite o seu nome completo" required>
                    <input type="text" name="endereco" placeholder="Digite o seu endereço" required>
                    <input type="text" name="telefone" placeholder="Digite seu telefone" required>
                    <input type="text" name="descricao" placeholder="Digite a descricação do produto selecionado" required>
                    <input type="text" name="preco_venda" placeholder="Digite o preço de venda" required>
                    <input type="text" name="quantidade" placeholder="Digite a quantidade desejada produto" required>
                    <button type="submit"><b>Solicite seu pedido</b></button>
                    <a href="produtos.php">Para esclarecer dúvidas, entre em contato conosco.</a>
                    
                </form>

            </div>

        </section>
            
    









    </main>
</body>
</html>