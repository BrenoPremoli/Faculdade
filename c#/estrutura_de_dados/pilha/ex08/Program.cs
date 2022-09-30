/*
Faça um programa que converta um número inteiro da base decimal para a base binária.
*/

const int MAX = 20;

void Insere(int[] p, ref int t, int v)
{
    p[t] = v;
    t = t + 1;
}

int Remove(int[] p, ref int t)
{
    t = t - 1;
    return (p[t]);
}

bool EstaVazia(int t)
{
    if (t == 0)
        return true;
    else
        return false;
}

bool EstaCheia(int t)
{
    if (t == MAX)
        return true;
    else
        return false;
}


int[] pilha = new int[MAX];
int topo = 0;
Console.Write("Digite um número inteiro: ");
int num = int.Parse(Console.ReadLine());

while(num != 0)
{
    Insere(pilha, ref topo, num % 2);
    num = num / 2;
}

int resto;
Console.Write("Número em binário: ");
while (EstaVazia(topo) == false) // while (!EstaVazia(topo)) -> ! = NEGAÇÃO
{
    resto = Remove(pilha, ref topo);
    Console.Write(resto);
}