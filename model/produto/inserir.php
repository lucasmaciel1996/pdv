<?php
 require_once '../../controller/ProdutosController.php';
  
  $produto='Inserir';
  $res = InserirProdutos($produto);
  var_dump($res);