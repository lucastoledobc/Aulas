<?php 
require_once 'pessoa.php';

class Aluno extends Pessoa {
    private $matri, $curso;

    function pagarMensalidade() {
        echo "Mensalidade de $this->nome paga.<br><br>";
    } // pedir o nome diretamente funciona pq é protected.

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

class Bolsista extends Aluno {
    private $bolsa;

    function pagarMensalidade()
    {
        echo $this->getNome() . " é bolsista, então tem desconto.<br><br>";
    }

    function __construct($bolsa)
    {
        $this->bolsa = $bolsa;
    }

    function getBolsa() {return $this->bolsa;}
    function setBolsa($bolsa) {$this->bolsa = $bolsa;}
}