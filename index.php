<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
  <title>Desafio!</title>
</head>

<body>
<div>
<form action="DB_Cadastro.php" method="POST">
      <div class="block"><center>
          <span>
            <h1> Cadastrar Produtos</h1>
          </span>
          <input class="input-res" type="text" name="produto" placeholder="Produto" required>
          <input class="input-res" type="text" name="preco" placeholder="Preço" required>
          <input class="input-res" type="text" name="cor" placeholder="Cor" required>
      </div>
      <button type="submit">Inclusao</button>

    </form>
  </div>
  <div id="divConteudo">
    <table id="tabela">
      <thead>
        <tr>
          <th>ID</th>
          <th>NOME</th>
          <th>COR</th>
          <th>PREÇO</th>
          <th>Desconto</th>
          <th>AÇÃO</th>
        </tr>
        <tr>
          <th><input type="text" id="txtColuna1" placeholder="pesquisa por ID" /></th>
          <th><input type="text" id="txtColuna2" placeholder="pesquisa por Nome" /></th>
          <th><input type="text" id="txtColuna3" placeholder="pesquisa por Cor" /></th>
          <th><input type="text" id="txtColuna4" placeholder="pesquisa por Preço" /></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        
        <?php
        // trazendo os dados do banco e aplicando as regras de negocio 
              include "DB_Conexao.php";
              $sql = "SELECT * FROM produtos AS C JOIN precos AS P ON C.IDPROD = P.IDPRECO";

              $resultado = mysqli_query($conexao, $sql);
              while ($registro = mysqli_fetch_array($resultado)) {
                echo '<tr>';
                echo '<td>' . $registro['IDPROD'] . '</td>';
                echo "<td>" . $registro['NOME'] . "</td>";
                echo "<td>" . $registro['COR'] . "</td>";
                echo "<td>R$ " . $registro['PRECO'] . "</td>";
                if ($registro['COR'] === "VERMELHO" and $registro['PRECO'] > 50.00) {
                  echo "<td>DESCONTO DE 5%</td>";
                } else if ($registro['COR'] === "AZUL" || $registro['COR'] === "VERMELHO") {
                  echo "<td>DESCONTO DE 20%</td>";
                } elseif ($registro['COR'] === "AMARELO") {
                  echo "<td>DESCONTO DE 10%</td>";
                } else {
                  echo "<td>Sem Descontos para este produto!</td>";
                }
                echo '<td><a class="btn" href="Atualizacao.php?id=' . $registro['IDPROD'] . '">Atualização</a>
                          <a class="btn" href="Exclusao.php?id=' . $registro['IDPROD'] . '">Exclusao</a></td>';
                echo '</td>';
                echo '</tr>';
              } ?>
      </tbody>
    </table>
  </div>

  
  <script>
    //usando keyup nos inputs existentes na tabela para que, quando uma tecla for pressionada estando com o cursor sobre os campos de texto, os registros da tabela serão filtrados a partir da coluna em que se efetuou o filtro e o valor que foi digitado.

    $(function() {
      $("#tabela input").keyup(function() {
        var index = $(this).parent().index();
        var nth = "#tabela td:nth-child(" + (index + 1).toString() + ")";
        var valor = $(this).val().toUpperCase();
        $("#tabela tbody tr").show();
        $(nth).each(function() {
          if ($(this).text().toUpperCase().indexOf(valor) < 0) {
            $(this).parent().hide();
          }
        });
      });

      $("#tabela input").blur(function() {
        $(this).val("");
      });
    });
  </script>
</body>

</html>