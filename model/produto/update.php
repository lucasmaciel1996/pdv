<?php
 require_once '../../controller/ProdutosController.php';
  
  $produto='Update';
  $res = AtualizarProdutos($produto);
  var_dump($res);