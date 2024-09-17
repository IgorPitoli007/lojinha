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
            $idproduto=$POST['idproduto'];
            $query="SELECT * from produto WHERE id_produto = ? ";
            $resultado=Mysql::conectar()->prepare($query);
            $resultado->execute(array($idproduto));
            while($produto=$resultado->fetch()){
        ?>
                <img src="<?php
                    echo($produto['imagem_produto']);
                ?>" alt="" width="100%">
                <h1><?php echo($produto['nome_produto']);?></h1>
                <p><?php echo($produto['descricao_produto']);?></p>
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