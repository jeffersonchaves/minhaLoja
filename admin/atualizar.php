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


  <h3>ATUALIAR PRODUTO <?= $produto['nome_produto'] ?></h3>


  <form method="post" name="atualizar" action="?id_produto=1&acao=atualizar">
    
    <input type="hidden" name="id_produto" value="<?= $produto['id'] ?>">

    <input type="text" name="nome_produto" value="<?= $produto['nome_produto'] ?>">
    <br>
    <input type="text" name="preco" value="<?= $produto['preco'] ?>">
    <br>
    <input type="text" name="categoria" value="<?= $produto['categoria'] ?>">
    <br>
    <textarea name="descricao" id="" cols="30" rows="10">
      <?= $produto['descricao'] ?>
    </textarea>

    <input type="submit" value="atualizar">



  </form>


</div>
<!-- #loja -->
  
</body>
</html>