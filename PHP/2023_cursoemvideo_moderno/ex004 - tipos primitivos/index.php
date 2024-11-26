<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>

<body>
    <h1>Teste de tipos primitivos</h1>
    <p>Há 4 tipos de primitivos:</p>
    <?php 
        $v = "3000";
        var_dump($v);
    ?>
    <br>
    <?php 
        $v = 3000;
        var_dump($v);
    ?>
    <br>
    <?php 
        $v = 3e2;
        var_dump($v);
    ?>
    <br>
    <?php 
        $v = (integer) 3e2;
        var_dump($v);
    ?>
    <br><!--  --><br>

    <?php 
        $num = 0x1A;
        echo "$num";
        var_dump($num);
        
        $num2 = 0b1011;
        echo "<br>$num2";
        var_dump($num2);
    ?>
    <br><!--  --><br>

    <?php 
        $f = false;
        var_dump($f);
        print "f = $f";
    ?>
    <br>
    <?php 
        $v = true;
        var_dump($v);
        print "v = $v";
    ?>
    <br><!--  --><br>
    
    <?php 
        $v = [6, 2.5, "maria", true];
        var_dump($v);
        print $v;
    ?>
    <br><!--  --><br>

    <?php 
    class Pessoa {
        private string $nome;
    }
    
    $p = new Pessoa;
    var_dump($p);
    $p -> $nome = 'Eduardo';
    var_dump($p);
    ?>
</body>
</html>