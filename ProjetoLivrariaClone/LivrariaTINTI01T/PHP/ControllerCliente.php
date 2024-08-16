<?php
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;
    require_once('Pessoa.php');
    require_once('Cliente.php');//Conexão esteja completa
    use  Projeto\ProjetoLivrariaTINT01T\PHP\ControllerLivro;
    use Projeto\ProjetoLivrariaTINT01T\PHP\Pessoa;
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Cliente;
 
 
 
 
 
?>
<Doctype HTML>
    <HTML lang="PT-BR">
 
        <head>
            <meta charset="UTF-8">
        </head>
 
        <body>
            <form method="POST">
                <label>Codigo da Compra</label>
                <input type="number" id="codigo" name="codigo"/><br><br>
 
                <label>O livro escolhido:</label>
                <input type="text" id="cpf" name="cpf"/><br><br>
 
                <label>Quantidade de Compra</label>
                <input type="number" id="nome" name="nome"/><br><br>
 
                <label>O total da compra foi:</label>
                <input type="text" id="telefone" name="telefone"/><br><br>
 
                <label>Informe o cliente:</label>
                <input type="text" id="endereco" name="endereco"/><br><br>
 
                <label>Informe o funcionário que atendeu você:</label>
                <input type="number" id="totalCompra" name="totalCompra"/><br><br>
                <button>Cadastrar
                <?php
                    try{
                        $pessoa1 = new Pessoa(   "2132321",
                        "joao",
                        "2131231",
                        "rua");
                $codigo  = $_POST['codigo'];
                $cpf =  $_POST['cpf'];
                $nome =  $_POST['nome'];
                $telefone =  $_POST['telefone'];
                $endereco =  $_POST['endereco'];
                $totalCompra =  $_POST['totalCompra'];
                $cliente1 =  new Cliente(
                                    $codigo,
                                    $cpf,
                                    $nome,
                                    $telefone,
                                    $endereco,
                                    $totalCompra,
                                    $pessoa1);
                }catch(Exception $erro){
                    echo $erro;
                }//fim do try_catch
                ?>
                </button><br><br>
                <?php  echo
                         $cliente1->imprimir().
                         $pessoa1->imprimir();
                       
 
               
               
               
               
                ?>
            </form>
        </body>
</HTML>
 