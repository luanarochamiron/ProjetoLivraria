<?php
    namespace Projeto\ProjetoLivraria\PHP;
    require_once("Cliente.php");
    require_once("Funcionario.php");
    require_once("Livro.php");

    Use Projeto\ProjetoLivraria\PHP\Compra;
    Use Projeto\ProjetoLivraria\PHP\Cliente;
    Use Projeto\ProjetoLivraria\PHP\Funcionario;
    Use Projeto\ProjetoLivraria\PHP\Livro;
    

    class Compra{
        private int $codigoCompra;
        private Livro $livro; //objeto livro
        private int $quantidadeCompra;
        private float $totalCompra;
        private Cliente $cliente; //objeto cliente 
        private Funcionario $funcionario; //objeto funcionario

        public function __construct ( int $codigoCompra, Livro $livro, int $quantidadeCompra, float $totalCompra, Cliente $cliente, Funcionario $funcionario){
            $this->codigoCompra = $codigoCompra;
            $this->livro = $livro;
            $this->quantidadeCompra = $quantidadeCompra;
            $this->totalCompra = $totalCompra;
            $this->cliente = $cliente;
            $this->funcionario = $funcionario;
        }//FIM DO METODO CONSTRUTOR

        public function __get(string $name):mixed
        {
            return $this->name;
        } //fim do get 

        public function __set(string $name, mixed $value):void 
        {
            $this->name = $value;
        }// fim do set


        public function imprimir ():string
        {
           return   "<br><br>Codigo compra: ".$this->codigoCompra. 
                    "<br>Livro: ".$livro->imprimir().
                    "<br>Total: ".$this->totalCompra.
                    "<br>Cliente: ".$cliente->imprimir().
                    "<br>Funcionario: ".$funcionario->imprimir();


        }

    } //fim da classe compra
?>