<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get, Set e Construct</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'Caneta.php';

        $c1 = new Caneta1;
        $c1 -> setModelo("Bic");
        $c1 -> setPonta(0.5);
        print_r($c1);

        echo "<br>O modelo é {$c1 -> getModelo()}
A ponta é {$c1 -> getPonta()}.<br><br>" ;

        $c2 = new Caneta2("FaberCastel", 1, true);
        print_r($c2);

        echo "<br>O modelo é {$c2 -> getModelo()}
A ponta é {$c2 -> getPonta()}.<br>";
    ?>
    </pre>
</body>
</html>