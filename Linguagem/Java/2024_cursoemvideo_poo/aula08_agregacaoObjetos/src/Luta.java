import java.util.Objects;

public class Luta {
    private Lutador desafiado;
    private Lutador desafiante;
    private int rounds;
    private boolean aprovada;

    // Métodos Públicos
    public void marcarLuta(Lutador l1, Lutador l2) {
        if (l1 == l2) {
            this.aprovada = true;
            this.desafiado = l1;
            this.desafiante = l2;
        } else {
            System.out.println("A luta não pode acontecer.");
            if (!Objects.equals(l1, l2)) {
                System.out.println("Marcou o mesmo lutador 2 vezes.");
            } else {
                System.out.println("Os lutadores são de categorias diferentes");
                System.out.println("Lutador 1: " + l1.getNome() + "->Peso: " + l1.getCategoria());
                System.out.println("Lutador 1: " + l2.getNome() + "->Peso: " + l2.getCategoria());
            }
        }
    }

    public void luta() {

    }

    //Métodos Especiais
    public Luta(Lutador desafiado, Lutador desafiante, int rounds, boolean aprovada) {
        this.desafiado = desafiado;
        this.desafiante = desafiante;
        this.rounds = rounds;
        this.aprovada = aprovada;
    }

    public Lutador getDesafiado() {
        return desafiado;
    }

    public void setDesafiado(Lutador desafiado) {
        this.desafiado = desafiado;
    }

    public Lutador getDesafiante() {
        return desafiante;
    }

    public void setDesafiante(Lutador desafiante) {
        this.desafiante = desafiante;
    }

    public int getRounds() {
        return rounds;
    }

    public void setRounds(int rounds) {
        this.rounds = rounds;
    }

    public boolean isAprovada() {
        return aprovada;
    }

    public void setAprovada(boolean aprovada) {
        this.aprovada = aprovada;
    }
}
