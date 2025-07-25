var nomes = new List<string>
{
    "Lucas",
    "Toledo",
    "de",
    "Britto"
};

for (int i = 0; i < nomes.Count; i++)
{
    Console.WriteLine($"Olá, {nomes[i]}!");
}

nomes.Add("Chagas");
nomes.Remove("de");
foreach (var nome in nomes)
{
    Console.WriteLine($"Olá, {nome}!");
}

Console.WriteLine(nomes[^1]);
Console.WriteLine(nomes[^2]);
// Console.WriteLine(nomes[^5]);
Console.WriteLine(nomes[1..4]);


// IndexOf
Console.WriteLine(nomes.IndexOf("Lucas"));

// Sort
nomes.Sort();
Console.WriteLine(nomes.IndexOf("Lucas"));


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