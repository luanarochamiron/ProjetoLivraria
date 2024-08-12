<?php
    namespace Projeto\ProjetoLivraria\PHP;
    require_once("Pessoa.php");
    Use Projeto\ProjetoLivraria\PHP\Funcionario;
    Use Projeto\ProjetoLivraria\PHP\Pessoa;

    class Funcionario extends Pessoa{
        protected int $codigo;
        protected string $cargo;
        protected float $salario;
        protected string $setor;

        public function __construct ( int $codigo, string $cpf, string $nome, string $telefone, string $endereco, string $cargo, float $salario, string $setor){
            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->codigo = $codigo;
            $this->cargo = $cargo;
            $this->salario = $salario;
            $this->setor = $setor;
        }//FIM DO METODO CONSTRUTOR

        public function getCodigo():int
        {
            return $this->codigo;
        }// fim do getCodigo

        public function setCodigo(int $codigo):void 
        {
            $this->codigo = $codigo;
        } //fim do setCodigo

        public function getCargo():string
        {
            return $this->cargo;
        }// fim do getCargo

        public function setCargo(string $cargo):void 
        {
            $this->cargo = $cargo;
        } //fim do setcargo

        public function getSalario():float
        {
            return $this->salario;
        }// fim do getSalario

        public function setSalario(float $salario):void 
        {
            $this->salario = $salario;
        } //fim do setSalario

        public function getSetor():string
        {
            return $this->setor;
        }// fim do getSetor

        public function setSetor(string $setor):void 
        {
            $this->setor = $setor;
        } //fim do setSetor

        public function imprimir ():string
        {
            parent::imprimir();
            return  "<br> Codigo de Funcionario: ".$this->getCodigo().
                    
                    "<br> Cargo: ".$this->getCargo().
                    "<br> Salario: ".$this->getSalario().
                    "<br> Setor: ".$this->getSetor()."<br><br>";
        }

    } //fim da classe compra
?>