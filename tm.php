<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Métricas de Marketing - Ticket Médio</title>
</head>
<body>
  <a href="../metricas/index.php">voltar</a>
  <h1>2. Ticket Médio</h1>
  <p> Para esse cálculo, digite os itens abaixo:</p>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="receitas">Receita do mês:</label>
    <input type="number" id="receitas" name="receitas">
    <br>
    <br>
    <label for="clientes">Número de clientes que fizeram compra::</label>
    <input type="number" id="clientes" name="clientes">
    <br>
    <br>
    <button type="submit">Calcular</button>
    <br>
  </form>

  <!-- <?php echo $_SERVER['PHP_SELF']; ?>
  <?php echo $_SERVER['REQUEST_METHOD']; ?> -->


  <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $receitas = $_POST["receitas"];
      $clientes = $_POST["clientes"];

      if(empty($receitas) || empty($clientes)) {
        echo "<br>Preencha todos os campos!";
      } else {
        $tm = $receitas/$clientes;
        echo "<br>Ticket Médio = " . $tm;
      }
    }

  ?>
</body>
</html>