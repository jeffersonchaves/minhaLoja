<?php 

  require '../app/controlador_produto.php'; 

  if(!isset($_GET['buscar'])){
      $produtos = obterTodosProdutos();
  }else {
      $produtos = buscarProduto($_GET['buscar']);
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>loja</title>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  	<link rel="stylesheet" href="../public/style.css">
</head>
<body>

<div id="loja">

  <div class="gerenciarProdutos">
    
    

    <form class="buscar" method="get" action="">
      
      <input type="text" name="buscar">
      <input type="submit" value="buscar">

    </form>

  </div>

  <table>
    <thead>
    <tr>
      <th>#id</th>
      <th>#produto</th>
      <th>#preço</th>
      <th></th>
    </tr>
  </thead>

    <?php foreach ($produtos as $produto) : ?>
      <tr>
        <td><?= $produto['id']; ?></td>
        <td><?= $produto['nome_produto']; ?></td>
        <td><?= $produto['preco']; ?></td>
        <td>editar | exluir</td>
      </tr>

    <?php endforeach; ?>

  </table>

</div>
<!-- #loja -->
  
</body>
</html>