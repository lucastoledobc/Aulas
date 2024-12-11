<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <h1>Qual sua idade?</h1>
    </header>
    <main>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nume1">Em que ano você nasceu? </label>
            <input type="text" name="nume1" id="nume1">
            <label for="nume2">Quer saber sua idade em que ano? </label>
            <input type="text" name="nume2" id="nume2">
            <input type="submit" value="Calcular">
        </form>
    </section>
    <?php
            $x1 = $_GET["nume1"] ?? '';
            if (strlen($x1) == 0) {
                echo "Digite os valores.";
            } else {
            $x2 = $_GET["nume2"] ?? 0;
            $x5 = $x2-$x1;

            if ($x1 == $x2) {
                echo 'Acabou de nascer. Digite um ano diferente.';
            }
            elseif ($x1 > $x2) {
                echo "Não existe idade negativa mané.";
            }
            else {
                echo "<h2>Resultado Final:</h2>";
                echo "Quem nasceu em $x1, terá $x5 anos em $x2.";
            }
            }
        ?>

    </main>
</body>
</html>