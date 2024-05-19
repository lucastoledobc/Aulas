<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
            <input type="text" name="nume1" id="nume1" require>
            <label for="nume2">Quer saber sua idade em que ano? </label>
            <input type="text" name="nume2" id="nume2" require>
            <input type="submit" value="Calcular">
        </form>
    </section>
    <section>
    <?php
            $x1 = (int) $_GET["nume1"] ?? '0';
            $x2 = (int) $_GET["nume2"] ?? '0';
            $x5 = $x2-$x1;

            if ($x1==0) {
                echo 'Digite os valores';
            }
            elseif ($x1 >$x2) {
                echo "Não existe idade negativa mané";
            }
            else {
                echo "<h2>Resultado Final:</h2>";
                echo "Quem nasceu em $x1, terá $x5 anos em $x2.";
            }
            
        ?>
    </section>

    </main>
</body>
</html>