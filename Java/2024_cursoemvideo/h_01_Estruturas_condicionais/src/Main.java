import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner t = new Scanner(System.in);
        System.out.print("Qual sua idade? ");
        int idade = t.nextInt();
        if (idade > 17 && idade < 66) {
            System.out.println("Você é obrigado a Votar!");
        } else if (idade > 15){
            System.out.println("Você é pode votar se quiser!");
        } else if (idade > 0){
            System.out.println("Não é permitido votar.");
        } else {
            System.out.println("Isso  so  pode  ser uma  piada, by Mestre");
        }
    }
}