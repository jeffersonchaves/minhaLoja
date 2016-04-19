<?php

    $bancoDeDados = 'bd_loja_ifc';
    $usuario      = 'root';
    $senha        = 'root';

	try{

		$conexao = new PDO("mysql:host=localhost;", $usuario, $senha);
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// IMPORTANTE: use exec() quando não houverem resultados retornados

        // 1) CRIAR O BANCO DE DADOS
        $sql = "CREATE DATABASE IF NOT EXISTS *********;";
        $conexao->exec($sql);

        // 1.1)  INDICAR QUAL BANCO IREMOS USAR
        $sql = "USE **************;";
        $conexao->exec($sql);

        // 2) CRIAR A TABELA PRODUTOS
        $sql = "CREATE TABLE IF NOT EXISTS tb_produtos (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nome_produto VARCHAR(30) NOT NULL,
            preco decimal(10,2) DEFAULT NULL,
            descricao text,
            categoria text
        )";
        $conexao->exec($sql);


		// 3) CADASTRAR PRODUTO PARA TESTE
        $sql = "INSERT INTO tb_produtos (nome_produto, preco, descricao, categoria) 
                    VALUES ('Camiseta IFC Araquari', 300.00,'100% algodao', 'vestuário')";
        $conexao->exec($sql);

        echo "<h2>Banco de dados criado com sucesso!</h2> O registro de teste foi inserido com o id: ".$conexao->lastInsertId();


	} catch(PDOException $erro){

		echo "Erro: " . $erro->getMessage();

	}