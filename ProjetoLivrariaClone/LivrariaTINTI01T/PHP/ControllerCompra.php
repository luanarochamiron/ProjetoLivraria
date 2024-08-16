<?php
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;
    require_once('Compra.php');
    require_once('Livro.php');
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    require_once('Cliente.php');//Conexão esteja completa
    use  Projeto\ProjetoLivrariaTINT01T\PHP\ControllerLivro;
    use  Projeto\ProjetoLivrariaTINT01T\PHP\Compra;
    use Projeto\ProjetoLivrariaTINT01T\PHP\Livro;
    use Projeto\ProjetoLivrariaTINT01T\PHP\Pessoa;
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Funcionario;
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
                <input type="text" id="codigoCompra" name="codigoCompra"/><br><br>
 
                <label>O livro escolhido:</label>
                <input type="text" id="livro" name="livro"/><br><br>
 
                <label>Quantidade de Compra</label>
                <input type="number" id="quantidadeCompra" name="quantidadeCompra"/><br><br>
 
                <label>O total da compra foi:</label>
                <input type="text" id="totalCompra" name="totalCompra"/><br><br>
 
                <label>Informe o cliente:</label>
                <input type="text" id="cliente" name="cliente"/><br><br>
 
                <label>Informe o funcionário que atendeu você:</label>
                <input type="text" id="funcionario" name="funcionario"/><br><br>
                <button>Cadastrar
                <?php
                    try{
                        $livro1 = new Livro( 1234,
                        "Romeu e Julieta",
                        "Shakespeare",
                        1,
                        "29/02/1989",
                        100,
                        15,
                        1500);
 
                        $cliente1 = new Cliente(
                            1,
                            "124",
                            "Allan",
                            "telefone",
                            "rua",
                            1000
                        );
 
                        $funcionario1 = new Funcionario(
                            1,
                            "123414",
                            "Allan",
                            "rara",
                            "Rua",
                            "Vendedor",
                            2500,
                            "Comercial"
                            );
 
                        $pessoa1 = new Pessoa(   "2132321",
                        "joao",
                        "2131231",
                        "rua");
                $codigoCompra  = $_POST['codigoCompra'];
                $livro =  $_POST['livro'];
                $quantidadeCompra =  $_POST['quantidadeCompra'];
                $totalCompra =  $_POST['totalCompra'];
                $cliente =  $_POST['cliente'];
                $funcionario =  $_POST['funcionario'];
                $compra1 =  new Compra(
                                    $codigoCompra,
                                    $livro1,
                                    $quantidadeCompra,
                                    $totalCompra,
                                    $cliente1,
                                    $funcionario1,
                                    $pessoa1);
                }catch(Exception $erro){
                    echo $erro;
                }//fim do try_catch
                ?>
                </button><br><br>
                <?php  echo $compra1->imprimir().
                         $livro1->imprimir().
                         $cliente1->imprimir().
                         $funcionario1->imprimir().
                         $pessoa1->imprimir();
                       
 
               
               
               
               
                ?>
            </form>
        </body>
</HTML>
         
 