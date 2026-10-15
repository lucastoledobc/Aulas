import java.util.Locale;

public class Main {
    public static void main(String[] args) {
        Locale idioma = Locale.getDefault();
        System.out.print("Seu idioma é: ");
        System.out.println(idioma.getDisplayLanguage());
    }
}