<?php

	try {
		
		$conexao = new PDO("mysql:host=localhost;dbname=bd_loja_ifc",'root', '');

	} catch(PDOException $erro){

		echo "Conexao falhou: ". $erro->getMessage();
	}