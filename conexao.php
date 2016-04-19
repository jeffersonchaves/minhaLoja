<?php

	$bancoDeDados = 'bd_loja_ifc';
	$usuario      = 'root';
	$senha        = 'root';

	try {

		$conexao = new PDO("mysql:host=localhost;dbname=$bancoDeDados", $usuario, $senha);

	} catch(PDOException $erro){

		echo "Conexao falhou: ". $erro->getMessage();
	}