<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <header>
        <h1>Raiz Quadrada e Cúbica</h1>
    </header>
    <main>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nume">Número: </label>
            <input type="number" name="nume" id="nume" step="0.001">
            <input type="submit" value="Calcular">
        </form>
    </section>
    <section>
        <h2>Resultado Final:</h2>
    <?php
            $x1 = $_GET["nume"] ?? 0;
            $x1 = (float) $x1; /* se n colocar da erro, cmç string */
            $x2 = $x1**(1/2);
            $x3 = $x1**(1/3);
            echo "O número $x1 tem raíz quadrada $x2 e raíz cúbica $x3.";
        ?>
    </section>

    </main>
</body>
</html>