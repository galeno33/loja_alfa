<?php

      header("Access-Control-Allow-Origin: *");
      header('Content-Type: text/html; charset=utf-8');
      $host = "mysql:host=mysql873.umbler.com;dbname=apploja";//no lugar de localhost colar == mysql380.umbler.com(é o host do servidor online)
      $usuario = "galeno033";
      $senha = "devinp654321";


      $conn = new PDO($host, $usuario, $senha);





?>
