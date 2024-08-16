<?php
    namespace Projeto\PHP\Modelo;

    
    require_once('DAO\Conexao.php');
    require_once('DAO\Consultar.php');

    use Projeto\PHP\Modelo\DAO\Conexao;
    use Projeto\PHP\Modelo\DAO\Consultar;

    $consultar = new Consultar();
    $conexao = new Conexao();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros - Livraria Era Uma Vez</title>
    <link rel="icon" href="favicom.png" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1 align="center">Livraria Era Uma Vez📖</h1>
        <nav>
            <a href="home.php">Início</a>
            <a href="index.php" class="active">Livros</a>
            <a href="login.php">Login</a>
            <a href="cadastro.php">Cadastro</a>
        </nav>
    </header>

    <main>
        <h2 align="center">Livros Disponíveis</h2>
        <div class="book-list">

            <!-- Livro 1 -->
            <div class="book-item">
                <?php
                    $consultar->exibirLivroUm($conexao);
                ?>
                <a href="PaginaLogin.php" align="center"><button style="background: #069cc2; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 16px;">Comprar</button></a>
            </div>

            <!-- Livro 2 -->
            <div class="book-item">
                <?php
                    $consultar->exibirLivroDois($conexao);
                ?>
                <a href="PaginaLogin.php" align="center"><button style="background: #069cc2; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 16px;">Comprar</button></a>
            </div>

            <!-- Livro 3 -->
            <div class="book-item">
                <?php
                    $consultar->exibirLivroTres($conexao);
                ?>
                <a href="PaginaLogin.php" align="center"><button style="background: #069cc2; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 16px;">Comprar</button></a>
            </div>
    
        </main>

    <footer>
        <p>&copy; 2024 Livraria Era Uma Vez. Todos os direitos reservados.</p>
    </footer>

    <script src="eraumavez.js"></script>
</body>
</html>