/* 
• Elaborar um programa em C# que calcule vários números fatoriais:
• O programa deve inicialmente perguntar ao usuário a quantidade de cálculos a serem
realizados;
• Para cada cálculo o programa deve perguntar ao usuário um número;
• Em seguida, o programa deve iniciar uma thread para cada cálculo, calculando os respectivos
fatoriais dos números informados;
• Cada thread deve ter um nome único e deve exibir seu nome junto com a iteração no cálculo do
fatorial, mostrando a iteração e o cálculo da iteração. Ao final do cálculo, exibir o resultado do
fatorial.
• Exemplo de uma thread calculando o fatorial de 5:
Thread 3 - Iniciou
Thread 3 - 5 (cálculo iteração: 5)
Thread 3 - 4 (cálculo iteração: 20)
Thread 3 - 3 (cálculo iteração: 60)
Thread 3 - 2 (cálculo iteração: 120)
Thread 3 - Resultado 120 
*/

int fatorial(int n, int cont)
{
    int f = 1;
    Console.WriteLine("Thread " + cont + " Iniciou");
    while (n > 0)
    {
        f = f * n;
        n = n - 1;
        if (n > 0)
        {
            Console.WriteLine("Thread " + cont + " - " + n + " (Iteração: " + f + ")");
            Thread.Sleep(1000);
        }
    }
    Console.WriteLine("Thread " + cont + " - Total: " + f);
    return f;
}

void NovaThread(int n, int cont)
{
    fatorial(n, cont);
}

Console.Write("Digite a quantidade de cálculos: ");
int totalFat = int.Parse(Console.ReadLine());
int[] vetorFat = new int[totalFat];
for (int ordem = 0; totalFat > 0; totalFat--)
{
    int contador = totalFat;
    contador--;
    Console.Write("Digite o número da fatorial: ");
    int nFat = int.Parse(Console.ReadLine());
    vetorFat[ordem] = nFat;
    ordem++;
    if (contador == 0)
    {
        for (int cont = 0; cont < vetorFat.Length;)
        {
            int x = vetorFat[cont];
            cont = cont + 1;
            Thread t = new Thread(() => NovaThread(x, cont));
            t.Start();
            Thread.Sleep(100);
        }
    }
}
