<?php
    $idproduto=$_POST['idproduto'];
    $query="SELECT * from produto WHERE id_produto= ?";
    $resultado=Mysql::conectar()->prepare($query);
    $resultado->execute(array($idproduto));
    while($produto=$resultado->fecth()){
?>
    <h1><?php echo($produto['nome_produto']);?></h1>
    <p><?php echo($produto['descricao_produto']);?></p>
<?php
    }
?>