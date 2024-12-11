<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <header>
        <h1>Calculadora de Tempo</h1>
    </header>
    <main>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nume1">Qual total de segundos? </label>
            <input type="number" name="nume1" id="nume1">
            <input type="submit" value="Calcular">
        </form>
    </section>
    <section>
        <h2>Resultado Final:</h2>
    <?php
            $x1 = $_GET["nume1"] ?? '';
            if (strlen($x1) == 0) {
                echo "Digite um valor acima";
            } else {
            $x2 = (int) ($x1/604800);
            $x3 = (int) ($x1%604800/86400);
            $x4 = (int) ($x1%604800%86400/3600);
            $x5 = (int) ($x1%604800%86400%3600/60);
            $x6 = (int) ($x1%604800%86400%3600%60);
            echo "$x1 segundos equivalem a:<br>
            - $x2 semanas; <br>
            - $x3 dias; <br>
            - $x4 horas; <br>
            - $x5 minutos; <br>
            - $x6 segundos.";
            }
        ?>
    </section>

    </main>
</body>
</html>