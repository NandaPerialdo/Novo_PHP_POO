<?php
    namespace Projeto\PHP\Modelo;

    class Livro{
        private int $isbn;
        private string $titulo;
        private string $autor;
        private float $valor;
        private int $quantidade;

        //metodo construtor

        public function __construct(int $isbn, 
            string $titulo, 
            string $autor, 
            float $valor,
            int $quantidade)
        {
            $this->isbn = $isbn;
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->valor = $valor;
            $this->quantidade = $quantidade;
        }//fim do construtor

        //metodos de acesso GET e SET

        public function __get(string $texto){
            return $texto;
        }//fim do get "generico"

        public function __set(string $texto, string $valor):void{
            $this->nome = $valor;
        }//fim do set "generico"

        public function imprimir():string{
            return "<br>ISBN: ".$this->isbn.
                 "<br>Título: ".$this->titulo.
                 "<br>Autor: ".$this->autor.
                 "<br>Valor: ".$this->valor.
                 "<br>Quantidade: ".$this->quantidade;
        }//fim do método



    }//fim da classe 
?>