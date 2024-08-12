<?php
    namespace Projeto\ProjetoLivraria\PHP;
    Use Projeto\ProjetoLivraria\PHP\Reserva;

    class Reserva{
        private int $codigoLivro;
        private string $tituloLivro;
        private string $cliente;
        private int $quantidade;

        public function __construct ( int $codigoLivro, string $tituloLivro, string $cliente, int $quantidade){

            $this->codigoLivro = $codigoLivro;
            $this->tituloLivro = $tituloLivro;
            $this->cliente = $cliente;
            $this->quantidade = $quantidade;
        }//FIM DO METODO CONSTRUTOR

        public function getCodigoLivro():int
        {
            return $this->codigoLivro;
        }// fim do getCodigoLivro

        public function setCodigoLivro(int $codigoLivro):void 
        {
            $this->codigoLivro = $codigoLivro;
        } //fim do setCodigolivro

        public function getTituloLivro():string
        {
            return $this->tituloLivro;
        }// fim do getTituloLivro

        public function setTituloLivro(string $tituloLivro):void 
        {
            $this->tituloLivro = $tituloLivro;
        } //fim do setTituloLivro

        public function getCliente():string
        {
            return $this->cliente;
        }// fim do getCliente

        public function setCliente(string $cliente):void 
        {
            $this->cliente = $cliente;
        } //fim do setCliente

        public function getQuantidade():int
        {
            return $this->quantidade;
        }// fim do getQuantidade

        public function setQuantidade(int $quantidade):void 
        {
            $this->quantidade = $quantidade;
        } //fim do setQuantidade

        public function imprimir ():string
        {
            return  "<br> Código do livro: ".$this->getCodigolivro().
                    "<br> Título do Livro: ".$this->getTituloLivro().
                    "<br> Cliente: ".$this->getCliente().
                    "<br> Quantidade: ".$this->getQuantidade()."<br><br>";
        }

    } //fim da classe compra
?>