<?php
  require_once '../../controller/ProdutosController.php';
  
 // echo __DIR__;
  
  $res = ListaProdutos();
  var_dump($res);