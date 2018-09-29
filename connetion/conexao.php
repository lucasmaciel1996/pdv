<?php
  function conect_db(){
      
  $host ='localhost';
  $user ='root';
  $password ='elaborata';
  $banco ='pdv';
  
    $con =  mysqli_connect($host, $user, $password, $banco);
    mysqli_set_charset($con, 'utf8');
   return $con;
  }