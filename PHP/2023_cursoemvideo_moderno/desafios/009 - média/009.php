<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Médias</h1>
    </header>
    <main>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nume1">Número 1: </label>
            <input type="text" name="nume1" id="nume1">
            <label for="nume2">Peso: </label>
            <input type="text" name="nume2" id="nume2">
            <label for="nume3">Número 2: </label>
            <input type="text" name="nume3" id="nume3">
            <label for="nume4">Peso: </label>
            <input type="text" name="nume4" id="nume4">
            <input type="submit" value="Calcular">
        </form>
    </section>
    <section>
        <h2>Resultado Final:</h2>
    <?php
            $x1 = (int) $_GET["nume1"];
            $x2 = (int) $_GET["nume2"];
            $x3 = (int) $_GET["nume3"];
            $x4 = (int) $_GET["nume4"];
            $x5 = ($x1+$x3)/2;
            $x6 = ($x1*$x2+$x3*$x4)/($x2+$x4);
            echo "A média simples é: $x5. <br>A média ponderada é: $x6.";
        ?>
    </section>

    </main>
</body>
</html>