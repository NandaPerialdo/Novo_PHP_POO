<?php
    namespace Projeto\PHP\Modelo;

    class Livro{
        private int $isbn;
        public string $titulo;
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

        function retornarTitulo():string{
            return $this->titulo;
        }

        function retornarValor():string{
            return $this->valor;
        }

        function __get(string $name):string{
            return $this->name;
        }


        public function __set(string $texto, string $valor):void{
            $this->nome = $valor;
        }//fim do set "generico"

        public function imprimir():string{
            return "<br>ISBN: ".$this->isbn.
                 "<br>Título: ".$this->titulo.
                 "<br>Autor: ".$this->autor.
                 "<br>Valor: R$ ".$this->valor.
                 "<br>Quantidade: ".$this->quantidade;
        }//fim do método



    }//fim da classe 
?>