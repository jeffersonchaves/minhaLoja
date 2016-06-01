<?php 

  require '../app/controlador_produto.php';


  if (isset($_POST['cadastrar'])) {
      cadastrarProduto($_POST);
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


  <h3>CADASTRAR PRODUTO</h3>


  <form class="cadastro-form" method="post"  action="">
    <input type="text" name="nome_produto">
    <br>
    <input type="text" name="preco">
    <br>
    <input type="text" name="categoria">
    <br>
    <textarea name="descricao" id="" cols="30" rows="10"></textarea>
    <br />

    <input type="submit" name="cadastrar" value="cadastrar produto">


</div>
<!-- #loja -->
  
</body>
</html>