import java.awt.*;

public class Main {
    public static void main(String[] args) {
        Toolkit res = Toolkit.getDefaultToolkit();
        Dimension dim = res.getScreenSize();
        System.out.print("Sua resolução é: "+dim.width + " x " +dim.height+".");
    }
}