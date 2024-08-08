<?php
    namespace Projeto\PHP\Modelo;

    require_once('Livro.php');
    require_once('DAO/Consultar.php');
    require_once('Cliente.php');
    require_once('DAO/Conexao.php');

    use PHP\Modelo\Livro;
    use PHP\Modelo\Cliente;
    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Conexao;

    $consultar = new Consultar();
    $conexao = new Conexao();

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
    ?>
    
    </body>
    </html>