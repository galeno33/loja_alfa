<?php


      try{

          require 'conexao.php';


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
      }
?>
