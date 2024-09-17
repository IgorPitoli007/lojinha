<?php
    require("Mysql.php");
    session_start();
    if($_SESSION['logado']=='TRUE'){
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1>compre</h1>
        <?php
            $query="select * from produto";
            $resultado=Mysql::conectar()->prepare($query);
            $resultado->execute();
            while($produto=$resultado->fetch()){
        ?>
        <form action="tratar_produto.php" method="POST">
                <img src="<?php
                    echo($produto['imagem_produto']);
                ?>" alt="">
                <p><?php
                    echo($produto['nome_produto']);?></p>
                <input type="hidden" name="idproduto" value=<?php echo($produto['id_produto'])?>>
        </form>
        <?php
            }
        ?>
</body>
</html>
<?php
    }else{
        header("location: login.php");
    }
?>
