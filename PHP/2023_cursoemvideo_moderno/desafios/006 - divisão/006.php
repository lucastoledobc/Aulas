<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="../../style.css">

    <?php
    $x1 = $_GET["nume"] ?? 0;
    $x2 = $_GET["divi"] ?? 1;
    $x3 = (int) ($x1/$x2);
    $x4 = $x1%$x2;            
    ?>
</head>

<body>
    <header>
        <h1>Anatomia de uma divisão</h1>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nume">Dividedo: </label>
            <input type="text" name="nume" id="nume">
            <label for="divi">Divisor: </label>
            <input type="text" name="divi" id="divi">
            <input type="submit" value="Analisar">
        </form>
    <table class="divisao">
            <tr>
                <td><?=$x1?></td>
                <td><?=$x2?></td>
            </tr>
            <tr>
                <td><?=$x4?></td>
                <td><?=$x3?></td>
            </tr>
        </table>
        
    </main>
</body>
</html>