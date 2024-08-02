<?php
//responsavel pela entrada e saida de dados
//importar todas as classes
    namespace Projeto\PHP\Modelo;

    require_once('Compra.php');
    require_once('Cliente.php');
    require_once('Endereco.php');
    require_once('Livro.php');
    require_once('Reserva.php');
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    require_once('DAO/Conexao.php');
    require_once('DAO/Inserir.php');

    use PHP\Modelo\DAO\Conexao;//direcionar o arquivo
    use PHP\Modelo\DAO\Inserir;

    $conexao = new Conexao();
    $inserir = new Inserir();

    echo $inserir->cadastrarEndereco($conexao,1,'Rua Laranjas',
    23,'Jardim das Arvores','Sao Bernardo','SP','SP',
    'Brasil','94326-678');

    echo $inserir->cadastrarCliente($conexao,'123','Fernanda','1213',
    '29/02/1999',1000,1);

/*
    use Projeto\PHP\Modelo\Pessoa;
    use Projeto\PHP\Modelo\Cliente;
    use Projeto\PHP\Modelo\Endereco;
    use Projeto\PHP\Modelo\Funcionario;
    use Projeto\PHP\Modelo\Livro;
    use Projeto\PHP\Modelo\Reserva;

    $enderecoCLiente = new Endereco('Rua Laranjas',
    23,'Jardim das Arvores','Sao Bernardo','SP','SP',
    'Brasil','94326-678');

    $enderecoFuncionario = new Endereco ('Rua Amoras',
    22,'Jardim das Frutas','Sao Caetano','SP','SP',
    'Brasil','94326-777');

    $funcionario1 = new Funcionario('555555', 'Fernanda', '11353455', '02/10/2003', $enderecoFuncionario, 2222);
    echo "<br>Funcionário";
    echo $funcionario1->imprimir();

    $cliente1 = new Cliente('123','Allan','1213','29/02/1999',$enderecoCLiente, 'Fernanda',123);
    echo "<br><br>Cliente";
    echo $cliente1->imprimir();

    $livro1 = new Livro('12345','Alice no Pais das Maravilhas','Lewis Carrol',52.32,3);
    echo "<br><br>Livro";
    echo $livro1->imprimir();

    $compra1 = new Compra(1,'1111111111',520, $livro1);
    echo "<br><br>Compra";
    echo $compra1->imprimir();
    echo "<br>".$livro1->retornarTitulo();
    echo "<br>"."Valor: R$ ".$livro1->retornarValor();
   
    $reserva1 = new Reserva(1,'31/07/2024','Era uma Vez');
    echo "<br><br>Reserva";
    echo $reserva1->imprimir();
    echo "<br>".$livro1->retornarTitulo();

    echo $cliente1->validarCliente();

*/

?>