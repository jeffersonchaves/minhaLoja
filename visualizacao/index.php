<?php include '../conexao.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>loja</title>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  	<link rel="stylesheet" href="style.css">
</head>
<body>

<div id="loja">

  <?php foreach ($produtos as $produto) : ?>

  <div class="col-4">
    <div class="product">
      <div class="image">
        <img src="img/produto.jpg" alt="" class="img-responsive">
      </div>
    
      <div class="text">
        <h3> <a href="#"><?= $produto['nome_produto']; ?></a></h3>
        <p class="price">R$<?= $produto['preco']; ?></p>
      </div>
    </div>
  </div>

  <?php endforeach; ?>

</div>
<!-- #loja -->
  
</body>
</html>