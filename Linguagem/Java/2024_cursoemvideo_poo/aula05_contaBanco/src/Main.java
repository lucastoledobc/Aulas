public class Main {
    public static void main(String[] args) {
        Conta c1 = new Conta (123, "Alberto","Corrente", 50, true);

        System.out.println(c1.getSaldo());

        c1.Sacar(50);

        Conta c2 = new Conta (456, "Jessica","Poupança", 100, true);

        System.out.println(c2.getSaldo());

        c2.Depositar(200);

        c1.FecharConta();
        c1.Sacar(50);
        c1.FecharConta();
    }
}