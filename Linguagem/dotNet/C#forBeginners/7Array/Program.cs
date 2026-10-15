var array = new string[]
{
    "nome1",
    "nome2",
    "nome3",
};
foreach (var item in array)
{
    Console.WriteLine(item);
}

// array.Add("nome4"); Arrays têm tamanhos fixos.
array = [..array, "nome4"];

foreach (var item in array)
{
    Console.WriteLine(item);
}

// -Dica: use listas- //