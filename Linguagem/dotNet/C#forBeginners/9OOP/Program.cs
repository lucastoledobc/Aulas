using System;

var p1 = new Person("Lucas", "Chagas", new DateOnly(1995, 1, 1));
var p2 = new Person("Lucas2", "Chagas2", new DateOnly(1996, 1, 1));

p1.Pets.Add(new Cat("Lumi"));
p1.Pets.Add(new Dog("Akin"));

foreach (var i in p1.Pets)
{
    Console.WriteLine($"{p1.First} has {i}.");
}



// --||-- \\
namespace MySpace
{
    public class MyApp
    {
        public static void Main()
        {
            Console.WriteLine("oie");
        }
    }
}

public class Person(string firstname, string lastname, DateOnly birthday)
{
    public string First { get; } = firstname;
    public string Last { get; } = lastname;
    public DateOnly Birth { get; } = birthday;

    public List<Pet> Pets { get; } = new();
}


public abstract class Pet(string firstname)
{
    public string First { get; } = firstname;
    public abstract string MakeNoise();

    public override string ToString()
    {
        return $"{First} a {GetType().Name}, {MakeNoise()}";
    }
}

public class Cat(string firstname) : Pet(firstname)
{
    public override string MakeNoise() => "miau";
}
public class Dog(string firstname) : Pet(firstname)
{
    public override string MakeNoise() => "auau";
}