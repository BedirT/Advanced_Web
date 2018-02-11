using System;

namespace Investments
{
    class MainClass
    {
        public static void Main(string[] args)
        {
            int inv = 10000; // Investment money
            int year = 0;
            while (inv < 1000000){
                inv += inv * 15 / 100;
                year++;
            }
            Console.WriteLine(year);
        }
    }
}
