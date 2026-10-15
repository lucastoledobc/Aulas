<?php 
class Caneta1 
// troquei o nome da classe pq documentos anteriores tavam buscando a classe Caneta aqui.
{
    private $modelo;
    private $ponta;
    private $tampada;
    
    public function getModelo() {
        return $this -> modelo;
    }

    public function setModelo($m) {
        $this->modelo = $m;
    }

    public function getPonta() {
        return $this -> ponta;
    }

    public function setPonta($p) {
        $this->ponta = $p;
    }

    /**
     * Get the value of tampada
     */
    public function getTampada()
    {
        return $this -> tampada;
    }

    /**
     * Set the value of tampada
     *
     * @return  self
     */ 
    public function setTampada($tampada)
    {
        $this -> tampada = $tampada;

        return $this;
    }
}

class Caneta2 {
    private $modelo;
    private $ponta;
    private $tampada;
    
    //Contruct
    public function __construct($m,$p,$t)
    {
     $this -> modelo = $m;
     $this -> ponta = $p;   
     $this -> tampada = $t;
    }

    public function getModelo() {
        return $this -> modelo;
    }
    public function getPonta() {
        return $this -> ponta;
    }
    public function getTampada() {
        return $this -> tampada;
    }
}
?>