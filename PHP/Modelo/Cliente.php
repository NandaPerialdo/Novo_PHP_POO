<?php
    namespace Projeto\PHP\Modelo;

    require_once('Endereco.php');
    require_once('Pessoa.php');

    use Projeto\PHP\Modelo\Endereco;
    use Projeto\PHP\Modelo\Pessoa;

    class Cliente extends Pessoa{
        protected string $login;
        protected int $senha;

        function __construct(string $cpf, string $nome, string $telefone, string $dtNascimento, Endereco $endereco, string $login, int $senha){
            parent::__construct($cpf,$nome,$telefone,$dtNascimento,$endereco);
            $this->login = $login;
            $this->senha = $senha;
        }//fim do método

        function imprimir():string{
            return parent::imprimir()."<br>Login: ".$this->login.
            "<br>Senha: ".$this->senha;
        }

        function validarCliente():string{
            if ($login == 'Fernanda' && $senha == 123){
                return "Usuário Válido";
            }else{
                return "Usuario Inválido";
            }
        }//fim do metodo





    }//fim do cliente
?>