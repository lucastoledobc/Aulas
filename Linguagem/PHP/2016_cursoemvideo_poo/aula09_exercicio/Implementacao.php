<?php 

require_once 'Interface.php';

class Pessoa {
    private $nome, $idade, $sexo;

    //Métodos

    public function fazerAniver() {
        $this->idade ++;
    }

    //Construtor
    
    public function __construct($nome = "Indefinido", $idade = "Indefinido", $sexo = "Indefinido") {
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



class Livro implements Publicacao {
    private $titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor;

    //Interface
    public function abrir() {
        $this->aberto = true;
    }
    public function fechar() {
        $this->aberto = false;
    }
    public function folhear($x) {
        if (0 > $x || $x > $this->getTotPaginas()) {
            echo "<br>Página não encontrada.<br>";
        } 
        else {
            $this->setPagAtual($x);
        }
    }
    public function avançarPag() {
        if ($this->getPagAtual() == $this->getTotPaginas()) {
            echo "<br>Página final.<br>";
        } else {
        $this->pagAtual ++;
        }
    }
    public function voltarPag() {
        if ($this->getPagAtual() == 0) {
            echo "<br>Página inicial<br>";
        } else {
        $this->pagAtual --;
        }
    }

    //Métodos

    public function detalhes() {
        echo "<br>Detalhes do livro ". $this->getTitulo() ."<br><br>";
        echo "Título: ". $this->getTitulo() ."<br>";
        echo "Autor: ". $this->getAutor() ."<br>";
        echo "Total de páginas: ". $this->getTotPaginas() ."<br>";
        echo "Página atual: ". $this->getPagAtual() ."<br>";
        echo "Aberto: ". $this->getAberto() ."<br>";
        echo "Leitor: ". $this->getLeitor()->getNome() ."<br>";
    }

    //Construtor

    public function __construct($titulo, $autor, $totPaginas,  $leitor = null) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }
    function getTitulo() {return $this->titulo;}
    function setTitulo($titulo) {$this->titulo = $titulo;}
    function getAutor() {return $this->autor;}
    function setAutor($autor) {$this->autor = $autor;}
    function getTotPaginas() {return $this->totPaginas;}
    function setTotPaginas($totPaginas) {$this->totPaginas = $totPaginas;}
    function getPagAtual() {return $this->pagAtual;}
    function setPagAtual($pagAtual) {$this->pagAtual = $pagAtual;}
    function getAberto() {return $this->aberto;}
    function setAberto($aberto) {$this->aberto = $aberto;}
    function getLeitor() {return $this->leitor;}
    function setLeitor($leitor) {$this->leitor = $leitor;}
}