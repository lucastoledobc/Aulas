public class Main {
    public static void main(String[] args) {
        Lutador l[] = new Lutador[2];

        l[0] = new Lutador("Pretty Boy", "França", 31,1.75f,68.9f,11,9,7);
        l[1] = new Lutador("Pretty", "Frana", 3,1.7f,68f,11,9,7);
        l[0].apresentar();
        l[0].status();
        l[1].apresentar();
        l[1].status();
    }
}