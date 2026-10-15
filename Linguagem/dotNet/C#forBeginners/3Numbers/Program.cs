// int
int a = 18;
int b = 6;
int c = a + b;
Console.WriteLine(c);

// long
int a2 = 2100000000;
int b2 = 2100000000;

int c1 = a2 + b2;
Console.WriteLine(c1);

long c2 = a2 + b2;
Console.WriteLine(c2);

long c3 = (long)a2 + (long)b2;
Console.WriteLine(c3);

// checked Verifica um erro e para o programa
// int c4 = checked(a2 + b2);
// Console.WriteLine(c4);

// float double
float a3 = 42.1F;
float b3 = 38.2F;
double r1 = a3 + b3;
Console.WriteLine(r1);

// decimal
decimal a4 = 42.1m;
decimal b4 = 38.2m;
decimal r2 = a4 + b4;
Console.WriteLine(r2);