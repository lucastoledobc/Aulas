<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Final</title>
</head>
<body>
    <h1>Site de Vídeo</h1>
    <pre>
        <?php 
        require_once "Video.php";
        require_once "InterfaceVideo.php";
        require_once "Espectador.php";
        require_once "Visualizacao.php";
        
        echo "<br>";

        $v1 = new Video('PHP');
        $v2 = new Video('Java');
        $v3 = new Video('POO');

        // var_dump($v1,$v2,$v3);

        $v1->like();
        $v2->play();
        $v3->pause();

        // var_dump($v1,$v2,$v3);
        
        echo "<br>----------------------<br>";

        $g1 = new Gafanhoto('Pedro',20);

        $g1->assistir($v1);
        $g1->assistir($v1);
        $g1->assistir($v2);
        $g1->assistir($v3);
        $g1->assistir($v3);
        $g1->assistir($v3);

        var_dump($v1,$v2,$v3,$g1);

        echo "<br>----------------------<br>";

        $vs1 = new Visualizacao($g1,$v1);
        // $vs1->avaliar();
        $vs1->avaliar(23);
        $vs1->avaliar(true);
        $vs1->avaliar('123');

        var_dump($v1,$v2,$v3,$g1);

        echo "Fim!"
        ?>
    </pre>
</body>
</html>