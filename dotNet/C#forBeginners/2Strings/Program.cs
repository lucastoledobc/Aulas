// See https://aka.ms/new-console-template for more information

string nome1 = "  Lucas   ";
string nome2 = "Toledo";

Console.WriteLine($"Meu nome é {nome1} {nome2}.");

//

nome1 = nome1.Trim();

Console.WriteLine($"Meu nome é {nome1} {nome2}.");

//

string frase = $"Meu nome é {nome1.Trim()} {nome2}.";

Console.WriteLine(frase);

Console.WriteLine(frase.Replace("Toledo", "Chagas"));
Console.WriteLine(frase);

frase = frase.Replace("Toledo", "Chagas");
Console.WriteLine(frase);

int a = 18;
int b = 6;
int c = a + b;
Console.WriteLine(c);


int a = 2100000000;
int b = 2100000000;

int c = a + b;
Console.WriteLine(c);

long c = a + b;
Console.WriteLine(c);

long c = (long)a + (long)b;
Console.WriteLine(c);

int c = checked(a + b);
Console.WriteLine(c);


float a = 42.1F;
float b = 38.2F;
double c = a + b;
Console.WriteLine(c);

decimal a = 42.1D;
decimal b = 38.2D;
decimal c = a + b;
Console.WriteLine(c);

int a = 5;
int b = 6;
bool teste = a + b > 10;

if(teste)
{
    Console.WriteLine("A soma é maior que dez.");
}
else
{
    Console.WriteLine("A soma não é maior que dez.");
}


if ((a + b) > 10)
{
    Console.WriteLine("A soma é maior que dez.");
}
else if ((a + b) == 10)
{
    Console.WriteLine("A soma é igual que dez.");
}
else
{
    Console.WriteLine("A soma é menor que dez.");
}

if((a + b > 10) && (a == b))
{
    Console.WriteLine("A soma é maior que dez e os números são iguais");
}
else if((a + b > 10) || (a == b))
{
    Console.WriteLine("A soma é maior que dez ou são iguais");
}

int counter = 0;

while (counter < 5)
{
    counter++;
    Console.WriteLine(counter);
}

do
{
    counter++;
    Console.WriteLine(counter);
}
while (counter < 10);

for (int i = 0; i < 5; i++)
{
    Console.WriteLine(counter);
}

var names = new List<string>
{
    "Lucas",
    "Toledo",
    "de",
    "Britto"
};

for (int i = 0; i < names.Count; i++)
{
    Console.WriteLine($"Olá, {nome[i]}!");
}

names.Add("Chagas");
names.Remove("de");
foreach (var name in names)
{
    Console.WriteLine($"Olá, {nome}!");
}

Console.WriteLine(names[^1]);
Console.WriteLine(names[^2]);
Console.WriteLine(names[^5]);
Console.WriteLine(names[1..4]);

Console.WriteLine(names.IndexOf("Lucas"));
names.Sort()
Console.WriteLine(names.IndexOf("Lucas"));

// -Arrays- //
var array = new string []
{
    "nome1",
    "nome2",
    "nome3",
};
// array.Add("nome4"); Arrays têm tamanhos fixos.
array = [..array, "nome4"];
// -Dica: use listas- //


List<int> scores = [97, 92, 81, 60];

IEnumerable<int> scoreQuery =
    from score in scores
    while score > 80
    select score;

Console.WriteLine(scoreQuery);