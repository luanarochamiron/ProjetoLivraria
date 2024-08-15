<?php
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;
   //conexão esteja  completa
    require_once("Pessoa.php");
    require_once("Funcionario.php");
    use  Projeto\ProjetoLivrariaTINT01T\PHP\ControllerFuncionario;
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Pessoa;
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Funcionario;
?>
<Doctype HTML>
<HTML lang="PT-BR">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="POST">
            <label>Informe o código:</label>
            <input type="text" id="codigo" name="codigo"/><br><br>
 
            <label>Cargo</label>
            <input type="text" id="cargo" name = "cargo"/><br><br>
 
            <label>Salario</label>
            <input type="number" id="salario" name = "salario"/><br><br>
 
            <label>Setor</label>
            <input type="text" id="setor" name = "setor"/><br><br>
 
            <label>CPF</label>
            <input type="text" id="cpf" name = "cpf"/><br><br>
 
            <label>Nome</label>
            <input type="text" id="nome" name = "nome"/><br><br>
 
            <label>Telefone</label>
            <input type="number" id="telefone" name = "telefone"/><br><br>
 
            <label>Endereço</label>
            <input type="text" id="endereco" name = "endereco"/><br><br>
 
            <button>Cadastrar
            <?php
                try{
                $pessoa1 = new Pessoa( "2132321","bibis","2131231","rua");
                $codigo     = $_POST['codigo'];
                $cpf        = $_POST['cpf'];
                $nome       = $_POST['nome'];
                $telefone   = $_POST['telefone'];
                $endereco   = $_POST['endereco'];
                $cargo      = $_POST['cargo'];
                $salario    = $_POST['salario'];
                $setor      = $_POST['setor'];
                $funcionario = new Funcionario($codigo,$cpf,$nome,$telefone,$endereco,$cargo,$salario,$setor,$pessoa1);
                }catch (Exception $erro){
                    echo $erro;
                }
            ?>
            </button><br><br>
            <?php echo  $funcionario->imprimir().
                   $pessoa1->imprimir();  
 
            ?>
        </form>
    </body>
</HTML>
 