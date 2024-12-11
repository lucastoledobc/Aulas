<?php 
class Lutador {
    private $nome, $nacionalidade, $idade, $altura, $peso, $categoria, $vitorias, $derrotas, $empates;

    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias = 0, $derrotas = 0, $empates = 0) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        // $this->peso = $this->setPeso($peso); [se fizer isso, ele pega só o valor do peso e coloca no peso, mas joga o valor da categoria fora.]
        $this->setPeso($peso);
        // $this->setCategoria($peso); [uma pessoa não deve poder mexer na categoria.]
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    function getNome() {return $this->nome;}
    function setNome($nome) {$this->nome = $nome;}
    function getNacionalidade() {return $this->nacionalidade;}
    function setNacionalidade($nacionalidade) {$this->nacionalidade = $nacionalidade;}
    function getIdade() {return $this->idade;}
    function setIdade($idade) {$this->idade = $idade;}
    function getAltura() {return $this->altura;}
    function setAltura($altura) {$this->altura = $altura;}
    function getPeso() {return $this->peso;}
    function setPeso($peso) {
        $this->peso = $peso; 
        $this->setCategoria($peso);
    }
    function getCategoria() {return $this->categoria;}
    private function setCategoria($peso1) {
        if ($peso1 < 50) {
            $this->categoria = "Leve";
        } 
        elseif ($this->getPeso() > 70) {
            $this->categoria = 'Pesado';
        } 
        else {
            $this->categoria = 'Médio';
        }
    }
    function getVitorias() {return $this->vitorias;}
    function getDerrotas() {return $this->derrotas;}
    function getEmpates() {return $this->empates;}
    function setResultado($resultado) {
        if ($resultado == 'vit') {
            $this->vitorias = $this->getVitorias() + 1;
        }
        elseif ($resultado == 'der') {
            $this->derrotas = $this->getDerrotas() + 1;
        }
        else {
            $this->empates = $this->getEmpates() + 1;
        }
    }
}