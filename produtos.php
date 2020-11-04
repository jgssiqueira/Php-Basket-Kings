<?php

 $servername = "localhost";
 $username   = "root";
 $password   = "";
 $database   = "fseletrobasketkings";

 $conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("A conexão falhou" .mysqli_connect_error());
}

$sql = "select * from produtos";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($rows = $result->fetch_assoc()){
        echo $rows["categoria"]
?>

<?php
    }
} else {
    echo "Nenhum produto cadastrado!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Produtos / Basket Kings</title>
        <link rel="stylesheet" href="CSS/produtos.css">
        <script src="js/funçoes.js"></script>
    </head>
    <body>
        
        <!-- Início do menu -->
        <?php
        include('menu.html');
        ?>
        <!-- Fim do menu -->

        <br><br>
        <h2>Produtos</h2>
        <hr>
        <br>

                <div class="categorias">
                    <h3>Categorias</h3>
                    <ul>
                        <li onclick="exibir_todos()">Todos (8)</li>
                        <li onclick="exibir_categorias('Jerseys')">Jerseys (8)</li>
                        <li onclick="exibir_categorias('Bolas')">Bolas (0)</li>
                        <li onclick="exibir_categorias('Bonés')">Bonés (0)</li>
                        <li onclick="exibir_categorias('Bermudas')">Bermudas (0)</li>
                        <li onclick="exibir_categorias('Tênis')">Tênis (0)</li>
                    </ul>
                </div>
                
                <div class="produtos">
                    <div class="box_produto" id="Jerseys" style="display: block;">
                    <img src="Imagens/gsw.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao"><b>Golden State Warrios (Personalize)</b></div>
                    <hr>
                    <div class="descriçao"><strike>R$ 300,00</strike></div>
                    <div class="preço"><b>R$ 200,00</b></div>
                </div>
                </div>
                    <div class="box_produto" id="Jerseys" style="display: block;">
                    <img src="./Imagens/miamiheat.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao"><b>Miami Heat (Personalize)</b></div>
                    <hr>
                    <div class="descriçao"><strike>R$ 300,00</strike></div>
                    <div class="preço"><b>R$ 200,00</b></div>
                </div>
                </div>
                    <div class="box_produto" id="Jerseys" style="display: block;">
                    <img src="./Imagens/lalakers.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao"><b>Los Angeles Lakers (Personalize)</b></div>
                    <hr>
                    <div class="descriçao"><strike>R$ 300,00</strike></div>
                    <div class="preço"><b>R$ 200,00</b></div>
                </div>
                </div>
                    <div class="box_produto" id="Jerseys" style="display: block;">
                    <img src="./Imagens/bostonceltics.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao"><b>Boston Celtics (Personalize)</b></div>
                    <hr>
                    <div class="descriçao"><strike>R$ 300,00</strike></div>
                    <div class="preço"><b>R$ 200,00</b></div>
                </div>

                </div>
                    <div class="box_produto" id="Jerseys" style="display: block;">
                    <img src="./Imagens/laclippers.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao"><b>Los Angeles Clippers (Personalize)</b></div>
                    <hr>
                    <div class="descriçao"><strike>R$ 300,00</strike></div>
                    <div class="preço"><b>R$ 200,00</b></div>
                </div>
                </div>
                    <div class="box_produto" id="Jerseys" style="display: block;">
                    <img src="./Imagens/chicagobulls.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao"><b>Chicago Bulls (Personalize)</b></div>
                    <hr>
                    <div class="descriçao"><strike>R$ 300,00</strike></div>
                    <div class="preço"><b>R$ 200,00</b></div>
                </div>
                </div>
                    <div class="box_produto" id="Jerseys" style="display: block;">
                    <img src="./Imagens/bucks.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao"><b>Milwaukee Bucks (Personalize)</b></div>
                    <hr>
                    <div class="descriçao"><strike>R$ 300,00</strike></div>
                    <div class="preço"><b>R$ 200,00</b></div>
                </div>
                </div>
                    <div class="box_produto" id="Jerseys" style="display: block;">
                    <img src="./Imagens/orlandomagic.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao"><b>Orlando Magic (Personalize)</b></div>
                    <hr>
                    <div class="descriçao"><strike>R$ 300,00</strike></div>
                    <div class="preço"><b>R$ 200,00</b></div>
                </div>
        <center>
            <span>
                <p id="formadepagamento"><b>Formas de pagamento:</b></p>
                <img src="Imagens/Cartoespagamentos.jpg">
            </span>
        </center>
        <center>&copy; Todos os direitos reservados.</center>  
    </body>
</html>