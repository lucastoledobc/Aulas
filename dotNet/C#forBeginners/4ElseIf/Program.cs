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