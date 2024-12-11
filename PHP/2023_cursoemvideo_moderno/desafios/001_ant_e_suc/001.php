<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <header>
        <h1>Resultado:</h1>
    </header>
    <main>
        <?php
            $x1 = $_GET["nume"];
            echo "Você digitou o número: $x1.<br>
            O seu antecessor é ". $x1-1 .".<br>
            O seu sucessor é ". $x1+1 .".";
        ?>
        <p><a href="001.html">Voltar</a></p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
