<?php 
class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    private $tampada;
    
    public function rabiscar() {
        if ($this -> tampada == true) {
            echo "Função rabiscar(): Não dá. Tá tampada.<br><br>";
        } else {
            echo "Função rabiscar(): Rabisco feito.<br><br>";
        }
    }

    public function tampar() {
        $this -> tampada = true;
        echo "Função tampar(): a caneta foi tampada.<br><br>";
    }

    public function destampar() {
        $this -> tampada = false;
        echo "Função destampar(): a caneta foi destampada.<br><br>";
    }
}

?>