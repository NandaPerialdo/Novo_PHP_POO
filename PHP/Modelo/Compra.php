<?php
    namespace Projeto\PHP\Modelo;//definir local do projeto

    //importando a classes
    require_once('Livro.php');
    require_once('Cliente.php');
    require_once('Funcionario.php');

    use Projeto\PHP\Modelo\Livro;
    use Projeto\PHP\Modelo\Heranca\Cliente;
    use Projeto\PHP\Modelo\Heranca\Funcionario;

    class Compra{
        private int $numCompra;
        private int $numCartao;
        private float $valorTotal;
        private Livro $livro;

        //metodo construtor
        public function __construct(int $numCompra, int $numCartao, 
        float $valorTotal, Livro $livro)
        {
            $this->numCompra = $numCompra;
            $this->numCartao = $numCartao;
            $this->valorTotal = $valorTotal;
            $this->livro = $livro;
        }//fim do construtor

        public function __get(string $texto){
            return $this->texto;
        }//fim do get

        public function __set(string $campo, string $valor): void{
            $this->campo = $valor;
        }//fim do set

        public function imprimir():string{
            return "<br>Numero da Compra: ".$this->numCompra. 
            "<br>Numero do Cartao: ".$this->numCartao.
            "<br>Valor Total da Compra: ".$this->valorTotal;
        }//fim do imprimir

    }//fim da classe



?>