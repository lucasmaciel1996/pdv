<?php
 require_once __DIR__. '/../connetion/conexao.php';
 
function ListaProdutos()
{
   $con =  conect_db();
   $query= 'SELECT * FROM produtos';
   
   $res = mysqli_query($con, $query);
   
   $produtos = mysqli_fetch_all($res, MYSQLI_ASSOC);
   
  echo json_encode($produtos);   
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