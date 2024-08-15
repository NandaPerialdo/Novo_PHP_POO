<?php
    namespace Projeto\PHP\Modelo\DAO;

    require_once('Conexao.php');
    require_once('Endereco.php');
    require_once('Cliente.php');

    use Projeto\PHP\Modelo\DAO\Conexao;
    use Projeto\PHP\Modelo\Endereco;
    use Projeto\PHP\Modelo\Cliente;

    class Inserir{
        public Conexao $conexao;
        public int $codUsuario;
        public string $nome;
        public string $telefone;
        public string $dtNascimento;
        public int $codigoEndereco;
        public string $login;
        public string $senha;

        function cadastrarCliente(
            Conexao $conexao,
            int $codUsuario, 
            string $nome,
            string $telefone,
            string $dtNascimento,
            int $codigoEndereco,
            string $login,
            string $senha,
            ){
            try{
                $conn = $conexao->conectar();//abri a conexao com o banco
                $sql = "Insert into usuario 
                (codUsuario, nome, telefone, dtNascimento, codigo_endereco, login, senha)
                values ('$codUsuario','$nome','$telefone','$dtNascimento','$codigoEndereco','$login','$senha')";
                $result = mysqli_query($conn, $sql);

                //fechar a conexao
                mysqli_close($conn);

                if($result){
                    return"<br>Inserido com sucesso";
                }
                return "<br><br>Não Inserido!";
            }catch(Except $erro){
                return $erro;
            }
        }//fim do metodo

        function cadastrarEndereco(Conexao $conexao, int $codigo,
        string $logradouro,
        int $numero,
        string $bairro,
        string $cidade,
        string $estado,
        string $uf,
        string $cep)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "insert into endereco (codigo, logradouro, numero,
                bairro, cidade, estado, uf, cep) values 
                ('$codigo','$logradouro','$numero','$bairro','$cidade',
                '$estado','$uf','$cep')";
                $result = mysqli_query($conn,$sql);

                //fecha conexao
                mysqli_close($conn);

                if($result){
                    "<br>Endereco inserido com sucesso";
                }
                "<br>Impossivel inserir";
            }catch(Exception $erro){
                echo $erro;
            }

        }
    }//fim da classe
        
?>