<?php
    /*namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    function realizarCompra(
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
    }//fim do metodo*/

?>