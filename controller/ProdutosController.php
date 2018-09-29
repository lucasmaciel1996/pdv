<?php
 require_once __DIR__. '/../connetion/conexao.php';
 
function ListaProdutos()
{
   $con =  conect_db();
   
  return $con;   
}

function AtualizarProdutos($produto)
{
   return $produto;   
}

function DeletarProduto($produto)
{
   return $produto; 
}

function InserirProdutos($produto)
{
     return $produto; 
}