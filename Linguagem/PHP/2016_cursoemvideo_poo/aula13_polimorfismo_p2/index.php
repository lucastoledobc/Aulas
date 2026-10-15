<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo (Parte 2)</title>
</head>
<body>
    <h1>Polimorfismo - parte 2: Sobrecarga.</h1>
    <p>Uma função que tem várias formas.</p>
    <P>*PHP não tem suporte a 'sobrecarga', então vamos fazer vários 'if'.</P>
    <p>** Ainda tem o polimorfismo de inlcusão e paramétrico, mas não são vistos nesse curso.</p>
    <pre>
        <?php 
        require_once "Mamifero.php";
        
        echo "<br>";

        $lobo = new Lobo;
        var_dump($lobo);
        $lobo->emitirSom();


        $cach = new Cachorro(60,40,4,'Marrom');
        var_dump($cach);
        $cach->emitirSom();

        $cach->reagir('Comida');
        $cach->reagir('hello');
        $cach->reagir(20);
        $cach->reagir(true);
        $cach->reagir(false);
        $cach->reagir(0.5);

        ?>
    </pre>
</body>
</html>