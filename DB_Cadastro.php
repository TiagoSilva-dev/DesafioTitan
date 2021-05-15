<?php
session_start();
include "DB_Conexao.php";
// Recebendo os dados do coordenador inseridos no formulario
$produto = strtoupper(mysqli_real_escape_string($conexao, trim($_POST['produto'])));
$preco =  floatval(mysqli_real_escape_string($conexao, trim($_POST['preco'])));
$cor = strtoupper(mysqli_real_escape_string($conexao, trim($_POST['cor'])));

$sql = "INSERT INTO produtos (NOME, COR) VALUES ('$produto','$cor')";
$conexao->query($sql);

$sql = "INSERT INTO precos (PRECO) VALUES ('$preco')";
$conexao->query($sql);

header('Location: index.php');

$conexao->close();

exit();
