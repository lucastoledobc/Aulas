<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Bancária</title>
    <style>
        body {
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <h1>Internet Banking</h1>
    <fieldset>
    <legend>Crie sua conta:</legend>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
            <br><br>

            <input type="radio" name="tipo" id="Corrente" value="Corrente" checked>
            <label for="Corrente">Corrente</label><br>
            <input type="radio" name="tipo" id="Poupança" value="Poupança">
            <label for="Poupança">Poupança</label>
            <br><br>
            
            <label for="depo">Depósito inicial: </label>
            <input type="number" name="depo" id="depo" step="0.01">
            <br><br>

            <input type="submit" value="Criar">
        </form>
    </fieldset>
    <fieldset>
    <legend>Sua conta:</legend>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <input type="radio" name="tipo2" id="depositar" value="depositar" checked>
            <label for="depositar">Depositar</label><br>
            <input type="radio" name="tipo2" id="sacar" value="sacar">
            <label for="sacar">Sacar</label><br>
            <input type="radio" name="tipo2" id="pagar" value="pagar">
            <label for="pagar">Pagar</label><br>
            <input type="radio" name="tipo2" id="fechar" value="fechar">
            <label for="fechar">Fechar Conta</label><br>
            <label for="valor">Valor </label>
            <input type="number" name="valor" id="valor" step="0.01">
            
            <br><br>
            <input type="submit" value="Confirmar">
        </form>
    </fieldset>
    <pre>
    <?php
        $num = 1;
        $nome = $_GET["nome"] ?? "Sem Nome";
        $tipo = $_GET["tipo"] ?? "Corrente";
        $depo = $_GET["depo"] ?? 0;
        var_dump($num, $nome, $tipo, $depo);

        require_once 'Conta.php';
        $c1 = new Conta($num, $nome, $tipo, $depo);
        // var_dump($c1);
        echo "Conta criado com sucesso!<br><br>
Número da conta: ". $c1 -> getNum() .".<br>
Nome: ". $c1 -> getNome() .".<br>
Tipo de conta: ". $c1 -> getTipo() .".<br>
Saldo: ". $c1 -> getSaldo() .".";
        // $c1 -> Status();


        $tipo2 = $_GET["tipo2"] ?? 0;
        $valor = $_GET["valor"] ?? 0;

        if ($tipo2 == 'depositar') {
            $c1->Depositar($valor);
        }
        if ($tipo2 == 'sacar') {
            $c1->Sacar($valor);
        }
        if ($tipo2 == 'pagar') {
            $c1->Pagar();
        }
        if ($tipo2 == 'fechar') {
            $c1->FecharConta();
        }
    ?>
    </pre>
</body>
</html>