<?php
    //Declarei projeto
    namespace Projeto\ProjetoLivraria\PHP;
    //fiz a conexao
    Use Projeto\ProjetoLivraria\PHP\Livro;

    class Livro{
        private int $isbn;
        private string $titulo;
        private string $autor;
        private string $edicao;
        private string $dtLancamento;
        private int $quantidade;
        private float $precoUnitario;
        private float $total;
    

    public function __construct (int $isbn,string $titulo,string $autor,string $edicao,string $dtLancamento,int $quantidade,float $precoUnitario,float $total)
    {
            $this->isbn   = $isbn;
            $this->titulo = $titulo;
            $this->autor  = $autor;
            $this->edicao = $edicao;
            $this->dtLancamento = $dtLancamento;
            $this->quantidade = $quantidade;
            $this->precoUnitario = $precoUnitario;
            $this->total = $total;

    }//fim do metodo construct

    //Metodos Gets e Sets - Acesso e Modificação
    public function getIsbn(): int
    {
        return $this->isbn;
    } 

    public function setIsbn(int $isbn):void 
    {
        $this->isbn = $isbn;
    }
    //fim do metodo
    public function getTitulo(): string 
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void 
    {
        $this->titulo = $titulo;
    }
    //fim do metodo
    public function getAutor(): string 
    {
        return $this->autor;
    }
    public function setAutor(string $autor):void 
    {
        $this->autor = $autor;
    }
    //fim do metodo
    public function getEdicao(): string 
    {
        return $this->edicao;
    }
    public function setEdicao(string $edicao):void 
    {
        $this->edicao = $edicao;
    }
    //fim do metodo
    public function getdtLancamento(): string 
    {
        return $this->dtLancamento;
    }
    public function setdtLancamento(string $dtLancamento):void 
    {
        $this->dtLancamento = $dtLancamento;
    }
    //fim do metodo
    public function getQuantidade(): int
    {
        return $this->quantidade;
    } 

    public function setQuantidade(int $quantidade):void 
    {
        $this->quantidade = $quantidade;
    }
    //fim do metodo
    public function getPrecoUnitario(): float
    {
        return $this->precoUnitario;
    } 

    public function setPrecoUnitario(float $precoUnitario):void 
    {
        $this->precoUnitario = $precoUnitario;
    }    
    //fim do metodo
    public function getTotal(): float
    {
        return $this->total;
    } 

    public function setTotal(float $total):void 
    {
        $this->total = $total;
    }  
    //fim do metodo  

    public function calcularTotal(float $total):float
    {
        $this->setTotal($this->getPrecoUnitario()*$this->getQuantidade());
        $this->getTotal();
    } 
    //fim do metodo

    public function imprimir():string 
    {
        return  "<br>ISBN: ".$this->getISBN().
                "<br>Titulo: ".$this->getTitulo().
                "<br>Autor: ".$this->getAutor().
                "<br>Edição: ".$this->getEdicao().
                "<br>Data de lançamento: ".$this->getdtLancamento().
                "<br>Quantidade: ".$this->getQuantidade().
                "<br>Preço Unitario: ".$this->getPrecoUnitario().
                "<br>Preço Total: ".$this->getTotal()."<br><br>";
    }//fim do metodo

    }//fim da classe
?>