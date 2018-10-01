<?php
   require_once '../../connetion/conexao.php';
$con =  conect_db();

$produto =  json_encode($_POST['cupom']);
$total=$_POST['total'];

$sql= "INSERT INTO vendas"
       ."(nota,produtos,total,data)"
       ."VALUES (null,'$produtos','$total',now())";

$res=  mysqli_query($con, $sql);

//Lucas Maciel

echo json_encode($res);
