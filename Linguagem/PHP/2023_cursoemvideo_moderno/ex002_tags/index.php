<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando TAGs</title>
</head>

<body>
    <p>Tag completa:</p>
    <?php 
        $nome = "Lucas Toledo";
        echo "<p>Seu nome é $nome.</p>";
    ?>
    <br>

    <p>short tag:</p>
    <?=
        $nome = "Lucas Toledo";
        echo "<p>Seu nome é $nome.</p>";
    ?>

    <p><br></p>

    <?php
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia ", date("d/M/Y ");
        echo "e a hora atual é ",date("G:i:s (T).");
    ?>
    <p>
        Obs.: Em um documento só com php, é recomendado abrir a tag mas não fechar.
    </p>
    <p>
    <?php for ($i = 0; $i < 5; ++$i): ?>
    Hello, there!
    <?php endfor; ?>
    </p>
</body>
</html>