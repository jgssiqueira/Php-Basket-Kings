<html>
   <head>
      <title>Php FullStack Eletro Basket Kings</title>
   </head>
   <body>

 <?php

 $servername = "localhost";
 $username   = "root";
 $password   = "";
 $database   = "fseletrobasketkings";

 $conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("A conexão falhou" .mysqli_connect_error());
}

 $sql = "select cliente, endereço, quantidade, nome do produto";
 $result = $conn->query($sql);

 while ($row = $result->fetch_assoc()){
    echo "<p> O cliente: ".$row['cliente']."comprou ".$row['quantidade']." comprou: ".$row['nome do produto']."</p><hr>";
}
?>
</body>
</html>



