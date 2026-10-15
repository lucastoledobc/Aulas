<?php 

require_once 'Video.php';
require_once 'Espectador.php';

class Visualizacao {
    protected $espectador, $video;
    
    function avaliar($x) {
        if (is_int($x)) {
            echo 'int<br><br>';
        }
        elseif (is_bool($x)) {
            echo 'bool<br><br>';
        }
        else {
            echo 'erro<br><br>';
        }
    }

    function __construct($espectador = null, $video = null)
    {
        $this->espectador = $espectador;
        $this->video = $video;
        $espectador->setTotAs($espectador->getTotAs()+1);
        echo "O espectador ". $espectador->getNome() ." assistiu o vídeo ". $video->getTitulo() . ".<br><br>";
        $video->setViews($video->getViews()+1);
    }
}