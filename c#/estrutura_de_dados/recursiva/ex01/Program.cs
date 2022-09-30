/* 1) Faça um programa que apresente um menu inicial com as seguintes opções: 

MENU PRINCIPAL 

1 – Funções sem vetor 

2 – Funções com vetor 

Digite a opção desejada: _ 

Se o usuário escolher a opção 1, solicite um número inteiro inicial e um número inteiro final. Em seguida apresente um segundo menu com as seguintes opções: 

MENU SECUNDÁRIO 

1 - Inteiros em ordem crescente 

2 - Inteiros em ordem decrescente 

3 - Inteiros ímpares (crescente) 

4 - Somatório dos inteiros 

Faça uma função recursiva para cada opção desse segundo menu. 
Se o usuário escolher a opção 2 (do menu inicial), solicite vários números inteiros (armazene num vetor) e em seguida faça uma função recursiva que calcule o somatório dos números do vetor. */

void crescente(int nI, int nF)
{
    if (nI <= nF)
    {
        Console.WriteLine("Número " + nI);
        crescente(nI + 1, nF);
    }
}

void decrescente(int nI, int nF)
{
    if (nI <= nF)
    {
        Console.WriteLine("Número " + nF);
        decrescente(nI, nF - 1);
    }
}

void impares(int nI, int nF)
{
    if (nI <= nF)
    {
        if (nI % 2 != 0)
        {
            Console.WriteLine(nI);
        }
        impares(nI + 1, nF);
    }
}

int somatoria(int nI, int nF)
{
    if (nI < nF)
        return nI + somatoria(nI + 1, nF);
    else
        return nI;
}

int somaVetor(int[] vetor, int i)
{
    if (0 != i)
       return vetor[i-1] + somaVetor(vetor, i-1);
    else
        return 0;
}

string opc = "0", opc2;

while (opc != "3")
{
    Console.WriteLine("Menu 1");
    Console.WriteLine("1. Função sem vetor");
    Console.WriteLine("2. Função com vetor");
    Console.WriteLine("3. Sair");
    Console.Write("Digite a opção desejada: ");
    opc = Console.ReadLine();
    if (opc == "1")
    {
        int nI, nF;
        Console.Write("Número inicial: ");
        nI = int.Parse(Console.ReadLine());
        Console.Write("Número final: ");
        nF = int.Parse(Console.ReadLine());

        Console.WriteLine("Menu 2");
        Console.WriteLine("1. Crescente");
        Console.WriteLine("2. Descrescente");
        Console.WriteLine("3. Ímpares");
        Console.WriteLine("4. Somatória");
        opc2 = Console.ReadLine();
        if (opc2 == "1")
        {
            crescente(nI, nF);
        }

        else if (opc2 == "2")
        {
            decrescente(nI, nF);
        }

        else if (opc2 == "3")
        {
            impares(nI, nF);
        }

        else if (opc2 == "4")
        {
            int s = somatoria(nI, nF);
            Console.WriteLine("Soma = " + s);
        }
        Console.ReadKey();
        Console.WriteLine();
    }
    else if (opc == "2")
    {
        int[] vetor = new int[5];
        int i = 0, n = 1;
        while (n != 0)
        {
            Console.Write("Digite um número: ");
            n = int.Parse(Console.ReadLine());
            vetor[i] = n;
            i += 1;
        }
        int s = somaVetor(vetor, i);
        Console.WriteLine("Soma dos números digitados: "+s);
        Console.ReadKey();
        Console.WriteLine();
    }


}
