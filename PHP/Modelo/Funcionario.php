<?php
    namespace PHP\Modelo;

    require_once('Endereco.php'); //importando a classe endereco

    class Funcionario extends Pessoa{
        protected int $matricula;
        protected float $salario;
        protected string $cargo;

        //metodo construtor
        public function __construct(string $cpf,
        int $matricula, 
        string $nome,
        float $salario,
        string $cargo, 
        Endereco $endereco, 
        string $telefone){
            parent::__construct($cpf, $nome, $telefone, $endereco);
            $this->matricula = $matricula;
            $this->salario   = $salario;
            $this->cargo     = $cargo;
        }//fim do contrutor

        public function __get(string $campo){
            return $this->campo;
        }//fim do get

        public function __set(string $campo, string $valor):void{
            $this->campo = $valor;
        }//fim do set

        public function imprimir():string
        {
            return parent::imprimir().
                   "<br>Matrícula: ".$this->matricula.
                   "<br>Cargo: ".$this->cargo.
                   "<br>Salário: ".$this->salario;
        }//fim do string
    }//fim da classe
?>