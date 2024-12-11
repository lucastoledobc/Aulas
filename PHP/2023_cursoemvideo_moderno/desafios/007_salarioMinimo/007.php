<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <header>
        <h1>Salários mínimos</h1>
    </header>
    <main>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nume">Salário: </label>
            <input type="number" name="nume" id="nume" step="0.01">
            <p>*Considerando salário mínimo R$ 1380,60.</p>
            <input type="submit" value="Calcular">
        </form>
    </section>
    <section>
    <h2>Resultado Final:</h2>
    <?php
            $x1 = $_GET["nume"] ?? 0;
            $x1 = (float) $x1; /* se n colocar da erro, cmç string */
            $x2 = 1380.60;
            $x3 = (int) ($x1/$x2);
            $x4 = $x1 - $x3 * $x2;
            echo "Para quem ganha R$". number_format($x1,2,",",".") .", isso equivale à $x3 salários mínimos e sobra R$". number_format($x4,2,",",".");
        ?>
    </section>

    </main>
</body>
</html>