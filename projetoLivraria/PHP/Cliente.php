<?php
    namespace Projeto\ProjetoLivraria\PHP;

    require_once("Pessoa.php");
    Use Projeto\ProjetoLivraria\PHP\Cliente;
    Use Projeto\ProjetoLivraria\PHP\Pessoa;

    class cliente extends Pessoa{
        protected int $codigoCliente;
        protected float $totalcompra;

        function __construct( string $cpf, string $nome, string $telefone, string $endereço, float $totalcompra)
        {
            parent::__construct($cpf,$nome,$telefone,$endereço);
            $this-> codigo = $codigo;
            $this->totalcompra = $total;
        }//FIM DO CONSTRUTOR

        public function __get(string $name):mixed
        {
            return $this->name;
        } //fim do get 

        public function __set(string $name, mixed $value):void 
        {
            $this->name = $value;
        }// fim do set

        public function imprimir():string 
        {
            parent::imprimir();
            return "<br>Código: ".$this->codigo.
             "<br>Total de compras: ".$this->totalCompra;
        } //fim do imprimir
    }//fim da classe Cliente 



?>