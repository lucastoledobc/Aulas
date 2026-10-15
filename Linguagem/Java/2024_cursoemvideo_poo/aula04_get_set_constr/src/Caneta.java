public class Caneta {
    private String modelo;
    private float ponta;
    private boolean tampada;

    //public Caneta(String m, float p, boolean t) {
    //    this.modelo = m;
    //    this.ponta = p;
    //    this.tampada = t;
    //}

    public Caneta(String modelo, float ponta, boolean tampada) {
        this.modelo = modelo;
        this.ponta = ponta;
        this.tampada = tampada;
    }

    //MÉTODOS ESPECIAIS
    public String getModelo() {
        return this.modelo;
    }
    public void setModelo(String m) {
        this.modelo = m;
    }
    public float getPonta() {
        return this.ponta;
    }
    public void setPonta(float p) {
        this.ponta = p;
    }

    public boolean isTampada() {
        return tampada;
    }

    public void setTampada(boolean tampada) {
        this.tampada = tampada;
    }

    public void status() {
        System.out.println("O modelo é "+modelo);
        System.out.println("A ponta é "+ponta);
        System.out.println("A caneta está tampada:"+tampada);
    }
}

