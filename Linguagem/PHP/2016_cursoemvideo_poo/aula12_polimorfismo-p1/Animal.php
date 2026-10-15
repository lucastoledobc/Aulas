<?php 

abstract class Animal {
    protected $peso, $idade, $membros;

    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();

    function getPeso() {return $this->peso;}
    function setPeso($peso) {$this->peso = $peso;}
    function getIdade() {return $this->idade;}
    function setIdade($idade) {$this->idade = $idade;}
    function getMembros() {return $this->membros;}
    function setMembros($membros) {$this->membros = $membros;}
}

class Mamiferos extends Animal {
    protected $corPelo;

    function locomover()
    {
        echo "<br>Correr<br>";
    }
    function alimentar()
    {
        echo "<br>Mamando<br>";
    }
    function emitirSom()
    {
        echo "<br>Cordas vocais<br>";
    }

    function __construct($peso = null, $idade = null, $membros = null, $corPelo = null)
    {
        $this->peso = $peso;
        $this->idade = $idade;
        $this->membros = $membros;
        $this->corPelo = $corPelo;
    }
    function getCorPelo() {return $this->corPelo;}
    function setCorPelo($corPelo) {$this->corPelo = $corPelo;}
}

class Repil extends Animal {
    function locomover()
    {
        echo "<br>Rastejar<br>";
    }
    function alimentar()
    {
        echo "<br>Animais menores<br>";
    }
    function emitirSom()
    {
        echo "<br>Sem som<br>";
    }
}

class Peixe extends Animal {
    function locomover()
    {
        echo "<br>Nadar<br>";
    }
    function alimentar()
    {
        echo "<br>Animais aquáticos<br>";
    }
    function emitirSom()
    {
        echo "<br>glub glub<br>";
    }
    function soltarBolhas() {
        echo "<br>blub blub<br>";
    }
}

class Ave extends Animal {
    private $corPena;
    function locomover()
    {
        echo "<br>Voa<br>";
    }
    function alimentar()
    {
        echo "<br>Grãos<br>";
    }
    function emitirSom()
    {
        echo "<br>piu piu<br>";
    }

    function getCorPena() {return $this->corPena;}
    function setCorPena($corPena) {$this->corPena = $corPena;}
}



class Canguru extends Mamiferos {
    function locomover()
    {
        echo "Saltar<br><br>";
    }
}

class Gato extends Mamiferos {
    function emitirSom()
    {
        echo "miau miau<br><br>";
    }
}

class Tartaruga extends Repil {
    function locomover()
    {
        echo "Bem devagar...<br><br>";
    }
}
