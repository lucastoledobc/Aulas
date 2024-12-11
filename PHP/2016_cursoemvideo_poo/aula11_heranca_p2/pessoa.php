<?php 
abstract class Pessoa {
    protected $nome, $idade, $sexo;

    function fazerAniv() {
        $this->idade++;
        echo "<br>Feliz aniversário, $this->nome! 😃<br><br>";
    }

    function getNome() {return $this->nome;}
    function setNome($nome) {$this->nome = $nome;}
    function getIdade() {return $this->idade;}
    function setIdade($idade) {$this->idade = $idade;}
    function getSexo() {return $this->sexo;}
    function setSexo($sexo) {$this->sexo = $sexo;}

}