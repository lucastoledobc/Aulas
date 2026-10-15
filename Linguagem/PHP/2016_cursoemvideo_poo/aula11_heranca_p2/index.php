<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança (Parte 2)</title>
</head>
<body>
    <p>Herança: permite criar uma nova classe baseada numa existente. A nova classe é filha da classe primária (mãe).</p>
    <p>A família de classes é chamada de árvore hierárquica.</p>
    <p>
        => Heranca para implementação: herda e pode adicionar novos itens.
        <br>
        => Herança para diferença: herda e adapta funcionalidades.
    </p>
    <p>
        - Classe Abstrata: não pode ser instanciada.<br>
        - Método Abstrato: Declarado, mas não implementado na progenitora (interface). <br><br>
        - Classe Final: Não pode ter filhas. <br>
        - Método Final: não pode ser sobrescrito (modificado) pelas suas subclasses.
    </p>
    <pre>
        <?php 
        require_once 'visitante.php';
        require_once 'professor.php';
        require_once 'aluno.php';

        echo "<br>";

        // $p1 = new Pessoa(); classe abstrata

        $p1 = new Visitante();
        $p1->setNome('Pedro');
        $p1->setIdade(20);
        $p1->setSexo('M');

        $p1->fazerAniv();

        var_dump($p1);


        $p2 = new Aluno(true, 'Física');
        $p2->setNome('Lana');
        $p2->setIdade(10);
        $p2->setSexo('F');

        $p2->fazerAniv();
        $p2->pagarMensalidade();

        var_dump($p2);


        $p3 = new Bolsista(true);
        $p3->setNome('Arthur');
        $p3->setIdade(19);
        $p3->setSexo('M');
        $p3->setMatri(true);
        $p3->setCurso('Matemática');

        $p3->fazerAniv();
        $p3->pagarMensalidade();

        var_dump($p3);


        $p4 = new Professor('Informática', 2024);
        $p4->setNome('Profe');
        $p4->setIdade(29);
        $p4->setSexo('F');

        $p4->fazerAniv();
        $p4->receberAum(50);

        var_dump($p4);


        $p5 = new Funcionario('Limpeza', true);
        $p5->setNome('Roberto');
        $p5->setIdade(39);
        $p5->setSexo('M');

        $p5->mudarTrabalho();
        $p5->mudarTrabalho();

        var_dump($p5);
        ?>
    </pre>
</body>
</html>