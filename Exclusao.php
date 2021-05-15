<?php
session_start();
include "DB_Conexao.php";
//VERIFICANDO SE FOI PASSADO ALGUM ID PELA URL
if (!empty($_GET['id'])) {
  $id = $_REQUEST['id'];
}
if (!empty($_POST)) {
  $id = $_POST['id'];
// deletando o produto selecionado
  $sql = "DELETE FROM produtos where IDPROD = '$id'";
  if ($conexao->query($sql)) {
    $sql = "DELETE FROM precos where IDPRECO = '$id'";
    $conexao->query($sql);
    header('Location: index.php');
  };
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
  <title>Excluir</title>
</head>

<body>
  <div class="block">
    <div>
      <center>
        <h3>Excluir Produto</h3>
    </div>
    <form action="Exclusao.php" method="post">
      <input type="hidden" name="id" value="<?php echo $id; ?>" />
      <center>
        <div> Deseja excluir o produto?</div>
        <div>
          <button type="submit">Sim</button>
          <a href="index.php">Não</a>
        </div>
    </form>
  </div>

</body>

</html>