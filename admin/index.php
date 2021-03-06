<?php 

  require '../app/controlador_produto.php'; 

  /*IMPLEMENTAR ACAO DO BUSCAR*/
  if(  isset($_GET['pesquisar'])  ){

    $produtos = buscarProduto($_GET['pesquisar']);

  }else {
    $produtos = obterTodosProdutos();
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
    
    <!-- ADICIONE O BOTAO CADASTRAR -->
    <a href="cadastrar_produto.php" class="botao">CADASTRAR</a>

    <form class="buscar" method="get" action="">
      
      <input type="text" name="pesquisar">
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
        
        <td> <a href="atualizar_produto.php?id=<?php echo $produto['id']; ?>">editar</a> </td>
      
      </tr>

    <?php endforeach; ?>

  </table>

</div>
<!-- #loja -->
  
</body>
</html>