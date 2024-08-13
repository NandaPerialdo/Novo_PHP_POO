<?php
    namespace Projeto\PHP\Modelo;

    require_once('Endereco.php');
    require_once('Pessoa.php');

    use Projeto\PHP\Modelo\Endereco;
    use Projeto\PHP\Modelo\Pessoa;

    class Cliente extends Pessoa{
        

        function __construct(){
            
        }//fim do método

        function imprimir():string{
            return parent::imprimir()."<br>Login: ".$this->login.
            "<br>Senha: ".$this->senha;
        }

        function validarCliente():string{
            if ($login == 'Fernanda' && $senha == 123){
                return "Usuário Válido";
            }else{
                return "Usuario Inválido";
            }
        }//fim do metodo*/

        /*function consultarUsuario(
            Conexao $conexao,
            string $login,
            string $senha
        ){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from usuario where login = '$login'";
                $sql2 = "select * from usuario where senha = '$senha'";
                $result = mysqli_query($conn,$sql,$sql2);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados["login"] == $login and $dados["senha"] == $senha ){
                        echo "Logado com Sucesso!"
                        return;//encerrando um processo
                    }
                    echo "Login ou senha incorretos";
                }//fim do enquanto
            }catch(Exeption $erro){
                echo $erro;
            }//fim do try catch
        }//fim do metodo*/

        

        
    }//fimD do cliente
?>