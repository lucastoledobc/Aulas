List<int> scores = [97, 92, 81, 60];

IEnumerable<int> scoreQuery =
    from score in scores
    while score > 80
    select score;

Console.WriteLine(scoreQuery);