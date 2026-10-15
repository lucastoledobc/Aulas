// See https://aka.ms/new-console-template for more information
Console.WriteLine("Qual seu nome?");
var nome = Console.ReadLine();
var currentDate = DateTime.Now;
Console.WriteLine($"Olá, {nome}. Hoje é dia {currentDate:d}.");
