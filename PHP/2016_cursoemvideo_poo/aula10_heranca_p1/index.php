<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança (Parte 1)</title>
</head>
<body>
    <p>Herança: permite criar uma nova classe baseada numa existente. A nova classe é filha da classe primária (mãe).</p>
    <pre>
        <?php 
        require_once 'Heranca.php';

        $p1 = new Pessoa('Pedro', 10, 'M');
        $p2 = new Aluno(true, 'Física');
        $p3 = new Professor('Informática', 2024);
        $p4 = new Funcionario('Limpeza', true);

        $p2->setIdade(20);
        $p3->setIdade(30);
        $p4->setIdade(40);

        $p2->fazerAniv();
        $p3->fazerAniv();
        $p4->fazerAniv();

        $p2->cancelMatri();
        $p3->receberAum(100);
        $p4->mudarTrabalho();
        $p4->mudarTrabalho();

        var_dump($p1,$p2,$p3,$p4);
        ?>
    </pre>
</body>
</html>