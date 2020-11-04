<?php

 $servername = "localhost";
 $username   = "root";
 $password   = "";
 $database   = "fseletrobasketkings";

 $conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("A conexão falhou" .mysqli_connect_error());
}

if(isset($_POST['nome']) && isset($_POST['msg'])){
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];

    $sql = "insert into comentarios (nome, msg) values";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Fale conosco / Basket Kings</title>
        <link rel="stylesheet" href="CSS/fale_conosco.css">
    </head>
    <body>
        <!-- Início do menu -->
        <?php
        include('menu.html');
        ?>
        <!-- Fim do menu -->
        <h2>Fale conosco</h2>
        <hr>
        <table border=0 width="100%" cellpadding="20">
            <tr>
                <td width="50%" align="center">
                    <img src="Imagens/email.jpg" width="80px">
                    <p>contato@basketkings.com</p>
                </td>

                <td width="50%" align="center">
                    <img src="Imagens/Whatsapp.jpg" width="40px">
                    <p>>(21) 98356-9032</p>
                </td>
            </tr>
        </table>

        <form>
            <h4>Nome: </h4>
            <input type="text" style="width: 400px;">
            <h4>Mensagem: </h4>
            <textarea style="width: 400px;"></textarea>

            <input type="submit" value="Enviar">
        </form>

        <br> <br> <br> <br> <br>
        <br> <br> <br> <br> <br>
        <br> <br> <br> <br> <br>
        <center>
            <span>
                <p id="formadepagamento"><b>Formas de pagamento:</b></p>
                <img src="Imagens/Cartoespagamentos.jpg">
            </span>
        </center>
        <center>&copy; Todos os direitos reservados.</center>  
    </body>
</html>