<?php
require("Mysql.php");
session_start();
$email=$_POST["email"];
$senha=$_POST["senha"];
echo $email;
$sql = MySql::conectar()->prepare("SELECT * FROM usuario WHERE nome_user = ? && senha_user = ?");
$sql->execute(array($email,$senha));
if($sql->rowCount() == 1){
    $_SESSION['logado']="true";
    header("location: painel.php");
}else{
    header("location: login.php");
}
?>