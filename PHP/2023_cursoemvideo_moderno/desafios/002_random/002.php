<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="../../style.css">
    <style>
        a {
            text-decoration: none;
            background-color: #45a049;
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
            $x1 = rand(0,100);
            echo "O número gerado foi <strong>$x1</strong>.";
        ?>
        <a href="002.php">Gerar outro número</a>
        <button onclick="javascript:document.location.reload()">Gerar outro número</button>
    </main>
</body>
</html>

<!-- 

- rand(min,max) -> Linear Congrential Generator (1951) [antigo e lento, depois virou um apontador para mt_rand()]
- mt_rand(min,max) -> Mersenne Twister (1997) 
- random_int(max,min) -> gera números aleatórios criptograficamente seguros, mas é o mais lento.

-->
