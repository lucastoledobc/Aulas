<?php 
class Pessoa {
    private $nome, $idade, $sexo;

    function fazerAniv() {
        $this->idade++;
        echo "<br>Feliz aniversário! 😃<br>";
    }

    function __construct($nome, $idade, $sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    function getNome() {return $this->nome;}
    function setNome($nome) {$this->nome = $nome;}
    function getIdade() {return $this->idade;}
    function setIdade($idade) {$this->idade = $idade;}
    function getSexo() {return $this->sexo;}
    function setSexo($sexo) {$this->sexo = $sexo;}

}

class Aluno extends Pessoa {
    private $matri, $curso;

    function cancelMatri() {
        $this->matri = false;
        echo "<br>Matrícula cancelada.<br>";
    }

    function __construct($matri, $curso)
    {
        $this->matri = $matri;
        $this->curso = $curso;
    }

    function getMatri() {return $this->matri;}
    function setMatri($matri) {$this->matri = $matri;}
    function getCurso() {return $this->curso;}
    function setCurso($curso) {$this->curso = $curso;}
}

class Professor extends Pessoa {
    private $disciplina, $salario;

    function receberAum($x) {
        $this->salario = $this->getSalario()*$x/100;
        echo "<br>O salário aumentou em $x%<br>";
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