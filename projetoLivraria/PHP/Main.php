<?php
    //Conectando a classe ao projeto
    namespace Projeto\ProjetoLivraria\PHP;
    
    //Colocar qual classe eu utilizar
    require_once("Pessoa.php");
    require_once("Livro.php");
    require_once("Compra.php");
    require_once("Reserva.php");
    require_once("Funcionario.php");

    //Mostrar quem eu vou usar - reforço
    Use Projeto\ProjetoLivraria\PHP\Pessoa;
    Use Projeto\ProjetoLivraria\PHP\Livro;
    Use Projeto\ProjetoLivraria\PHP\Compra;
    Use Projeto\ProjetoLivraria\PHP\Reserva;
    Use Projeto\ProjetoLivraria\PHP\Funcionario;
   

    //Instanciando um objeto da classe pessoa / Cadastrando
    $pessoa1 = new Pessoa("12345678910", "Claudio", "11999999999", "Rua Senador Vergueiro");
    echo $pessoa1->imprimir(); 
    
    $pessoa2 = new Pessoa("12345678910", "Luana", "11999999999", "Rua Jaborandi");
    echo $pessoa2->imprimir();

    $livro1 = new livro(1234,"Romeu e Julieta", "Shakespare", 1, "29/02/1989", 100, 15, 1500);

    echo $livro1 -> imprimir();

    $compra1 = new Compra(1,"Livro Romeu e Julieta",10, 150);
    echo $compra1 -> imprimir();
    
    $reserva1 = new Reserva(1234, "Jogos Vorazes","Luma",2);
    echo $reserva1 -> imprimir();

    $funcionario1 = new Funcionario(1234, "Sol Bensol", "Auxiliar","1500","Administrativo");
    echo $funcionario1 -> imprimir();

?>