<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
</head>
<body>
    <pre>
    <?php 
    require_once 'Implementacao.php';
    require_once 'Interface.php';
    
    $p1 = new Pessoa('Lucas', 23, 'M');
    $p2 = new Pessoa('Julia', 20, 'F');
    $p3 = new Pessoa();

    $l1 = new Livro('Livrinho', 'Mopa', 500, $p1);
    $l2 = new Livro('Título 2', '123', 5, $p2);
    $l3 = new Livro('Título 3', 'awda', 10);

    $p1->fazerAniver();

    var_dump($p1,$p2,$p3,$l1,$l2,$l3);

    $l1->abrir();
    $l1->fechar();

    $l1->detalhes();

    $l1->abrir();
    $l1->voltarPag();

    $l1->folhear(500);
    
    $l1->avançarPag();
    $l1->voltarPag();

    $l1->detalhes();
    ?>
    </pre>
</body>
</html>