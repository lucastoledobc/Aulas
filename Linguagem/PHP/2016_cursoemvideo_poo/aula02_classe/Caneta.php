<?php 
class Caneta {
    var $cor;
    var $ponta;
    var $tampada;
    
    function rabiscar() {
        if ($this -> tampada == true) {
            echo "Não dá. Tá tampada.<br><br>";
        } else {
            echo "Rabisco feito.<br><br>";
        }
    }

    function tampar() {
        $this -> tampada = true;
    }

    function destampar() {
        $this -> tampada = false;
    }

    function tampa() {
        if ($this -> tampada == true) {
            $this -> tampada = false;
        } else {
            $this -> tampada = true;
        }
    }
}

?>