<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
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
            <p>Considerando salário mínimo R$ 1380,00</p>
            <input type="submit" value="Calcular">
        </form>
    </section>
    <section>
    <h2>Resultado Final:</h2>
    <?php
            $x1 = $_GET["nume"];
            $x2 = 1380;
            $x3 = $x1/$x2;
            $x4 = (int) $x3;
            $x5 = $x1%$x2;
            echo "Para quem ganha $x1, isso equvale à $x4 salários mínimos e sobra $x5 reais.";
        ?>
    </section>

    </main>
</body>
</html>