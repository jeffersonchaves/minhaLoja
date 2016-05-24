<?php
    require 'app/controlador_produto.php';

    //Se existe um id na URL chama a funcao para mostra o produto
    if(isset($_GET['id'])){
        $produto = obterProduto($_GET['id']);
    } else {
        echo "Não foi possível encontrar esse produto!";
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>loja</title>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  	<link rel="stylesheet" href="public/style.css">
</head>
<body>

<div id="loja">


  <div class="col-3">
    <div class="product">
      <div class="image">
        <img src="public/img/product2.jpg" alt="" class="img-responsive">
      </div>
    </div>
  </div>


  <div class="col-product">

    <div class="product">

      <div id="align-left" class="text">
        <h3> <?= $produto['nome_produto']; ?></h3>
        <p class="price" editable="true">R$<?= $produto['preco']; ?></p>

        <a href="" class="btn-comprar">Comprar agora</a>

        <h3>DESCRIÇÃO</h3>
        <p class=""><?= $produto['descricao']; ?></p>
      </div>

    </div>
  
  </div>


</div>
<!-- #loja -->
  
</body>
</html>