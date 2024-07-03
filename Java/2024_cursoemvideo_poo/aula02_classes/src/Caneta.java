public class Caneta {
    String modelo;
    String cor;
    float ponta;
    int carga;
    boolean tampada;
    void status() {
        System.out.println("A cor é "+this.cor);
        System.out.println("A ponta é "+this.ponta);
        if (this.tampada == true) {
            System.out.println("Ela está tampada");
        } else {
            System.out.println("Ela está destampada.");
        }

    }

    void rabiscar() {
        if (this.tampada == true) {
            System.out.println("Nã dá. A caneta está tampada.");
        } else {
            System.out.println("Rabisco feito.");
        }
    }

    void tampar() {
        this.tampada = true;
    }

    void destampar (){
        this.tampada = false;
    }
}
