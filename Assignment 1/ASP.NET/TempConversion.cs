using System;

class MainClass
{
    public static void Main(string[] args)
    {
        for (int fahr = 0; fahr <= 100; fahr++){
            Console.WriteLine(fahr + " F = " + (fahr - 32) * .55);
        }
    }
}
