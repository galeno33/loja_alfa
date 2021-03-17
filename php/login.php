<?php

header("Access-Control-Allow-Origin: *");
header('Content-Type: text/html; charset=utf-8');
$host = "mysql:host=localhost;dbname=originais";
$usuario = "mysql";
$senha = "654321";

    if(isset($_GET["Login"]) || isset($_GET["password"]) ){
        if(!empty($_GET["Login"]) || !empty($_GET["password"]) ){
          $connect = new PDO($host, $usuario, $senha);

          $Login = $_GET["Login"];
          $password = $_GET["password"];

          $sql = $connect->prepare("SELECT * FROM usuario where nome_user = '$Login' and senha_user = '$password'");
              $sql->execute();

                $outp = "";
                  if($rs=$sql-> fetch()){
                      if($outp != ""){$outp .= ",";}
                      $outp .= '{"id":"' .$rs["id_user"] . '",';
                      $outp .= '"nome":"' .$rs["nome_user"] . '",';
                      $outp .= '"password":"' .$rs["senha_user"] . '"}';

                      $outp = '{"msg": {"logado": "sim", "texto": "logado com sucesso!"}, "dados": '.$outp.'}';
                    }else{

                          $outp = '{"msg": {"logado": "não", "texto": login ou senha invalida!"}, "dados": {'.$outp.'}}';
                        }

                        echo utf8_encode($outp);
        }
    }


?>
