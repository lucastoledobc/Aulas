import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        //Lógico
        boolean Nome = Boolean.TRUE;
        System.out.println(Nome);

        //Literais
        char Nome2 = ('è');
        System.out.println(Nome2);

        String Nome3 = "Oi oi oi";
        System.out.println(Nome3);

        //Inteiros
        byte Nome4 = 127;
        System.out.println(Nome4);

        short Nome5 = 32727;
        System.out.println(Nome5);

        Integer Nome6 = 2147483;
        System.out.println(Nome6);

        long Nome7 = 63L;
        System.out.println(Nome7);

        //Reais
        float Nome8 = 2.4F;
        System.out.format("%.2f \n", Nome8);

        double Nome9 = 1.9d;
        System.out.println(Nome9);

        Scanner recebe = new Scanner(System.in);
        System.out.println("Digite seu nome: ");
        String nome = recebe.next();
        float x = Float.parseFloat(recebe.next());
        System.out.printf("Seu nome é %s %.2f", nome, x);
    }

}