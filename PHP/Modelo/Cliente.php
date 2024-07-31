<?php
    namespace Projeto\PHP\Modelo;

    require_once('Endereco.php');
    require_once('Pessoa.php');

    use Projeto\PHP\Modelo\Endereco;
    use Projeto\PHP\Modelo\Pessoa;

    class Cliente extends Pessoa{
        protected $valorTotal;

        function __construct(string $cpf, string $nome, string $telefone, string $dtNascimento, Endereco $endereco, float $valorTotal){
            parent::__construct($cpf,$nome,$telefone,$dtNascimento,$endereco);
            $this->valorTotal = $valorTotal;
        }//fim do método

        function imprimir():string{
            return parent::imprimir()."<br>".$this->valorTotal;
        }

    }//fim do cliente
?>