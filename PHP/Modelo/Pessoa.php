<?php
    namespace Projeto\PHP\Modelo;

    require_once('Endereco.php');

    use Projeto\PHP\Modelo\Endereco;

    class Pessoa{
        public string $cpf;
        public string $nome;
        public string $telefone;
        public string $dtNascimento;
        public Endereco $endereco;


        function __construct(string $cpf, string $nome, string $telefone, string $dtNascimento, Endereco $endereco){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->dtNascimento = $dtNascimento;
        }//fim do método

        function __get(string $nome):string{
            return $this->nome;
        }//fim do método

        function __set(string $campo, string $valor):void{
            $this->campo = $valor;
        }//fim do método

        function imprimir():string{
            return "<br>CPF: ".$this->cpf.
                   "<br>Nome: ".$this->nome.
                   "<br>Telefone: ".$this->telefone.
                   "<br>Data de Nascimento: ".$this->dtNascimento;
        }//fim do método 



    }//fim da classe
?>