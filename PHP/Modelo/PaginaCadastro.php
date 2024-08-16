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
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Livraria Era Uma Vez</title>
    <link rel="icon" href="favicom.png" type="favicom.png">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>Livraria Era Uma Vez📖</h1>
        <nav>
            <a href="home.php">inicio</a>
            <a href="livros.php">Livros</a>
            <a href="login.php">Login</a>
            <a href="cadastro.php" class="active">Cadastro</a>
        </nav>
    </header>

    <main>
        <div class="form-container">
            <h2>Cadastre Seu Endereço</h2>
            <form>
                <input type="text" placeholder="Logradouro" required>
                <input type="text" placeholder="Número" required>
                <input type="text" placeholder="Bairro" required>
                <input type="text" placeholder="Cidade" required>
                <input type="text" placeholder="Estado" required>
                <input type="text" placeholder="UF" required>
                <input type="text" placeholder="País" required>
                <input type="text" placeholder="CEP" required>

                <button type="submit" onclick="">Confirmar</button>
            </form> 

            <h2>Cadastre Seus Dados:</h2>
            <form>
                <input type="text" placeholder="CPF" required>
                <input type="text" placeholder="Nome" required>
                <input type="text" placeholder="Telefone" required>
                <input type="text" placeholder="Data de nascimento" required>
                <input type="text" placeholder="Login" required>
                <input type="text" placeholder="Senha" required>

                <button type="submit" onclick="">Confirmar</button>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Livraria Era Uma Vez. Todos os direitos reservados.</p>
    </footer>
</body>
</html>