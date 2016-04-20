<?php

	$bancoDeDados = 'bd_loja_ifc';
	$usuario      = 'root';
	$senha        = 'root';

	try {

		$conexao = new PDO("mysql:host=localhost;dbname=$bancoDeDados", $usuario, $senha);

		//Faça uma consulta usando o comando disparando uma query SELECT
		$consulta = $conexao->query('SELECT * FROM tb_produtos');

		// Busque o conteudo da consulta com o comando FETCH
		$produto = $consulta->fetch(PDO::FETCH_ASSOC);

		// Teste sua consulta com print_r

	} catch(PDOException $erro){

		echo "Conexao falhou: ". $erro->getMessage();
	}