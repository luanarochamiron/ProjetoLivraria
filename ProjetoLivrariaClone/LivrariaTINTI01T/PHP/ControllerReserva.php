<?php
     namespace Projeto\ProjetoLivrariaTINT01T\PHP;
     require_once('Reserva.php');
     require_once('Livro.php');
     require_once('Cliente.php');
     use Projeto\ProjetoLivrariaTINT01T\PHP\ControllerReserva;
     use Projeto\ProjetoLivrariaTINT01T\PHP\Reserva;
     use Projeto\ProjetoLivrariaTINT01T\PHP\Livro;
     use Projeto\ProjetoLivrariaTINT01T\PHP\Cliente;
?>

<doctype HTML>
<HTML lang="PT-BR">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <form method="POST">
        <label>Código</label>
        <Input type="number" id="codigo" name="codigo"/><br><br>

        <label>Livro</label>
        <Input type="text" id="livro" name="livro"/><br><br>

        <label>Cliente</label>
        <Input type="text" id="cliente" name="cliente"/><br><br>

        <label>Quantidade</label>
        <Input type="number" id="quantidade" name="quantidade"/><br><br>

        <button>Cadastrar
        <?php
            try{ 
                $livro1 = new Livro(1234,
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
                $codigo     =$_POST['codigo'];
                $livro      =$_POST['livro'];
                $cliente    =$_POST['cliente'];
                $quantidade =$_POST['quantidade'];
                $reserva1 = new Reserva($codigo, $livro1, $cliente1, $quantidade);
            }catch(exception $erro){
                echo $erro;
            }//fim do try_catch
        ?>
        </button><br><br>
        <?php   echo $reserva1->imprimir();
                echo $livro1->imprimir();
                echo $cliente1->imprimir();?>
    </form>

    </body>
</HTML>
