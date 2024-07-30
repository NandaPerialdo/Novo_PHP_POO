<?php
    namespace PHP\Modelo;

    require_once('Endereco.php'); //importando a classe endereço

    class Pessoa{
        //declarando variaveis
        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected string $dtNasc;
        protected Endereco $endereco;


        //metodo construtor
        public function __construct(string $cpf, string $nome, string $telefone, string $dtNasc, Endereco $endereco){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->dtNasc = $dsNasc;
            $this->endereco = $endereco;
        }//fim do construtor

        //metodos get e set
        public function __get(string $nome){
            return $this->nome;
        }//fim do get "genérico"

        public function __set(string $campo, string $valor):void{
            $this->campo = $valor;
        }//fim do set "genérico"

        //metodo pra imprimir na tela
        public function imprimir():string
        {
            return "<br>CPF: ".$this->cpf.
                   "<br>Nome: ".$this->nome.
                   "<br>Telefone: ".$this->telefone.
                   "<br>Data de Nascimento: ".$this->dtNasc;
        }//fim do método 
    }//fim da classe
?>