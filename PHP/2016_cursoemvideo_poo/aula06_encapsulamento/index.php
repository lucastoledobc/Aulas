<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulamento</title>
</head>
<body>
    <p>Encapsulamento: criar classe/agrupar funcionalidades para poder usar em outros lugares.</p>
    <p>
        - Facilidade de mudança: é possível trocar uma capsula inteira, ou seja, trocar parte do código inteiro sem precisar se preocupar.<br>
    </p>
    <p>
        *abstract: o método vai ser desenvolvido em outro lugar.
    </p>
    <h1>Controle Remoto</h1>
    <?php 
        require_once 'controleRemoto.php';
        $c1 = new ControleRemoto();
        $c1->abrirMenu();
        $c1->ligar();
        $c1->abrirMenu();

        $c1->desligar();
        $c1->abrirMenu();

        $c1->ligar();
        $c1->fecharMenu();
        $c1->abrirMenu();

        $c1->play();
        $c1->abrirMenu();

        $c1->maisVolume();
        $c1->abrirMenu();

        $c1->menosVolume();
        $c1->abrirMenu();

        $c1->ligarMudo();
        $c1->abrirMenu();

        $c1->pause();
        $c1->abrirMenu();

        $c1->play();
        $c1->abrirMenu();
        
        $c1->maisVolume();
        $c1->abrirMenu();
        $c1->maisVolume();
        $c1->abrirMenu();
        $c1->maisVolume();
        $c1->abrirMenu();
        $c1->maisVolume();
        $c1->abrirMenu();
        $c1->maisVolume();
        $c1->abrirMenu();
        $c1->maisVolume();
        $c1->abrirMenu();
        $c1->maisVolume();
        $c1->abrirMenu();
        $c1->maisVolume();
        $c1->abrirMenu();
        $c1->maisVolume();
        $c1->abrirMenu();
        $c1->menosVolume();
        $c1->abrirMenu();
        $c1->maisVolume();
        $c1->abrirMenu();
        $c1->maisVolume();
        $c1->abrirMenu();
    ?>
</body>
</html>