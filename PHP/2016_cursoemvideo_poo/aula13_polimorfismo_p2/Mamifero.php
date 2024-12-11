<?php 

abstract class Mamifero {
    protected $peso, $idade, $membros, $corPelo;

    abstract function emitirSom();

    function getPeso() {return $this->peso;}
    function setPeso($peso) {$this->peso = $peso;}
    function getIdade() {return $this->idade;}
    function setIdade($idade) {$this->idade = $idade;}
    function getMembros() {return $this->membros;}
    function setMembros($membros) {$this->membros = $membros;}
    function getCorPelo() {return $this->corPelo;}
    function setCorPelo($corPelo) {$this->corPelo = $corPelo;}
}

class Lobo extends Mamifero {
    function emitirSom()
    {
        echo "Aauuuuuuuuuuu!<br><br>";
    }
}

class Cachorro extends Lobo {
    function emitirSom()
    {
        echo "au au!<br><br>";
    }
    function reagir($x) {
        if (is_string($x)) {
            if ($x == "Comida") {
                echo "Latir e abanar o rabo.<br><br>";
            } else {
                echo "Rosnar!<br><br>";
            }
        }
        elseif (is_int($x)) {
            if ($x < 0) {
                echo "Cachorro não nasceu.<br><br>";
            }
            elseif ($x < 3) {
                echo "Cachorro novo.<br><br>";
            }
            elseif ($x < 10) {
                echo "Cachorro jovem.<br><br>";
            }
            elseif ($x < 15) {
                echo "Cachorro adulto.<br><br>";
            }
            elseif ($x < 20) {
                echo "Cachorro senhorzinho.<br><br>";
            }
            else {
                echo "Impossível.<br><br>";
            }
        }
        elseif (is_bool($x)) {
            if ($x == true) {
                echo "Reage bem ao dono.<br><br>";
            }
            else {
                echo "latir!<br><br>";
            }
        }
        else {
            echo "Erro. Tente diferente.<br><br>";
        }
    }
    function __construct($peso = null, $idade = null, $membros = null, $corPelo = null)
    {
        $this->peso = $peso;
        $this->idade = $idade;
        $this->membros = $membros;
        $this->corPelo = $corPelo;
    }
}
