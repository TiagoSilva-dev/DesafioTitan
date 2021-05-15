<?php
include "DB_Conexao.php";

$id = $_POST['id'];
$produto = strtoupper(mysqli_real_escape_string($conexao, trim($_POST['nome'])));
$preco =  intval(mysqli_real_escape_string($conexao, trim($_POST['preco'])));


$sql = "UPDATE produtos SET NOME = '$produto' where IDPROD = '$id'";
$conexao->query($sql);
$sql = "UPDATE precos SET PRECO = '$preco' where IDPRECO = '$id'";
$conexao->query($sql);
header('Location: index.php');

?>