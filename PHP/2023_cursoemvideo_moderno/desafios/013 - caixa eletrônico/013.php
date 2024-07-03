<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Caixa Eletrônico</h1>
    </header>
    <main>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nume1">Quanto deseja sacar? </label>
            <input type="text" name="nume1" id="nume1">
            <input type="submit" value="Calcular">
        </form>
    </section>
    <section>
    <?php
            $x1 = (int) $_GET["nume1"];
            $x2 = $x1/100;
            $x3 = (int) $x2;
            $x4 = $x1%100/50;
            $x5 = (int) $x4;
            $x6 = $x1%100%50/10;
            $x7 = (int) $x6;
            $x8 = $x1%100%50%10/5;
            $x9 = (int) $x8;
            $x10 = $x1%100%50%10%5;
            echo "<h2>Saque de R$$x1 realizado com sucesso!</h2><br>
            O caixa vai te entregar as seguintes notas:<br>
            - $x3 x 100; <br>
            - $x5 x 50 <br>
            - $x7 x 10 <br>
            - $x9 x 5 <br>
            - $x10 x 1.";
        ?>
    </section>

    </main>
</body>
</html>