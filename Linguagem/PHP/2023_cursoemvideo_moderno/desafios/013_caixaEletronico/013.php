<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <header>
        <h1>Caixa Eletrônico</h1>
    </header>
    <main>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nume1">Quanto deseja sacar? </label>
            <input type="number" name="nume1" id="nume1">
            <input type="submit" value="Calcular">
        </form>
    </section>
    <section>
    <?php
            $x1 = $_GET["nume1"] ?? '';
            if (strlen($x1) == 0) {
                echo "Digite um valor acima";
            } else {
            $x2 = (int) ($x1/100);
            $x3 = (int) ($x1%100/50);
            $x4 = (int) ($x1%100%50/10);
            $x5 = (int) ($x1%100%50%10/5);
            $x6 = (int) ($x1%100%50%10%5);
            echo "<h2>Saque de R$$x1 realizado com sucesso!</h2><br>
            O caixa vai te entregar as seguintes notas:<br>
            - $x2 x 100; <br>
            - $x3 x 50; <br>
            - $x4 x 10; <br>
            - $x5 x 5; <br>
            - $x6 x 1.";
            }
        ?>
    </section>

    </main>
</body>
</html>