<?php 

  require '../app/controlador_produto.php';

  #exemplo id 48

  $guarda_produto = obterProduto(48);

  echo "<pre>";
  print_r($guarda_produto);
  echo "</pre>";


  if (isset($_POST['atualizar'])) {
      
      atualizarProduto($_POST);

      //redirecionar para a pagina admin
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


  <h3>ATUALIZAR PRODUTO <?php echo $guarda_produto['nome_produto']; ?></h3>


  <form class="cadastro-form" method="post"  action="">

    <input type="hidden" name="id" value="<?php echo $guarda_produto['id']; ?>">

    <input type="text" name="nome_produto" value="<?php echo $guarda_produto['nome_produto']; ?>">
    <br>
    
    <input type="text" name="preco" value="<?php echo $guarda_produto['preco']; ?>">
    <br>
    
    <input type="text" name="categoria" value="<?php echo $guarda_produto['categoria']; ?>">
    <br>
    
    <textarea name="descricao" id="" cols="30" rows="10">
      <?php echo $guarda_produto['descricao']; ?>
    </textarea>
    <br />

    <input type="submit" name="atualizar" value="atualizar produto">


</div>
<!-- #loja -->
  
</body>
</html>