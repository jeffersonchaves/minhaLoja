<?php

function obterConexao()
{
    $usuario   = "root";
    $senha     = "root";
    $nome_banco= "bd_loja_ifc";

    try 
    {
        $conexao = new PDO("mysql:host=localhost;dbname=$nome_banco", $usuario, $senha);
        return $conexao;
    
    } catch(PDOException $erro){
        echo "Conexao falhou: ". $erro->getMessage();
    }
}


/** CREATE*/
/* Cadastrar um produto no banco de dados*/
function cadastrarProduto($dados_produto) {

        $conexao = obterConexao();
        extract($dados_produto);

        // Cadastrar produto
        $sql = "INSERT INTO tb_produtos (nome_produto, preco, descricao, categoria) 
                VALUES ('$nome_produto', $preco, '$descricao', '$categoria')";

        $conexao->exec($sql);
}

/** READ*/
/** Solicitar todos os produtos do banco de dados*/
function obterTodosProdutos()
{
    
    $produtos = []; //Array para armazenar os produtos
    $conexao  = obterConexao();

    // Retorna uma declaracao: statement
    $consulta = $conexao->query("SELECT * FROM tb_produtos ORDER BY id DESC");
    $produtos = $consulta->fetchAll(PDO::FETCH_ASSOC);

    return $produtos;
}

/** READ*/
/** Solicitar um único produto do banco de dados*/
function obterProduto($id)
{
    $conexao  = obterConexao();

    // Retorna uma declaracao: statement
    $consulta = $conexao->query("SELECT * FROM tb_produtos WHERE id=$id");
    $produto = $consulta->fetch(PDO::FETCH_ASSOC);

    return $produto;
}

/** UPDATE*/
/** Atualizar registro no banco de dados */
function atualizarProduto($produto_atualizado)
{
    
    $conexao = obterConexao();
    extract($produto_atualizado);

    $sql = "UPDATE tb_produtos SET 
                nome_produto = '$nome_produto',
                preco        = $preco,
                categoria    = '$categoria', 
                descricao    = '$descricao'
            WHERE id = $id";

    $conexao->exec($sql);

    #redirecionar para a tela de admin
    header('location: ../admin');

}

/** DELETE*/
/** Apagar registros no banco de dados */
function apagarProduto()
{
 
}


/** Buscar produto que tenha a palavra procurada no nome*/
function buscarProduto($nome)
{

    $conexao = obterConexao();

    $consulta = "SELECT * FROM tb_produtos WHERE nome_produto LIKE '%{$nome}%' ";

    $produtos = $conexao->query($consulta);
    $produtos = $produtos->fetchAll(PDO::FETCH_ASSOC);

    return $produtos;
}