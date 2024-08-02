<?php
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');
    require_once('Endereco.php');

    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\Endereco;

    class Inserir{
       public Conexao $conexao;
       public string $tabela;
       public string $cpf;
       public string $nome;
       public string $telefone;
        public string $dtNascimento;
        public float $totalCompras;

        function cadastrarCliente(
            Conexao $conexao, 
            string $cpf, 
            string $nome,
            string $telefone,
            string $dtNascimento,
            float $totalCompras,
            int $codEndereco){
            try{
                $conn = $conexao->conectar();//abri a conexao com o banco
                $sql = "Insert into cliente 
                (cpf, nome, telefone,dtNascimento, totalDeCompras, codEndereco)
                values ('$cpf','$nome','$telefone','$dtNascimento','$totalCompras','$codEndereco')";
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