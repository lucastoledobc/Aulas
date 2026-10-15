import java.util.Objects;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        int cond = 1;
        do {
            Scanner t = new Scanner(System.in);
            System.out.print("Qual sua idade? ");
            int idade = t.nextInt();
            if (idade < 1) {
                System.out.println("Isso  so  pode  ser uma  piada, by Mestre.");
                cond = 2;
            } else {
                if (idade > 17 && idade < 66) {
                    System.out.println("Você é obrigado a Votar!");
                } else if (idade > 15){
                    System.out.println("Você é pode votar se quiser!");
                } else if (idade > 0){
                    System.out.println("Não é permitido votar.");
                }
                System.out.print("Deseja continuar? ");
                Scanner res = new Scanner(System.in);
                String num = res.next();
                if (!Objects.equals(num, "s")) {
                    cond = 2;
                }
            }
        }while (cond==1);
    }
}