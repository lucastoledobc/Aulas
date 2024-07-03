<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Qual sua idade?</h1>
    </header>
    <main>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nume1">Preço original </label>
            <input type="text" name="nume1" id="nume1">
            <label for="nume2">Reajuste <output id="teste"></label>
            <input type="range" name="nume2" id="nume2" min='0' max='100'>
            <input type="submit" value="Calcular">
        </form>
    </section>
    <section>
        <h2>Resultado Final:</h2>
    <?php
            $x1 = (int) $_GET["nume1"];
            $x2 = (int) $_GET["nume2"];
            $x5 = ($x2/100+1)*$x1;
            echo "Um produto de $x1 reais, custará R$$x5 com reajuste de $x2%.";
        ?>
    </section>
    <script>
        let x1 = document.getElementById('nume2');
        let x2 = document.getElementById('teste');
        x1.addEventListener("input", (event) => {
            x2.innerHTML = x1.value + '%';
        })
    </script>
    </main>
</body>
</html>