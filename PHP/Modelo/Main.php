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
    23,'Jardim das Frutas','Sao Caetano','SP','SP',
    'Brasil','94326-777');

    //$person1 = new Pessoa('123','Allan','1213','29/02/1999',$enderecoCLiente);
   //echo $person1->imprimir();
    //echo $enderecoCLiente->imprimir();

    $funcionario1 = new Funcionario('555555', 'Fernanda', '11353455', '02/10/2003', $enderecoFuncionario, 2222);
    echo $funcionario1->imprimir();

    $cliente = new Cliente('123','Allan','1213','29/02/1999',$enderecoCLiente, 2340);
    echo $cliente->imprimir();


   /*$cliente1 = new Cliente('2353453465436',
    'Fernanda',
    '11234545687',
    '02/10/2003',
    $enderecoCliente1,
    'teste',
    2093);

    echo $cliente1->imprimir();
    echo $enderecoCliente1->imprimir();

    echo "<br><br>";*/



?>