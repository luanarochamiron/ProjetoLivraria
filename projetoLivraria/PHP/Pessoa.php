<?php
    //Definir o projeto = expecificar as classes
    namespace Projeto\ProjetoLivraria\PHP;

    //Especificar qual classe eu vou utilizar 
    use Projeto\ProjetoLivraria\PHP\Pessoa;

    class Pessoa{
        // encapsular as variaveis 
        // Declaraçao de variaveis
        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected  string $endereco;

        //Instanciar = dar um valr inicial 
        //Metodo Construtor
        public function __construct(string $cpf, string $nome, string $telefone, string $endereco){
            $this->cpf       = $cpf;
            $this->nome      = $nome;
            $this->telefone  = $telefone;
            $this->endereco  = $endereco;
        }// fim do metodo construtor

        //Metodos Gets e Sets - Acesso e Modificação
        public function getCPF(): string
        {
            return $this->cpf;
        }// fim do metodo consultar cpf

        public function setCPF(string $cpf):void 
        {
            $this->cpf = $cpf;
        }// fim do alterar cpf

        public function getNome(): string
        {
            return $this->nome;
        }// fim do metodo consultar nome

        public function setNome(string $nome):void 
        {
            $this->nome = $nome;
        }// fim do alterar nome

        public function getTelefone(): string
        {
            return $this->telefone;
        }// fim do metodo consultar telefone

        public function setTelefone(string $telefone):void 
        {
            $this->telefone = $telefone;
        }// fim do alterar telefone

        public function getEndereco(): string
        {
            return $this->endereco;
        }// fim do metodo consultar endereço

        public function setEndereco(string $endereco):void 
        {
            $this->endereco = $endereco;
        }// fim do alterar endereço

        public function imprimir(): string
        {
           
            return  "<br>CPF: ".$this->getCPF().
                    "<br>Nome: ".$this->getNome().
                    "<br>Telefone: ".$this->getTelefone().
                    "<br>Endereço: ".$this->getEndereco()."<br><br>";
        }//fim do imprimir

    }// fim da classe
?>