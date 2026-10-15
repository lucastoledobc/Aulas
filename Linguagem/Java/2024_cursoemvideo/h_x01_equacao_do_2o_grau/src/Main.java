import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner t = new Scanner(System.in);
        System.out.println("Digite as condições:");
        System.out.print("a: ");
        float a = t.nextFloat();
        System.out.print("b: ");
        float b = t.nextFloat();
        System.out.print("c: ");
        float c = t.nextFloat();
        float delta = b*b-4*a*c;
        System.out.println("O delta vale: "+delta);
        if (delta < 0 ) {
            System.out.println("As raízes não são reais.");
        } else if (delta == 0) {
            float raizi = -b/(2*a);
            System.out.println("As duas raízes são igauis e valem: "+raizi);
        } else {
            double raizA = (-b+Math.sqrt(delta))/(2*a);
            double raizB = (-b-Math.sqrt(delta))/(2*a);
            System.out.println("As raízes são: "+raizA+" e " + raizB);
        }
    }
}