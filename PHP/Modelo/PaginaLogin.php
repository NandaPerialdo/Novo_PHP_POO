<?php>
    namespace Projeto\PHP\Modelo;

    require_once('DAO\Conexao.php');
    require_once('DAO\Consultar.php');

    use Projeto\PHP\Modelo\DAO\Conexao;
    use Projeto\PHP\Modelo\DAO\Consultar;

    $consultar = new Consultar();
    $conexao = new Conexao();
    $validar = $consultar->validarGeral($conexao,$consultar->validarLogin($conexao,'nandaperi'),$consultar->validarSenha($conexao,'123'))
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Livraria Era Uma Vez</title>
    <link rel="icon" href="favicom.png" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>Livraria Era Uma Vez📖</h1>
        <nav>
            <a href="home.php">inicio</a>
            <a href="livros.php">Livros</a>
            <a href="login.php" class="active">Login</a>
            <a href="cadastro.php">Cadastro</a>
        </nav>
    </header>

    <main>
        <div class="form-container">
            <h2>Login</h2>
            <form>
                <input type="text" placeholder="Login" required>
                <input type="password" placeholder="Senha" required>
                <p align="left">
                    <a href="PaginaCadastro.php">Não tem login?cadastrar-se!
                </p>
                <button type="submit" onclick='$validar'>Logar</button>
            </form>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Livraria Era Uma Vez. Todos os direitos reservados.</p>
    </footer>
</body>
</html>