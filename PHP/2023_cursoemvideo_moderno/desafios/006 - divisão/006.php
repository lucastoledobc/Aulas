<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Anatomia de uma divisão</h1>
    </header>
    <main>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nume">Dividedo: </label>
            <input type="text" name="nume" id="nume">
            <label for="divi">Divisor: </label>
            <input type="text" name="divi" id="divi">
            <input type="submit" value="Analisar">
        </form>
    </section>
        <?php
            $x1 = $_GET["nume"];
            $x2 = $_GET["divi"];
            $x3 = $x1/$x2;
            $x4 = (int) $x3;
            $x5 = $x1%$x2;
            echo "$x1  |  $x2 <br>....|____ <br>$x5    |  $x4";
        ?>
    </main>
</body>
</html>