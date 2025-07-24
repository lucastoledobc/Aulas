// See https://aka.ms/new-console-template for more information
var pwd = new Password().IncludeNumeric();
var password = pwd.Next();
Console.WriteLine(password.ToString());
