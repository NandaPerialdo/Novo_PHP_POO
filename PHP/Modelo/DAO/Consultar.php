<?php
    namespace Projeto\PHP\Modelo\DAO;
    require_once('Conexao.php');
    use Projeto\PHP\Modelo\DAO\Conexao;

    class Consultar{
        
        function consultarIndividual(
            Conexao $conexao,
            string $nomeTabela,
            string $nomeCampo,
            string $codigo
        ){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from $nomeTabela where $nomeCampo = '$codigo'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados["cpf"] == $codigo){
                        echo "\nCPF: ".$dados["cpf"].
                             "\nNome: ".$dados["nome"].
                             "\nTelefone: ".$dados["telefone"].
                             "\nData de Nascimento".$dados["dtNascimento"].
                             "\nTotal de Compras: ".$dados["totalDeCompras"];
                        return;//encerrando um processo
                    }
                    echo "Codigo digitado nao é valido";
                }//fim do enquanto
            }catch(Exeption $erro){
                echo $erro;
            }//fim do try catch
        }//fim do metodo

        function consultarTudo(Conexao $conexao,
        string $nomeTabela){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from $nomeTabela";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){
                    echo "<br>CPF: ".$dados["cpf"].
                         "<br>Nome: ".$dados["nome"].
                         "<br>Telefone: ".$dados["telefone"].
                         "<br>Data de Nascimento: ".$dados["dtNascimento"].
                         "<br>Total de Compras: ".$dados["totalDeCompras"];
                }//fim do while

            }catch(Except $erro){
                echo $erro;
            }//fim do try catch
        }//fim do metodo

        function consultarLivros(Conexao $conexao,
        string $nomeTabela){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from $nomeTabela";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){
                    echo "<br>Titulo: ".$dados["titulo"].
                         "<br>Autor: ".$dados["autor"].
                         "<br>Valor: ".$dados["valor"].
                         "<br>Quantidade: ".$dados["quantidade"];
                }//fim do while

            }catch(Except $erro){
                echo $erro;
            }//fim do try catch
        }//fim do metodo

        function exibirLivroUm(
            Conexao $conexao,
        ){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from livro where codLivro = '1'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados["codLivro"] == '1'){
                        echo "<br>Titulo: ".$dados["titulo"].
                        "<br>Autor: ".$dados["autor"].
                        "<br>Valor: ".$dados["valor"].
                        "<br>Quantidade: ".$dados["quantidade"];
                        return;//encerrando um processo
                    }
                    echo "Codigo digitado nao é valido";
                }//fim do enquanto
            }catch(Exeption $erro){
                echo $erro;
            }//fim do try catch
        }//fim do metodo

        function exibirLivroDois(
            Conexao $conexao,
        ){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from livro where codLivro = '2'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados["codLivro"] == '2'){
                        echo "<br>Titulo: ".$dados["titulo"].
                        "<br>Autor: ".$dados["autor"].
                        "<br>Valor: ".$dados["valor"].
                        "<br>Quantidade: ".$dados["quantidade"];
                        return;//encerrando um processo
                    }
                    echo "Codigo digitado nao é valido";
                }//fim do enquanto
            }catch(Exeption $erro){
                echo $erro;
            }//fim do try catch
        }//fim do metodo

        function exibirLivroTres(
            Conexao $conexao,
        ){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from livro where codLivro = '3'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados["codLivro"] == '3'){
                        echo "<br>Titulo: ".$dados["titulo"].
                        "<br>Autor: ".$dados["autor"].
                        "<br>Valor: ".$dados["valor"].
                        "<br>Quantidade: ".$dados["quantidade"];
                        return;//encerrando um processo
                    }
                    echo "Codigo digitado nao é valido";
                }//fim do enquanto
            }catch(Exeption $erro){
                echo $erro;
            }//fim do try catch
        }//fim do metodo

        function validarLogin(
            Conexao $conexao,
            string $login
        ){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from usuario where login = '$login'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados["login"] == $login){
                        return True;
                    }else{
                        return False;
                    }
                }//fim do enquanto
            }catch(Exeption $erro){
                echo $erro;
            }//fim do try catch
        }//fim do metodo

        function validarSenha(
            Conexao $conexao,
            string $senha
        ){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from usuario where senha = '$senha'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados["senha"] == $senha){
                        return True;
                    }else{
                        return False;
                    }
                }//fim do enquanto
            }catch(Exeption $erro){
                echo $erro;
            }//fim do try catch
        }//fim do metodo

        function validarGeral($validarLogin, $validarSenha){
            if ($validarLogin && $validarSenha == True){
                echo "logado com sucesso!";
            }else{
                echo "login ou senha incorretos";
            }
                
        }


    }//fim da classe


?>