<?php
    namespace Projeto\PHP\Modelo;

    require_once('Endereco.php');
    require_once('Pessoa.php');

    use Projeto\PHP\Modelo\Endereco;
    use Projeto\PHP\Modelo\Pessoa;

    class Funcionario extends Pessoa{
        protected int $matricula;

        //metodo construtor
        function __construct(string $cpf, string $nome, string $telefone, string $dtNascimento, Endereco $endereco, int $matricula){
            parent::__construct($cpf,$nome,$telefone,$dtNascimento,$endereco);
            $this->matricula = $matricula;
        }//fim do metodo

        function imprimir():string{
            return parent::imprimir()."<br>Matrícula: ".$this->matricula;
        }//fim do metodo

    }//fim da classe
?>