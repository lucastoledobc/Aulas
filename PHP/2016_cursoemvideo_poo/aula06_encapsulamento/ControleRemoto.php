<?php 
require_once 'Controlador.php';
class ControleRemoto {
    private $volume, $ligado, $tocando;
    function __construct() {
        $this->ligado = false;
        $this->tocando = false;
        $this->volume = 50;
    }
    
    function getLigado() {return $this->ligado;}
    function setLigado($ligado) {$this->ligado = $ligado;}
    function getTocando() {return $this->tocando;}
    function setTocando($tocando) {$this->tocando = $tocando;}
    function getVolume() {return $this->volume;}
    function setVolume($volume) {$this->volume = $volume;}

    //Métodos
    public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
    }
    public function abrirMenu() {
        echo "<p>";
        echo "Menu:<br>";
        echo "<br>Ligado: " . ($this->getLigado() ? "Sim":"Não");
        echo "<br>Tocando: " . ($this->getTocando() ? "Sim":"Não");
        echo "<br>Volume = ". $this->getVolume();
        echo "</p>";
    }
    public function fecharMenu() {
        echo " ";
    }
    public function maisVolume() {
        if ($this->getLigado() == true) {
            if ($this->getVolume() < 100) {
                $this->setVolume($this->getVolume() + 10);
            }
        }
    }
    public function menosVolume() {
        if ($this->getLigado() == true) {
            if ($this->getVolume() > 0) {
                $this->setVolume($this->getVolume() - 1);
            }
        }
    }
    public function ligarMudo() {
        if ($this->getLigado() == true) {
            if ($this->getVolume() > 0) {
                $this->setVolume(0);
            }
        }
    }
    public function play() {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }
    public function pause() {
        if ($this->getLigado() && ($this->getTocando())) {
            $this->setTocando(false);
        }
    }
}