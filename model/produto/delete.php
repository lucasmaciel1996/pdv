<?php
 require_once '../../controller/ProdutosController.php';
  
  $produto='Deletar';
  $res = DeletarProduto($produto);
  var_dump($res);