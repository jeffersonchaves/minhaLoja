<?php

	$usuario   = "root";
	$senha     = "root";
    $nome_banco= "bd_loja_ifc";

	try{

		$conexao = new PDO("mysql:host=localhost;", $usuario, $senha);
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// IMPORTANTE: use exec() quando não houverem resultados retornados

        // 1) Criar banco de dados
        $sql = "CREATE DATABASE IF NOT EXISTS $nome_banco;";
        $conexao->exec($sql);

        // 2) Indicar qual banco usaremos
        $sql = "USE $nome_banco;";
        $conexao->exec($sql);

        // 3) Criar a tabela funcionarios
        $sql = "CREATE TABLE IF NOT EXISTS tb_produtos (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nome_produto VARCHAR(30) NOT NULL,
            preco decimal(10,2) DEFAULT NULL,
            descricao text,
            categoria text
        )";
        
        $conexao->exec($sql);

		// 4) Inserir dados na tabela funcionarios
        $sql = "INSERT INTO tb_produtos (nome_produto, preco, descricao, categoria) 
                    VALUES ('Camiseta IFC Araquari', 300.00,'100% algodao', 'vestuario')";
        $conexao->exec($sql);


        $sql = "UPDATE tb_produtos SET nome_produto = 'UNIFORME DE INVERNO' WHERE id=1"; 
        $conexao->exec($sql);

        echo "SISTEMA INSTALADO COM SUCESSO!<br />";
        echo "O produto de teste cadastrado com o id: ".$conexao->lastInsertId();

        //espera 5 segundos
        sleep(5);

        header("location:/public/loja/index.php");

        echo "teste ";

                $sql = "INSERT INTO tb_produtos (nome_produto, preco, descricao, categoria) 
                    VALUES ('Frango Xadrez', 30.00,'100% algodao', 'vestuario')";
        $conexao->exec($sql);


	} catch(PDOException $erro){

		echo "Erro: " . $erro->getMessage();

	}