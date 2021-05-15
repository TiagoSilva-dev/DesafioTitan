<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Atualizacao</title>
</head>

<body>

  <div class="block">
    <form action="DB_Atualizacao.php" method="POST">
      <center>
        <span>
          <h1> Atualizar Produtos</h1>
        </span>
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
        <input class="input-res" type="text" name="nome" placeholder="Nome do produto" required>
        <input class="input-res" type="text" name="preco" placeholder="Preço" required>

        <button type="submit">Atualizar</button>
    </form>
  </div>





</body>

</html>