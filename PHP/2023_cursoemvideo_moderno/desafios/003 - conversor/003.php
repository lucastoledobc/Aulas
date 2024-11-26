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
            $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

            $x1 = $_GET["nume"];
            $x2 = $x1/5.04;
            echo "Você tem na sua carteira: US$". number_format($x2,2) .".<br>
            A cotação utilizada foi US$ 1 = R$ 5,04.<br>";

            echo "Seus " . numfmt_format_currency($padrao, $x1, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $x2, "USD") . ".";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>