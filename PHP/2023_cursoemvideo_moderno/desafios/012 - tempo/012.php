<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Calculadora de Tempo</h1>
    </header>
    <main>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nume1">Qual total de segundos? </label>
            <input type="text" name="nume1" id="nume1">
            <input type="submit" value="Calcular">
        </form>
    </section>
    <section>
        <h2>Resultado Final:</h2>
    <?php
            $x1 = (int) $_GET["nume1"];
            $x2 = $x1/604800;
            $x3 = (int) $x2;
            $x4 = $x1%604800/86400;
            $x5 = (int) $x4;
            $x6 = $x1%604800%86400/3600;
            $x7 = (int) $x6;
            $x8 = $x1%604800%86400%3600/60;
            $x9 = (int) $x8;
            $x10 = $x1%604800%86400%3600%60;
            echo "$x1 segudos equivalem a:<br>
            - $x3 semanas; <br>
            - $x5 dias <br>
            - $x7 horas <br>
            - $x9 minutos <br>
            - $x10 segundos.";
        ?>
    </section>

    </main>
</body>
</html>