<?php

require $_SERVER['DOCUMENT_ROOT']."/loja/app/conexao.php";

/** Solicitar todos os produtos do banco de dados*/
function obterTodosProdutos()
{
    
    $produtos = []; //Array para armazenar os produtos
    $conexao  = obterConexao();

    // Retorna uma declaracao: statement
    $consulta = $conexao->query("SELECT * FROM tb_produtos");
    $produtos = $consulta->fetchAll(PDO::FETCH_ASSOC);

    return $produtos;
}

/** Solicitar um único produto do banco de dados*/
function obterProduto($id)
{
    $conexao  = obterConexao();

    // Retorna uma declaracao: statement
    $consulta = $conexao->query("SELECT * FROM tb_produtos WHERE id=$id");
    $produto = $consulta->fetch(PDO::FETCH_ASSOC);

    return $produto;
}


/* Cadastrar um produto no banco de dados*/
function cadastrarProduto($dados_produto) {

        $conexao = obterConexao();
        extract($dados_produto);

        // Cadastrar produto
        $sql = "INSERT INTO tb_produtos (nome_produto, preco, descricao, categoria) 
                VALUES ('$nome_produto', $preco, '$descricao', '$categoria')";

        $conexao->exec($sql);
}


/** Buscar produto que tenha a palavra procurada no nome*/
function buscarProduto($palavra_buscada)
{
    $conexao  = obterConexao();

    // Retorna uma declaracao: statement
    $consulta = $conexao->query("SELECT * FROM tb_produtos WHERE nome_produto LIKE '%{$palavra_buscada}%'");
    $produtos = $consulta->fetchAll(PDO::FETCH_ASSOC);

    return $produtos;
}