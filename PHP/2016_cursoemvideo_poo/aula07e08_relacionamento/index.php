<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relacionamento</title>
</head>
<body>
    <h1>Ultimate Emoji Combat</h1>
    <pre>
    <?php 
    require_once 'Lutador.php';
    require_once 'Luta.php';

        $l = array();
        $l[0] = new Lutador('Lucas','Brasil', 15, 1.60, 40, 5);
        $l[1] = new Lutador('Toledo','Itália', 21, 1.70, 60, 0, 5);
        $l[2] = new Lutador('Britto', 'Moçambique', 25, 1.71, 55);
        $l[3] = new Lutador('Chagas','Angola', 29, 1.80, 80, empates : 5);
        var_dump($l);
        $l[0]->setResultado('vit');
        $l[1]->setResultado('der');
        $l[2]->setResultado('emp');
        var_dump($l);

        $luta1 = new Luta($l[0],$l[0]);
        $luta2 = new Luta($l[0],$l[1]);
        $luta3 = new Luta($l[1],$l[2]);

        $luta1->marcarLuta();
        $luta2->marcarLuta();
        $luta3->marcarLuta();

        $luta1->lutar();
        $luta2->lutar();
        $luta3->lutar();

        var_dump($luta1, $luta2, $luta3);
    ?>
    </pre>
</body>
</html>