<?php
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;
    require_once('Livro.php');
    use Projeto\ProjetoLivrariaTINT01T\PHP\ControllerLivro;
    use Projeto\ProjetoLivrariaTINT01T\PHP\Livro;
?>

<doctype HTML>
<HTML lang="PT-BR">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <form method="POST">
        <label>ISBN</label>
        <Input type="text" id="isbn" name="isbn"/><br><br>

        <label>Titulo</label>
        <Input type="text" id="titulo" name="titulo"/><br><br>

        <label>Autor</label>
        <Input type="text" id="autor" name="autor"/><br><br>

        <label>Edição</label>
        <Input type="text" id="edicao" name="edicao"/><br><br>

        <label>Data de lançamento</label>
        <Input type="text" id="dtLancamento" name="dtLancamento"/><br><br>

        <label>Quantidade</label>
        <Input type="number" id="quantidade" name="quantidade"/><br><br>

        <label>Preço Unitário</label>
        <Input type="text" id="precoUnitario" name="precoUnitario"/><br><br>

        <label>Preco Total</label>
        <Input type="text" id="precoTotal" name="precoTotal"/><br><br>

        <button>Cadastrar
        <?php
            try{ 
                $isbn            =$_POST['isbn'];
                $titulo          =$_POST['titulo'];
                $autor           =$_POST['autor'];
                $edicao          =$_POST['edicao'];
                $dtLancamento    =$_POST['dtLancamento'];
                $quantidade      =$_POST['quantidade'];
                $precoUnitario   =$_POST['precoUnitario'];
                $precoTotal      =$_POST['precoTotal'];
                $livro1 = new Livro($isbn, $titulo, $autor, $edicao, $dtLancamento, $quantidade, $precoUnitario, $precoTotal);
            }catch(exception $erro){
                echo $erro;
            }//fim do try_catch
        ?>
        </button><br><br>
        <?php echo $livro1->imprimir();?>
    </form>

    </body>
</HTML>
