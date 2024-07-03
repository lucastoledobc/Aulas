<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        a {
            display: block;
            margin: auto;
            text-align: center;
            text-decoration: none;
            background-color: #45a049;
            color: white;
            padding: 10px 00px;
            margin: 5px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        a:hover {
            background-color: green;
        }
    </style>
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        <p>Gerando um número aleatório entre 0 e 100...</p> 
        <?php
            $x1 = random_int(0,100);
            echo "O número gerado foi <strong>$x1</strong>.";
        ?>
        <a href="002.php">Gerar outro número</a>
        <button onclick="javascript:document.location.reload()">Gerar outro número</button>
    </main>
</body>
</html>