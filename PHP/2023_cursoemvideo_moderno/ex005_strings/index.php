<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>

<body>
    <h1>Manipulação de Strings</h1>
    <?php 
        $nome = "Pedro";
        echo 'O nome é $nome.<br>';
        echo "O nome é $nome.";
    ?>
    <br><!--  --><br>
    <?php 
        $nome = "Lucas";
        $sobrenome = "Toledo";
        $apelido = "Lumi";
        echo "$nome \"$apelido\" $sobrenome";
    ?>
    <br><!--  --><br>
    <?php 
        echo <<< heredoc
            Posso escrever em paragrafos
                até fechar com a mesma palavra.
                Ass.: $nome.
            heredoc;
    ?>
    <br><!--  --><br>
    <?php 
        echo <<< 'nowdoc'
            Agora não vai interpretar
                Ass.: $nome.
            nowdoc;
    ?>
</body>
</html>