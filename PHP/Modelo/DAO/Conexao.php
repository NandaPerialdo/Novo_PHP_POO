<?php
    namespace Projeto\PHP\Modelo\DAO;

    class Conexao{

        function conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','livrariaEraUmaVez');
                if($conn){
                    //echo "<br>Conectado com Sucesso!";
                    return $conn;
                }//fim do if
                echo "<br>Algo deu errado";
            }catch(Except $erro){
                return $erro;
            }//fim do try catch

        }//fim do metodo conectar

       

    }//fim da classe

  


?>