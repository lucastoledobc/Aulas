public class Main {
    public static void main(String[] args) {
        int a = 100000000;

        long tempoInicial = System.currentTimeMillis();

        float sqrt = (float) Math.sqrt(a);
        System.out.format("Sqrt (Double padrão) = %.2f \n",sqrt);
        long tempo2 = System.currentTimeMillis() - tempoInicial;
        System.out.println("o metodo executou em " + tempo2);

        float pow = (float) Math.pow(a,0.5);
        System.out.format("Pow (Double padrão) = %.2f \n",pow);
        long tempo = System.currentTimeMillis() - tempoInicial;
        System.out.println("o metodo executou em " + tempo);


        int abs = Math.abs(-10);
        System.out.println(abs);
        int ceil = (int) Math.ceil(4.2);
        int floor = (int) Math.floor(4.2);
        int round = (int) Math.round(4.2);
        System.out.println(ceil);
        System.out.println(floor);
        System.out.println(round);

        double ale = Math.random();
        System.out.println(ale);
        int rou = (int) (ale*10+1); //o round auto é o floor, nunca vai ter 10
        System.out.println(rou);

        int n1 = 2, n2 = 5;
        double res = n2/n1;
        System.out.println(res);
        String x1 = "c";
        String x2 = "b";
        String x3 = x1 + x2;
        String x4 = "cb";
        System.out.println(x3 == x4);
        System.out.println(x3.equals(x4));
    }
}