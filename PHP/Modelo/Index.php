<?php
    namespace Projeto\PHP\Modelo;

    require_once('Livro.php');
    require_once('DAO/Consultar.php');
    require_once('Cliente.php');
    require_once('DAO/Conexao.php');
    require_once('DAO/Inserir.php');

    use Projeto\PHP\Modelo\Livro;
    use Projeto\PHP\Modelo\Cliente;
    use Projeto\PHP\Modelo\DAO\Consultar;
    use Projeto\PHP\Modelo\DAO\Conexao;
    use Projeto\PHP\Modelo\DAO\Inserir;

    $consultar = new Consultar();
    $conexao = new Conexao();
    $cliente = new Cliente();
    $inserir = new Inserir();

?>
    <!DOCTYPE html>
    <html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página Inicial</title>
    </head>
    <body>

    <h1>Bem Vindo à Livraria Era Uma Vez!</h1>
    <br>
    <h2>Confira nosso Catálogo:</h2>
    
    <?php
        $consultar->consultarLivros($conexao,'livro');
        //metodos para exibir o livro
        $consultar->exibirLivroUm($conexao,'livro');
        $consultar->exibirLivroDois($conexao,'livro');
        $consultar->exibirLivroTres($conexao,'livro');
    ?>

    <h2>Procedimento pra login<h2>

    <?php
        //$consultar->validarLogin($conexao,'nandaperi');
       // $consultar->validarSenha($conexao,'123');
        $consultar->validarGeral($conexao,$consultar->validarLogin($conexao,'nandaperi'),$consultar->validarSenha($conexao,'123'));
    ?>

    <h2>Procedimento para Cadastrar Usuario<h2>

    <?php
        $inserir->cadastrarCliente($conexao,5,'Usuario Teste','123214234','02/10/2003',1,'fulano','fulano123');
    ?>

    <h2>Procedimento para Comprar<h2>
    
    </body>
    </html>