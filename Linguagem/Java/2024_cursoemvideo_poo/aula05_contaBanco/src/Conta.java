public class Conta {

    //Atributos

    private int num;
    private String nome;
    private String tipo;
    private float saldo;
    private boolean status;

    public Conta(int num, String nome, String tipo, float saldo, boolean status) {
        this.nome = nome;
        this.num = num;
        this.tipo = tipo;
        if (tipo == "Corrente") {
            this.saldo = saldo + 50;
        } else {
            this.saldo = saldo + 100;
        }
        this.status = status;
    }

    //GETS & SETS

    public int getNum() {
        return num;
    }

    public void setNum(int num) {
        this.num = num;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String isTipo() {
        return tipo;
    }

    public void setTipo(String tipo) {
        this.tipo = tipo;
    }

    public float getSaldo() {
        return saldo;
    }

    public void setSaldo(float saldo) {
        this.saldo = saldo;
    }

    public boolean isStatus() {
        return status;
    }

    public void setStatus(boolean status) {
        this.status = status;
    }

    //MÉTODOS

    public void Depositar(int x) {
        saldo += x;
        System.out.println("Depósito feito. Seu saldo é: " + saldo);
    }

    public void Sacar(int x) {
        if (x <= saldo) {
            saldo -= x;
            System.out.println("Saque realizado com sucesso.");
            System.out.println("Seu saldo é: " + saldo);
        } else {
            System.out.println("Não há saldo suficiente.");
        }
    }

    public void PagMensal() {
        if (tipo=="Corrente") {
            saldo -= 50;
        } else {
            saldo -= 100;
        }
    }
    public void FecharConta() {
        if (saldo == 0) {
            this.status = false;
            System.out.println("Conta fechada com sucesso!");
        } else {
            System.out.println("A conta precisa estar vazia para ser desativada.");
        }
    }

}
