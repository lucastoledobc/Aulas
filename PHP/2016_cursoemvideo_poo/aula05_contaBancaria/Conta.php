<?php
class Conta {
    public int $num;
    protected ?string $tipo;
    private ?string $nome; 
    private int $saldo;
    private bool $status;

//    public function Conta($num, $nome, $tipo, $saldo) (outdated)
    public function __construct($num1, $nome, $tipo, $saldo) {
        $this->num = $num1;
        $this->nome = $nome;
        $this->tipo = $tipo;
        if ($tipo == "Corrente") {
            $this->saldo = $saldo + 50;
        } else {
            $this->saldo = $saldo + 100;
        }
        $this->status = true;
    }

    public function getNum() {
        return $this->num;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function getStatus() {
        return $this->status;
    }
    public function Status() {
        echo $this->getSaldo();
    }


    //MÉTODOS
    
    public function Depositar($x) {
        $this->saldo = $this->saldo + $x;
        echo "Deposito de $x reais feito com sucesso. Seu saldo é $this->saldo.";
    }
    public function Sacar($x) {
        if ($x > $this->saldo) {
            echo "Saldo insuficiente. Seu saldo é $this->saldo.";
        } else {
            $this->saldo = $this->saldo - $x;
            echo "Saque de $x reais feito. Seu saldo é $this->saldo.";
        }
    }
    public function Pagar() {
        if ($this->saldo < 50) {
            echo "Saldo insuficiente. Seu saldo é $this->saldo.";
        } else {
            $this->saldo = $this->saldo - 50;
            echo "Mensalidade paga. Seu saldo é $this->saldo.";
        }
    }
    public function FecharConta() {
        if ($this->saldo != 0) {
            echo "Não é possível. A conta precisa estar zerada.";
        } else {
            $this->status = false;
            echo "Conta fechada com sucesso!";
        }
    }
}
?>


