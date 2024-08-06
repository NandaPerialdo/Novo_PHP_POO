<?php
    namespace Projeto\PHP\Modelo;//definindo local do projeto

    class Reserva{
        private int $codReserva;
        private string $dataReserva;

        //metodo construtor
        function __construct(int $codReserva, 
        string $dataReserva,
        string $titulo){
            $this->codReserva = $codReserva;
            $this->dataReserva = $dataReserva;
        }

        function __get(string $nome):string{
            return $this->nome;
        }//fim do método

        function __set(string $campo, string $valor):void{
            $this->campo = $valor;
        }//fim do método

        public function imprimir():string{
            return "<br>Numero da Reserva: ".$this->codReserva. 
            "<br>Data da Reserva: ".$this->dataReserva;
        }//fim do imprimir
     }//fim da classe

?>