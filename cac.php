<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Métricas de Marketing - CAC</title>
</head>
<body>
  <a href="../metricas/index.php">voltar</a>
  <h1>1. Custo de Aquisição do Cliente (CAC)</h1>
  <p> Para esse cálculo, digite os itens abaixo:</p>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="despesas">Despesas:</label>
    <input type="number" id="despesas" name="despesas">
    <br>
    <br>
    <label for="marketing">Investimento em marketing:</label>
    <input type="number" id="marketing" name="marketing">
    <br>
    <br>
    <label for="vendas">Investimento em vendas:</label>
    <input type="number" id="vendas" name="vendas">
    <br>
    <br>
    <label for="clientes">Novos clientes:</label>
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
      $despesas = $_POST["despesas"];
      $marketing = $_POST["marketing"];
      $vendas = $_POST["vendas"];
      $clientes = $_POST["clientes"];

      if(empty($despesas) || empty($marketing) || empty($vendas) || empty($clientes)) {
        echo "<br>Preencha todos os campos!";
      } else {
        $cac = ($despesas + $marketing +$vendas)/$clientes;
    
        echo "<br>Custo de Aquisição do Cliente (CAC) = " . $cac;
      }
    }

  ?>
</body>
</html>