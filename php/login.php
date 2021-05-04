<?php


    if(isset($_GET["Login"]) || isset($_GET["password"]) ){
        if(!empty($_GET["Login"]) || !empty($_GET["password"]) ){


          require 'conexao.php';//faz um requerimento ao arquivo de conexão

          $Login = $_GET["Login"];
          $password = $_GET["password"];

          $sql = $conn->prepare("SELECT * FROM usuario where nome_user = '$Login' and senha_user = '$password'");
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
