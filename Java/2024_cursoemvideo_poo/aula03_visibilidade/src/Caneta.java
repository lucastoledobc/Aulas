public class Caneta {
    public String modelo;
    public String cor;
    private float ponta;
    protected int carga;
    private boolean tampada;

    public void status() {
        System.out.println("O modelo é "+this.modelo);
        System.out.println("A cor é "+this.cor);
        System.out.println("A ponta é "+this.ponta);
        System.out.println("A carga está em "+this.carga);
        if (this.tampada == true) {
            System.out.println("Ela está tampada");
        } else {
            System.out.println("Ela está destampada.");
        }
    }

    public void rabiscar() {
        if (this.tampada == true) {
            System.out.println("Não dá. A caneta está tampada.");
        } else {
            System.out.println("Rabisco feito.");
        }
    }

    public void tampar() {
        this.tampada = true;
    }

    public void destampar (){
        this.tampada = false;
    }
}
