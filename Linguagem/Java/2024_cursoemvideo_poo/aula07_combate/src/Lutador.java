public class Lutador {
    //Atributos
    private String nome, nacionalidade;
    private int idade;
    private float altura, peso;
    private String categoria;
    private int vit, der, emp;

    //Métodos Públicos
    public void apresentar() {
        System.out.println("O lutador 1: " + getNome());
        System.out.println("Com histórico de: " +getVit()+"/"+getEmp()+"/"+getDer());
    }

    public void status() {
        System.out.println(getNome()+", "+getNacionalidade()+", "+getPeso()+" kg, Peso("+getCategoria()+")");
    }

    public void ganhar() {
        this.setVit(this.vit +1);
    }

    public void perder() {
        this.setDer(this.der +1);
    }

    public void empatar() {
        this.setEmp(this.emp +1);
    }


    //Métodos Especiais

    public Lutador(String nome, String nacionalidade, int idade, float altura, float peso, int vit, int der, int emp) {
        this.nome = nome;
        this.nacionalidade = nacionalidade;
        this.idade = idade;
        this.altura = altura;
        this.setPeso(peso);
        this.vit = vit;
        this.der = der;
        this.emp = emp;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getNacionalidade() {
        return nacionalidade;
    }

    public void setNacionalidade(String nacionalidade) {
        this.nacionalidade = nacionalidade;
    }

    public int getIdade() {
        return idade;
    }

    public void setIdade(int idade) {
        this.idade = idade;
    }

    public float getAltura() {
        return altura;
    }

    public void setAltura(float altura) {
        this.altura = altura;
    }

    public float getPeso() {
        return peso;
    }

    public void setPeso(float peso) {
        this.peso = peso;
        this.setCategoria();
    }

    public String getCategoria() {
        return categoria;
    }

    public void setCategoria() {
        if (this.peso < 52.2) {
            this.categoria = "Inválido";
        } else if (this.peso <= 70.3) {
            this.categoria = "Leve";
        } else if (this.peso <= 83.9) {
            this.categoria = "Médio";
        } else if (this.peso <= 120.2) {
            this.categoria = "Pesado";
        } else {
            this.categoria = "Inválido";
        }
    }

    public int getVit() {
        return vit;
    }

    public void setVit(int vit) {
        this.vit = vit;
    }

    public int getDer() {
        return der;
    }

    public void setDer(int der) {
        this.der = der;
    }

    public int getEmp() {
        return emp;
    }

    public void setEmp(int emp) {
        this.emp = emp;
    }

    //Métodos


}
