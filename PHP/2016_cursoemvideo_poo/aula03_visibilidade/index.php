<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibilidade</title>
</head>
<body>
    <p>
        Toda classe é um retângulo.<br>
        Objeto começa com letra maiúscula.<br>
        Atributos com letras minúsculas.<br>
        Métodos são letras minúsculas e parênteses.
    </p>
    <p>
        + público -> todas classes têm acesso. (padrão) <br>
        - privado -> somente a classe atual. <br>
        # protegido -> classes superiores da mesma família têm acesso.
    </p>
    <img src="midia.png" alt="" srcset="">
    <pre>
    <?php 
        require_once 'Caneta.php';

        $c1 = new Caneta;
        $c1 -> modelo = "Bic Crystal";
        $c1 -> cor = "Azul";
        // $c1->ponta = 0.5;
        // $c1->carga = 80;
        // $c1->tampada = true;
        
        print_r($c1);

        $c1 -> rabiscar();

        $c1 -> tampar();

        $c1 -> rabiscar();

        print_r($c1);
    ?>
    </pre>
</body>
</html>