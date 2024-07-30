<?php
    namespace PHP\Modelo;

    require_once('Endereco.php');//importando a classe endereco

    class Cliente extends Pessoa{
        protected string $login;
        protected int $senha;

        //metodo construtor
        public function __construct(string $cpf, 
        string $nome,
        string $telefone,
        string $dtNasc,
        Endereco $endereco)
        {
            parent::__construct($cpf,$nome,$telefone, $dtNasc, $endereco);
            $this->login = $login;
            $this->senha = $senha;
        }//fim do construtor

        public function __get(string $nome){
            return $this->nome;
        }//fim do get

        public function __set(string $nomeVariavel,string $valor):void
        {
            $this->nomeVariavel = $valor;
        }//fim do set

        public function imprimir():string
        {
            return parent::imprimir().
                   "<br>Login: ".$this->login.
                   "<br>Senha: ".$this->senha;
        }//fim do imprimir

    }//fim da classe
?>
