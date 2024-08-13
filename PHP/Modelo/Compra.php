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
        private int $codCompra;
        private int $codCartao;
        private float $valor;
        private string $dtCompra;                                           
        private Livro $livro;
       // private $codigo_Usuario;
       // private $codigo_Livro;

        //metodo construtor
        public function __construct(int $codCompra, int $ncodCartao, 
        float $valor, Livro $livro)
        {
            $this->codCompra = $codCompra;
            $this->codCartao = $codCartao;
            $this->valor = $valor;
            $this->livro = $livro;
        }//fim do construtor

        public function __get(string $texto){
            return $this->texto;
        }//fim do get

        public function __set(string $campo, string $valor): void{
            $this->campo = $valor;
        }//fim do set

        public function imprimir():string{
            return "<br>Numero da Compra: ".$this->codCompra. 
            "<br>Numero do Cartao: ".$this->codCartao.
            "<br>Valor Total da Compra: ".$this->valor;
        }//fim do imprimir

    }//fim da classe



?>