/* 
Escreva um programa para conhecer uma frase e exibi-la com as PALAVRAS invertidas. 
Por exemplo, a frase “Jose da Silva” deve sair “esoJ ad avliS”.
*/

void Insere(char[] p, ref int t, char v)
{
    p[t] = v;
    t = t + 1;
}

char Remove(char[] p, ref int t)
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

Console.Write("Digite uma frase: ");
string frase = Console.ReadLine();

const int MAX = 50;
char[] pilha = new char[MAX];
int topo = 0;
int i = 0;
char c;

while (frase.Length > i)
{
    while (frase.Length > i && frase[i] != ' ')
    {
        Insere(pilha, ref topo, frase[i]);
        i++;
    }

    while (EstaVazia(topo) == false)
    {
        c = Remove(pilha, ref topo);
        Console.Write(c);
    }
    Console.Write(' ');
    i++;
}
