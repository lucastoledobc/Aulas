<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe e Objeto</title>
</head>
<body>
    <p>
        => Objeto: tudo o que pode ser classificado. <br>
        => Classe: classificação.
    </p>
    <p>
        Uma classe tem:
    </p>
    <p>
        - Atributos: características (variáveis).<br>
        - Métodos: funções do objeto.<br>
        - Estado: público, privado ou protegido.
    </p>
    <p>
        Instanciar: Gerar um objeto a partir de uma classe. "Eu estou instanciando uma classe em forma de um objeto".
    </p>
    <p> *No PHP, um documento pode ter várias classes, diferente do Java.</p>
    <pre>
    <?php 
        require_once 'Caneta.php';

        $c1 = new Caneta;   /* isto é instanciar */
        $c1 -> cor = "Azul";
        $c1 -> ponta = 0.5;
        $c1 -> tampada = false;

        var_dump($c1);
        
        $c1->rabiscar();
        
        echo "<br>";
        
        $c2 = new Caneta;
        $c2 -> cor = "Vermelha";
        $c2 -> ponta = 1;
        $c2 -> tampada = true;

        var_dump($c2);

        $c2 -> rabiscar();

        $c2 -> destampar();
 
        var_dump($c2);

        $c2 -> rabiscar();

        print_r($c2);
    ?>
    </pre>
    <h1>Exercício</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <input type="radio" name="cor" id="azul" value="azul">
        <label for="azul">Azul</label>
        <input type="radio" name="cor" id="verm" value="verm">
        <label for="verm">Vermelha</label>
        <p></p>
        <input type="checkbox" name="tamp" id="tamp">
        <label for="tamp">Tampar?</label>
        <input type="submit" name="func" value="Rabiscar">
    </form>
    <pre>
    <?php 
    

    $x1 = $_GET['cor'] ?? False;
    $x2 = $_GET['tamp'] ?? False;
    
    // var_dump($x1);
    // var_dump($x2);

    if ($x2 == False) {
        if ($x1 == 'azul') {
            $c1 -> destampar();
            $c1 -> rabiscar();
        } elseif ($x1 == 'verm') {
            $c2 -> destampar();
            $c2 -> rabiscar();
        } else {
            echo " ";
        }

    } elseif ($x2 == 'on') {
        if ($x1 == 'azul') {
            $c1 -> tampar();
            $c1 -> rabiscar();
        } elseif ($x1 == 'verm') {
            $c2 -> tampar();
            $c2 -> rabiscar();
        }
    }
    
    // var_dump($c1);
    // var_dump($c2);

    ?>
    </pre>
</body>
</html>