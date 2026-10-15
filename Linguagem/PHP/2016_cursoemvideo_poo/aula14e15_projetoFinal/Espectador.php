<?php 
require_once 'Video.php';
abstract class Pessoa {
    protected $nome, $idade, $sexo, $experiencia;

    protected function ganharExp() {
        $this->experiencia++;
        echo "Prim: xp ganha!<br><br>";
    }

    function __construct($nome = null, $idade = null, $sexo = null, $experiencia = 0)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = $experiencia;
    }

}

class Gafanhoto extends Pessoa {
    private $login, $totAssistido;

    function assistir($x) {
        $this->totAssistido++;
        echo "Video ". $x->getTitulo() ." assistido.<br><br>";
        $x->setViews($x->getViews()+1);
    }

    function __construct($nome = null, $idade = null, $sexo = null, $experiencia = 0, $login = false, $totAssistido = 0)
    {
        parent::__construct($nome, $idade, $sexo, $experiencia);
        $this->login = $login;
        $this->totAssistido = $totAssistido;
    }

    function getNome() {return $this->nome;}
    function setNome($nome) {$this->nome = $nome;}
    function getIdade() {return $this->idade;}
    function setIdade($idade) {$this->idade = $idade;}
    function getSexo() {return $this->sexo;}
    function setSexo($sexo) {$this->sexo = $sexo;}
    function getExpe() {return $this->experiencia;}
    function setExpe($experiencia) {$this->experiencia = $experiencia;}
    function getLogin() {return $this->login;}
    function setLogin($login) {$this->login = $login;}
    function getTotAs() {return $this->totAssistido;}
    function setTotAs($totAssistido) {$this->totAssistido = $totAssistido;}
}