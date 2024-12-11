<?php 
require_once 'pessoa.php';

class Professor extends Pessoa {
    private $disciplina, $salario;

    function receberAum($x) {
        $this->salario = $this->getSalario()*($x/100+1);
        echo "O salário aumentou em $x%.<br><br>";
    }

    function __construct($disciplina, $salario)
    {
        $this->disciplina = $disciplina;
        $this->salario = $salario;
    }

    function getDisciplina() {return $this->disciplina;}
    function setDisciplina($disciplina) {$this->disciplina = $disciplina;}
    function getSalario() {return $this->salario;}
    function setSalario($salario) {$this->salario = $salario;}
}

class Funcionario extends Pessoa {
    private $setor, $trabalhando;

    function mudarTrabalho() {
        if ($this->getTrabalhando() == true) {
            $this->trabalhando = false;
            echo "O valor agora é " . $this->getTrabalhando() . ".<br><br>";
        } else {
            $this->trabalhando = true;
            echo "O valor agora é " . $this->getTrabalhando() . ".<br><br>";
        }
        
    }

    function __construct($setor, $trabalhando)
    {
        $this->setor = $setor;
        $this->trabalhando = $trabalhando;
    }

    function getSetor() {return $this->setor;}
    function setSetor($setor) {$this->setor = $setor;}
    function getTrabalhando() {return $this->trabalhando;}
    function setTrabalhando($trabalhando) {$this->trabalhando = $trabalhando;}
}