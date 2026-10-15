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


// Add Remove
nomes.Add("Chagas");
nomes.Remove("de");
foreach (var nome in nomes)
{
    Console.WriteLine($"Oi, {nome}!");
}


// Index
Console.WriteLine(nomes[^1]);
Console.WriteLine(nomes[^2]);
// Console.WriteLine(nomes[^5]);
foreach (var nome in nomes[1..3])
{
    Console.WriteLine($"Index, {nome}!");
}

// IndexOf
Console.WriteLine(nomes.IndexOf("Lucas"));

// Sort
nomes.Sort();
Console.WriteLine(nomes.IndexOf("Lucas"));