string nome1 = "  Lucas   ";
string nome2 = "Toledo";

Console.WriteLine($"Meu nome é {nome1} {nome2}.");


// Trim == Strip
Console.WriteLine($"Meu nome é {nome1.Trim()} {nome2}.");
nome1 = nome1.Trim();


// String == frase
string frase = $"Meu nome é {nome1} {nome2}.";
Console.WriteLine(frase);


// Replace
Console.WriteLine(frase.Replace("Toledo", "Chagas"));
Console.WriteLine(frase);

frase = frase.Replace("Toledo", "Chagas");
Console.WriteLine(frase);