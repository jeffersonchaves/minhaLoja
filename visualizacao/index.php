<?php require '../conexao.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Minha Loja</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div id="loja">

		<?php foreach($produtos as $produto): ?>
		<div class="bloco">
			<div class="produto">
				  
				  <div class="imagem">
			        <img src="img/produto.jpg" alt="" class="img-responsiva">
			      </div>
			    
			      <div class="texto">
			        <h3> 
			        	<a href="#"><?= $produto['nome_produto']; ?></a>
			        </h3>
			        <p class="preco"><?= $produto['preco'] ?></p>
			      </div>
		    
		    </div>
		</div>
		<?php endforeach; ?>
</div>
	
</body>
</html>