<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Resultado:</h1>
    </header>
    <main>
        <?php
            $x1 = $_GET["nume"];
            $x2 = (int) $x1;
            $x3 = $x1-$x2;
            echo "O número é: $x1.<br>
            A parte inteira do número é: $x2.<br>
            A parte decimal é: $x3.";
        ?>
        <p><a href="005.html">Voltar</a></p>
    </main>
</body>
</html>