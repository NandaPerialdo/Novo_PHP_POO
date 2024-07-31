<?php
    namespace Projeto\PHP\Modelo;

    class Endereco{
        private string $logradouro;
        private int $numero;
        private string $bairro;
        private string $cidade;
        private string $estado;
        private string $uf;
        private string $pais;
        private string $cep;

        //metodo construtor

        function __construct(string $logradouro,
        int $numero,
        string $bairro,
        string $cidade,
        string $estado,
        string $uf,
        string $pais,
        string $cep)
        {
            $this->logradouro = $logradouro;
            $this->numero     = $numero;
            $this->bairro     = $bairro;
            $this->cidade     = $cidade;
            $this->estado     = $estado;
            $this->uf         = $uf;
            $this->pais       = $pais;
            $this->cep        = $cep;
        }//fim do construtor

        //metodos de acesso (antigos GET e SET)

        //GET
        function __get(string $nome){
            return $nome;
        }//fim do GET "genérico"

        //SET
        function __set(string $nome, string $valor){
            $this->nome = $valor;
        }//fim do SET "genérico"

        //metodo pra imprimir

        function imprimir():string{
            return "<br>Logradouro: ".$this->logradouro.
            "<br>Número: ".$this->numero.
            "<br>Bairro: ".$this->bairro.
            "<br>Cidade: ".$this->cidade.
            "<br>Estado: ".$this->estado.
            "<br>UF: ".$this->uf.
            "<br>País: ".$this->pais.
            "<br>CEP: ".$this->cep;
        }//fim do método imprimir

    }//fim da classe
?>