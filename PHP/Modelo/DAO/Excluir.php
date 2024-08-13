<?php
    namespace Projeto\PHP\Modelo\DAO;
    require_once('Conexao.php');
    use Projeto\PHP\Modelo\DAO\Conexao;

    class Excluir{

        function excluirCliente(Conexao $conexao,
        String $cpf)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "delete from cliente where cpf = '$cpf'";
                $result = mysqli_query($conn,$sql);

                mysqli_close($conn);
                if($result){
                    echo "Excluido com sucesso!";
                }else{
                    echo "Não foi possivel excluir!";
                }///fim do if
            }catch(Exception $erro){
                echo $erro;
            }//fim do try catch

        }//fim do metodo

    }//fim da classe
?>