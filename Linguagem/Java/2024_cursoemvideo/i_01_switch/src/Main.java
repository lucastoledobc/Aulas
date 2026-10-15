import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner t = new Scanner(System.in);
        System.out.print("Diga a quantidade de pernas: ");
        int pe = t.nextInt();
        System.out.print("Isso é: ");
        switch (pe) {
            case 1:
                System.out.println("sacy");
                break;
            case 2:
                System.out.println("bípede");
                break;
            case 3:
                System.out.println("tripé");
                break;
        }
    }
}