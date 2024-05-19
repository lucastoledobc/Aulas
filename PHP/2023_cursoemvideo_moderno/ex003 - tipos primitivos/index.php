<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        $num = 0x1A;
        echo "$num<br>";
        
        $num2 = 0b1011;
        echo $num2;
    ?>
    <br>
    <?php 
        $v = 300;
        var_dump($v)
    ?>
    <br>
    <?php 
        $v = 3e2;
        var_dump($v)
    ?>
    <br>
    <?php 
        $v = (integer) 3e2;
        var_dump($v)
    ?>
    <br>
    <br>
    <?php 
        $v = false;
        var_dump($v);
        print "$v";
    ?>
    <br>
    <?php 
        $v = true;
        var_dump($v);
        print "$v";
    ?>
        <br>
        <br>
    <?php 
        $v = [6, 2.5, "maria", true];
        var_dump($v);
        print "$v";
    ?>
</body>
</html>