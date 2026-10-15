<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo (Parte 1)</title>
</head>
<body>
    <h1>Polimorfismo - parte 1: Sobreposição.</h1>
    <p>A classe filha herda e sobrepõe (modifica) uma das funções (muda a forma), mas mantém a assinatura do método.</p>
    <p>*Assinatura do Método(função): Seu nome, quantidade e tipos dos parâmetros (propriedades). Só assim ela pode ser sobreposta.</p>
    
    <pre>
        <?php 
        require_once 'Animal.php';

        echo "<br>";

        $m = new Mamiferos(60,40,4,'Marrom');
        var_dump($m);
        $m->locomover();
        $m->alimentar();
        $m->emitirSom();


        $r = new Repil;
        $r->setPeso(20);
        $r->setIdade(10);
        $r->setMembros(4);
        var_dump($r);
        $r->locomover();
        $r->alimentar();
        $r->emitirSom();


        $p = new Peixe;
        $p->setPeso(10);
        $p->setIdade(1);
        $p->setMembros(0);
        var_dump($p);
        $p->locomover();
        $p->alimentar();
        $p->emitirSom();

        $p->soltarBolhas();


        $a = new Ave;
        $a->setPeso(2);
        $a->setIdade(5);
        $a->setMembros(2);
        var_dump($a);
        $a->setCorPena('Branca');
        $a->locomover();
        $a->alimentar();
        $a->emitirSom();


        $gato = new Gato;
        $gato->locomover();
        $gato->emitirSom();
        
        $canguru = new Canguru;
        $canguru->locomover();

        $tartaruga = new Tartaruga;
        $tartaruga->locomover();
        ?>
    </pre>
</body>
</html>