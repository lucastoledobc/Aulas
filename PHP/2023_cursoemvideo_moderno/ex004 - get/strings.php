<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings de PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        print "PHP \u{1F418} <br>";
        print 'PHP \u{1F418} <br>';
    ?>
    <br>
    <?php 
        $nome = "Amanda";
        print "$nome <br>";
        print '$nome <br>';
    ?>
    <br>
    <?php 
        const NOME = "Lucas";
        echo "O nome é ".NOME.'.';
    ?>
    <br>
    <?php 
        $nome = "Rodrigo";
        $snom = "Nogueira";
        print "$nome " . '"Minotauro" ' . $snom;
        echo "<br>$nome \"Minotauro\" $snom";
    ?>
    <br>
    <br>
    <?php 
        $v = "Heredoc";
        echo <<< TESTE
        $v:    
            que doideira
        adwdwad
            $v
        TESTE;
    ?>
    <br>
    <?php 
        $v = "Nowdoc";
        echo <<< 'TESTE'
        Nowdoc:    
            que doideira
        adwdwad
            $v
        TESTE;
    ?>
</body>
</html>