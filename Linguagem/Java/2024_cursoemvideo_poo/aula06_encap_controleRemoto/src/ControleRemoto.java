public class ControleRemoto implements Controlador {
    private int volume;
    private boolean ligado;
    private boolean tocando;

    public ControleRemoto() {
        this.volume = 50;
        this.ligado = false;
        this.tocando = false;
    }

    public int getVolume() {
        return volume;
    }

    public void setVolume(int volume) {
        this.volume = volume;
    }

    public boolean isLigado() {
        return ligado;
    }

    public void setLigado(boolean ligado) {
        this.ligado = ligado;
    }

    public boolean isTocando() {
        return tocando;
    }

    public void setTocando(boolean tocando) {
        this.tocando = tocando;
    }

    //Métodos Abstratos


    @Override
    public void ligar() {
        this.setLigado(true);
    }
    @Override
    public void desligar() {
        this.setLigado(false);
    }

    @Override
    public void play() {
        this.setTocando(true);
    }
    @Override
    public void pause() {
        this.setTocando(false);
    }

    @Override
    public void aumentarVolume() {
        this.setVolume(volume+1);
    }
    @Override
    public void diminuirVolume() {
        this.setVolume(volume-1);
    }

    @Override
    public void ligarMudo() {
        this.setVolume(0);
    }
    @Override
    public void desligarMudo() {
        this.setVolume(50);
    }

    @Override
    public void abrirMenu() {
        System.out.println("Ligado: " + isLigado());
        System.out.println("Volume: " + getVolume());
        System.out.println("Tocando: " + isTocando());
    }
    @Override
    public void fecharMenu() {
        System.out.println("Fechando Menu");
    }
}
