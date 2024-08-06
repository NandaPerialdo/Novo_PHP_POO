<?php
    namespace Projeto\PHP\Modelo;

    require_once('Livro.php');
    require_once('Main.php');

    use PHP\Modelo\Livro;
    use PHP\Modelo\Main;

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
        echo $livro1->imprimir();
    ?>
    
        
    </body>
    </html>