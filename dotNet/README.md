# .NET

dotnet é um sistema que engloba C#, F# e Visual Basic.

Documentação: https://learn.microsoft.com/en-us/dotnet/

## C#

### Hello World

Crie uma pasta no PC e abra ela no terminal e digite `dotnet new console`.
Será criado uma pasta com:

* obj: pasta com binários e json's;
* arquivo.sln: arquivo com detalhes;
* arquivo.csproj: xml com detalhes;
* Program.cs: o arquivo do código.

O código já começa como um:

`Console.WriteLine("Hello, World!");`

Então escreva seu código e digite `dotnet run`.

### Strings
string nome1 = "Lucas";
string frase = $"Meu nome é {nome1}.";

### Numbers
int n = 18; // 32 bits
long n = 1; // 64 bits

float n = 3.2f; // 16 bits
double n = 3.2; // 32 bits

decimal n = 3.5m; // 64 bits

### If / Else
```
if((a + b > 10) && (a == b))
{
    Console.WriteLine("A soma é maior que dez e os números são iguais");
}
```

### Loops
```
int i = 0;
while (i < 5)
{
    i++;
    Console.WriteLine(counter1);
}

for (int i = 0; i < 5; i++)
{
    Console.WriteLine($"i: {i}");
}
```

### List
```
List<int> numbers = [97, 92, 81, 60];

foreach (var n in numbers[1..3])
{
    Console.WriteLine(n);
}
```

### LINQ
```
IEnumerable<int> scoreQuery =
    from score in scores
    where score > 80
    orderby score ascending
    select score;

foreach (int i in scoreQuery)
{
    Console.WriteLine(i);
}
```