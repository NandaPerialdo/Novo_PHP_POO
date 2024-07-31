<?php
    namespace Projeto\PHP\Modelo;//definir local do projeto

    //importando a classes
    require_once('Livro.php');

    use Projeto\PHP\Modelo\Livro;
    use Projeto\PHP\Modelo\Heranca\Cliente;
    use Projeto\PHP\Modelo\Heranca\Funcionario;

    class Compra{
        private int $numCartao;
        private float $valorTotal;

        //metodo construtor
        public function __construct(int $numCartao, 
        float $valorTotal, 
        Livro $livro, 
        Cliente $cliente,
        Funcionario $funcionario)
        {
            $this->numCartao = $numCartao;
            $this->valorTotal = $valorTotal;
        }//fim do construtor

        public function __get(string $texto){
            return $this->texto;
        }//fim do get

        public function __set(string $campo, string $valor): void{
            $this->campo = $valor;
        }//fim do set

        public function imprimir():string{
            return "<br>Numero do Cartao: ".$this->numCartao.
            "<br>Valor Total da Compra: ".$this->valorTotal;
        }//fim do imprimir

    }//fim da classe



?>