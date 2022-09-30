/* 
Escreva um programa que simule o controle de uma pista de decolagem de aviões em um aeroporto. Os aviões são identificados pelos números digitados pelo usuário. Neste programa, o usuário deve ser capaz de realizar as seguintes operações:
a) Adicionar vários aviões à fila de espera para decolagem
b) Consultar a quantidade de aviões aguardando na fila
c) Autorizar a decolagem de um avião da fila
d) Listar os números de todos os aviões na fila
e) Consultar o número do primeiro avião da fila
Construa um menu principal para oferecer essas operações ao usuário.
*/

const int MAX = 20;

void Insere(int[] q, ref int f, int v)
{
    q[f] = v;
    f = f + 1;
}

int Remove(int[] q, ref int i)
{
    int v = q[i];
    i = i + 1;
    return (v);
}

bool EstaVazia(int i, int f)
{
    if (i == f)
        return true;
    else
        return false;
}

bool EstaCheia(int f)
{
    if (f == MAX)
        return true;
    else
        return false;
}

int Contar(int i, int f)
{
    int cont = i - f;
    return cont;
}

void Listar(int[] q, int i, int f)
{
    Console.WriteLine("Números de todos os aviões na fila: ");
    for (;i < f; i++)
    {
        Console.WriteLine("Avião "+q[i]);
    } 
}

void Consultar(int[] q, int i)
{
    Console.WriteLine("Número do primeiro avião da fila: " + q[i]);
}

int opc = 1;
int[] fila = new int [MAX]; 
int inicio = 0, fim = 0;
int n = 1;

while (opc < 6 && opc > 0)
{   
    Console.WriteLine("\n1) Adicionar vários aviões à fila de espera para decolagem");
    Console.WriteLine("2) Consultar a quantidade de aviões aguardando na fila");
    Console.WriteLine("3) Autorizar a decolagem de um avião da fila");
    Console.WriteLine("4) Listar os números de todos os aviões na fila"); 
    Console.WriteLine("5) Consultar o número do primeiro avião da fila"); 
    Console.Write("\nDigite uma opção: "); 
    opc = Convert.ToInt32(Console.ReadLine());
    if (opc == 1)
    {
        while (n != 0) 
        {
            Console.Write("Digite o número do avião (0 para parar): "); 
            n = Convert.ToInt32(Console.ReadLine()); 
            if (EstaCheia(fim) == false)
            {
                if (n != 0)
                {
                    Insere(fila, ref fim, n);
                }
            }
            else
            {
                Console.WriteLine("Fila Cheia");
                n = 0;
            }
        }
    }

    else if (opc == 2)
    {
        Console.WriteLine("Total de aviões na vila: "+Contar(fim, inicio));
    }

    else if (opc == 3)
    {
        n = Remove(fila, ref inicio);
        Console.WriteLine("Avião liberado");
    }

    else if (opc == 4)
    {
        Listar(fila, inicio, fim);
    }

    else if (opc == 5)
    {
        Consultar(fila, inicio);
    }
}

