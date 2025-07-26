List<int> scores = [97, 92, 81, 60];

for (int i = 0; i < scores.Count; i++)
{
    if (scores[i] > 80)
    {
        Console.WriteLine(scores[i]);
    }
}

Console.WriteLine();

IEnumerable<int> scoreQuery =
    from score in scores
    where score > 80
    select score;

foreach (int i in scoreQuery)
{
    Console.WriteLine(i);
}

Console.WriteLine();

IEnumerable<int> scoreQuery2 =
    from score in scores
    where score > 80
    orderby score ascending
    select score;

foreach (int i in scoreQuery2)
{
    Console.WriteLine(i);
}

Console.WriteLine();

IEnumerable<string> scoreQuery3 =
    from score in scores
    where score > 80
    orderby score ascending
    select $"The score is {score}.";

foreach (string i in scoreQuery3)
{
    Console.WriteLine(i);
}