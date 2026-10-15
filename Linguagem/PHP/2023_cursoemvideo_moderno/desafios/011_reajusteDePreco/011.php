<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <header>
        <h1>Reajuste de Preço</h1>
    </header>
    <main>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nume1">Preço original </label>
            <input type="number" name="nume1" id="nume1" step="0.01">

            <label for="nume2">Reajuste <span id="nume3">50%</span></label>
            <input type="range" name="nume2" id="nume2" min='0' max='100'>

            <input type="submit" value="Calcular">
        </form>
    </section>
        <h2>Resultado Final:</h2>
    <?php
            $x1 = $_GET["nume1"] ?? '';
            if (strlen($x1) == 0) {
                echo "Digite um preço.";
            } else {
            $x2 = $_GET["nume2"];
            $x3 = ($x2/100 + 1) * $x1;
            echo "Um produto de " . number_format($x1,2,",",".") ." reais, custará R$" . number_format($x3,2,",",".") ." com reajuste de $x2%.";
            }
        ?>
    <script>
        let x1 = document.getElementById('nume2');
        let x2 = document.getElementById('nume3');
        x1.addEventListener("input", (event) => {
            x2.innerHTML = x1.value + '%';
        })
    </script>
    </main>
</body>
</html>