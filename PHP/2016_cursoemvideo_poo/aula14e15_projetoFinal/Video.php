<?php 
require_once 'InterfaceVideo.php';
class Video implements AcoesVideo {
    protected $titulo, $avaliacao, $views, $curtidas, $reproduzindo;

    function play() {
        $this->setRepro(true);
        echo "play<br><br>";
    }

    function pause()
    {
        $this->setRepro(false);
        echo "pause<br><br>";
    }

    function like() {
        // $x = $this->curtidas + 1;
        // $this->setCurtidas($x);
        $this->curtidas++;
        echo "Toma like!<br><br>";
    }

    function __construct($titulo = null, $avaliacao = null, $views = 0, $curtidas = 0,  $reproduzindo = false)
    {
        $this->titulo = $titulo;
        $this->avaliacao = $avaliacao;
        $this->views = $views;
        $this->curtidas = $curtidas;
        $this->reproduzindo = $reproduzindo;
    }
    function getTitulo() {return $this->titulo;}
    function setTitulo($titulo) {$this->titulo = $titulo;}
    function getAvaliacao() {return $this->avaliacao;}
    function setAvaliacao($avaliacao) {$this->avaliacao = $avaliacao;}
    function getViews() {return $this->views;}
    function setViews($views) {$this->views = $views;}
    function getCurtidas() {return $this->curtidas;}
    function setCurtidas($curtidas) {$this->curtidas = $curtidas;}
    function getRepro() {return $this->reproduzindo;}
    function setRepro($reproduzindo) {$this->reproduzindo = $reproduzindo;}
}