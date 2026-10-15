<?php 
require_once 'Lutador.php';

class Luta {
    private $desafiante, $desafiado, $rounds, $aprovada;
    
    function marcarLuta() {
        if ($this->getDesafiante() == $this->getDesafiado()) {
            echo "Erro: lutador foi inscrito duas vezes.<br><br>";
        } else {
            if ($this->getDesafiante()->getCategoria() == $this->getDesafiado()->getCategoria()) {
                $this->setAprovada(true);
                echo "Luta marcada. Perparem-se!<br><br>";
            }
            else {
                echo "Erro: lutadores de categorias diferentes!<br><br>";
            }
        }
    }

    function lutar() {
        if ($this->getAprovada() == false) {
            echo "Essa luta não foi aprovada.<br><br>";
        } else {
            $y1 = random_int(1,7);
            $y2 = random_int(0,2);
            
            if ($y2 == 0) {
                $this->setRounds($y1);
                $this->getDesafiante()->setResultado('vit');
                $this->getDesafiado()->setResultado('der');
                echo "Vitória para o lutador ". $this->getDesafiante()->getNome() ."!<br>". $this->getDesafiado()->getNome() ." foi derrotado.<br>";
            }
            elseif ($y2 == 1) {
                $this->setRounds($y1);
                $this->getDesafiante()->setResultado('der');
                $this->getDesafiado()->setResultado('vit');
                echo "Vitória para o lutador ". $this->getDesafiado()->getNome() ."!<br>". $this->getDesafiante()->getNome() ." foi derrotado.<br>";
            }
            else {
                $this->setRounds($y1);
                $this->getDesafiante()->setResultado('emp');
                $this->getDesafiado()->setResultado('emp');
                echo "Os lutadores ". $this->getDesafiante()->getNome() ." e ". $this->getDesafiado()->getNome() . " terminaram empatados.<br>";
            }
        }
    }

    public function __construct($desafiante, $desafiado) {
        $this->desafiante = $desafiante;
        $this->desafiado = $desafiado;
        $this->aprovada = false;
    }
    function getDesafiante() {return $this->desafiante;}
    function setDesafiante($desafiante) {$this->desafiante = $desafiante;}
    function getDesafiado() {return $this->desafiado;}
    function setDesafiado($desafiado) {$this->desafiado = $desafiado;}
    function getrounds() {return $this->rounds;}
    function setrounds($rounds) {$this->rounds = $rounds;}
    function getAprovada() {return $this->aprovada;}
    function setAprovada($aprovada) {$this->aprovada = $aprovada;}
} 



