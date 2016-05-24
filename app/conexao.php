<?php

function obterConexao()
{
    try 
    {
        $conexao = new PDO("mysql:host=localhost;dbname=bd_loja_ifc",'root', 'root');
        return $conexao;
    
    } catch(PDOException $erro){
        echo "Conexao falhou: ". $erro->getMessage();
    }
}