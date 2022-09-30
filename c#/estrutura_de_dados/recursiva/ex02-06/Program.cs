/*
2) Escreva uma função recursiva chamada potencia(x, y), que retorne a base x elevado ao expoente y.


3) Implemente uma versão recursiva da seguinte função iterativa. Faça a repetição recursiva somente do for, não precisa fazer da expressão i * i * i.
void cubos (int n)
{
for (int i = 1; i <= n; i++)
Controle.WriteLine(i * i * i);
}


4) Baseado no algoritmo de Euclides, implemente uma função recursiva para determinar o máximo divisor comum (mdc) entre dois números inteiros x e y.
	Algoritmo de Euclides:
	se (x = y) retorna x
	senão se (x < y) retorna mdc(y, x)
	senão retorna mdc(x - y, y)


5) A Série de Fibonacci pode ser definida da seguinte maneira:
	se (n == 0 ou n == 1) retorna n
	se (n >= 2) retorna fib(n – 1) + fib(n – 2)
 
Seja fib(n) uma função que retorna o n-ésimo termo da série de Fibonacci, implemente uma versão recursiva e outra iterativa. Observe que a partir de um determinado número, a função recursiva começa a ficar mais lenta que a iterativa.


6) Defina uma função recursiva que converte um número inteiro para a base binária.
*/

int potencia(int x, int y)
{
    if (y - 1 != 0)
        return x * potencia(x, y - 1);
    else
        return x;
}

int cubo1(int i)
{
    if (i == 1)
    {
        return 1;
    }
    else
    {
        return (i * i * i);
    }
}

void cubo2(int i)
{
    for (; i > 0; i--)
        Console.WriteLine(i*i*i);
}

int euclides(int x, int y)
{
    if (x == y)
        return x;
    else if (x < y)
        return euclides(y, x);
    else
        return euclides(x - y, y);

}

long fibonaci(long n)
{
    if (n == 0 || n == 1)
    {
        return n;
    }
    if (n >= 2)
    {
        return fibonaci(n - 1) + fibonaci(n - 2);
    }
    return 0;
}

int binario1(int n)
{
    if (n == 0)
    {
        return 0;
    }
    else
    {
        return n % 2 + 10 * binario1(n / 2);
    }
}

void binario2(int n)
{
    string binario = "";

    while (n > 0)
    {
        binario = Convert.ToString(n % 2) + binario;
        n = n / 2;
    }
    Console.WriteLine("Número binário: "+binario);
}

string opc = "0";

while (opc != "9")
{
    Console.WriteLine("Menu");
    Console.WriteLine("1. Potência");
    Console.WriteLine("2. Cubos com Return");
    Console.WriteLine("3. Cubos sem Return");
    Console.WriteLine("4. MDC");
    Console.WriteLine("5. Fibonacci - Recursivo");
    Console.WriteLine("6. Fibonacci - Iterativo");
    Console.WriteLine("7. Binário com Return");
    Console.WriteLine("8. Binário sem Return");
    Console.WriteLine("9. Sair");
    Console.Write("Digite a opção desejada: ");
    opc = Console.ReadLine();
    if (opc == "1")
    {
        Console.Write("Número da base (x): ");
        int x = int.Parse(Console.ReadLine());
        Console.Write("Número do expoente (y): ");
        int y = int.Parse(Console.ReadLine());
        int pot = potencia(x, y);
        Console.WriteLine(x + " elevado a " + y + " é igual a: " + pot);
    }

    else if (opc == "2")
    {
        Console.Write("Até que número que será elevado ao cubo: ");
        int n = int.Parse(Console.ReadLine());
        for (int i = 1; i <= n; i++)
        {
            int cub = cubo1(i);
            Console.WriteLine(i+"^3 = "+cub);
        }
    }

    else if (opc == "3")
    {
        Console.Write("Até que número que será elevado ao cubo: ");
        int n = int.Parse(Console.ReadLine());
        cubo2(n);
    }

    else if (opc == "4")
    {
        Console.Write("Número inteiro 1: ");
        int x = int.Parse(Console.ReadLine());
        Console.Write("Número inteiro 2: ");
        int y = int.Parse(Console.ReadLine());
        int mdc = euclides(y, x);
        Console.WriteLine("Máximo divisor comum de " + x + " e " + y + " é: " + mdc);
    }

    else if (opc == "5")
    {
        Console.Write("Digite a quantidade de termos:  ");
        long cont = long.Parse(Console.ReadLine());
        cont--;
        cont = fibonaci(cont);
        Console.WriteLine("Último termo na quantidade escolhida na sequência de Fibonacci: " + cont);
        // DEMORA DE 12 SEGUNDOS (A PARTIR DE DETERMINADO NÚMERO) EM COMPARAÇÃO A DA FUNÇÃO ITERATIVA
    }

    else if (opc == "6")
    {
        long n = 0;
        long m = 1;

        Console.Write("Digite a quantidade de termos:  ");
        int cont = int.Parse(Console.ReadLine());
        cont--;
        while (cont > 0)
        {
            long x = m + n;
            m = n;
            n = x;
            cont -= 1;
            if (cont == 0)
            {
                Console.WriteLine("Último termo na quantidade escolhida na sequência de Fibonacci: " + x);
            }
        }
    }

    else if (opc == "7")
    {
        Console.Write("Digite um número:  ");
        int n = int.Parse(Console.ReadLine());
        int b = binario1(n);
        Console.WriteLine(n + " para base binária: " + b);
    }

    else if (opc == "8")
    {
        Console.Write("Digite um número:  ");
        int n = int.Parse(Console.ReadLine());
        binario2(n);
    }
    
    Console.ReadKey();
    Console.WriteLine();
}