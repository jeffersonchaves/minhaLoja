<?php

	$bancoDeDados = 'bd_loja_ifc';
	$usuario      = 'root';
	$senha        = 'root';

	try {

		$conexao = new PDO("mysql:host=localhost;dbname=$bancoDeDados", $usuario, $senha);

		//Faça uma consulta usando o comando disparando uma query SELECT

		// Busque o conteudo da consulta com o comando FETCH

		// Teste sua consulta com print_r

	} catch(PDOException $erro){

		echo "Conexao falhou: ". $erro->getMessage();
	}