<?php

      header("Access-Control-Allow-Origin: *");
      header('Content-Type: text/html; charset=utf-8');
      /*$host = "mysql:host=localhost;dbname=originais";
      $usuario = "mysql";
      $senha = "654321";*/
      $host = "mysql:host=mysql873.umbler.com;dbname=loja_2021";//no lugar de localhost colar == mysql380.umbler.com(é o host do servidor online)
      $usuario = "galeno33";
      $senha = "devinp123456";


      $conn = new PDO($host, $usuario, $senha);





?>
