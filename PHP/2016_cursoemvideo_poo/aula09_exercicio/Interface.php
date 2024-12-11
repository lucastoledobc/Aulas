<?php 

require_once 'Implementacao.php';

interface Publicacao {
    public function abrir();
    public function fechar();
    public function folhear($x);
    public function avançarPag();
    public function voltarPag();
}