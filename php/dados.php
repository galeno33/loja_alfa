<?php
      header("Access-Control-Allow-Origin: *");
      header('Content-Type: text/html; charset=utf-8');
      $host = "mysql:host=localhost;dbname=originais";
      $usuario = "mysql";
      $senha = "654321";

      try{
        $conn = new PDO($host, $usuario, $senha);

        if(!$conn){
            echo "Não foi possivel conectar com Banco de Dados!";
        }

        $query = $conn->prepare('SELECT * FROM `produtos` order by id asc');

          $query->execute();

          $out = "[";

          while($resultado = $query->fetch()){
              if($out != "["){
                $out .= ",";
              }

              $out .= '{"id": "' .$resultado["id"].'",';
              $out .= '"codigo": "' .$resultado["codigo"].'",';
              $out .= '"img": "' .$resultado["image"].'",';
              $out .= '"nome": "' .$resultado["nome"].'",';
              $out .= '"tipo": "' .$resultado["tipo"].'",';
              $out .= '"preco": "' .$resultado["preco"].'",';
              $out .= '"detalhes": "' .$resultado["detalhes"].'",';
              $out .= '"status": "' .$resultado["estatus"].'"}';

          }
          $out .= "]";
          echo $out;
      }catch(Exception $e){
        echo "Error: ".$e->getMessage();
      };
?>
