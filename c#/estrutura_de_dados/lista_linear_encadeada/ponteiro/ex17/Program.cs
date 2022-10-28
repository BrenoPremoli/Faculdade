/* 
17) Faça uma implementação que construa uma lista encadeada. Seu programa deve ter as opções de inserção e remoção dos elementos. Após remover um elemento da lista, exiba-o na tela. */

void Insere(ref tp_no l, int v)
{
    tp_no no = new tp_no();
    no.valor = v;
    if (l != null)
        no.prox = l;
    l = no;
}

tp_no Remove(ref tp_no l)
{
    tp_no no = null;
    if (l != null)
    {
        no = l;
        l = l.prox;
        no.prox = null;
    }
    return no;
}


tp_no lista = null;

int n = 1;
int x;


Console.WriteLine("=======================================");
Console.WriteLine("                INÍCIO                 ");
Console.WriteLine("=======================================");

while (n != 0){ 
    if (lista == null)
    {
        Console.Write("Digite um número: ");
        n = int.Parse(Console.ReadLine());
        if (n != 0)
        {
            Insere(ref lista, n);
            Console.WriteLine("Número " + n + " inserido.\n");
        }
    }
    else
    {
        Console.WriteLine("MENU");
        Console.WriteLine("=======================================");
        Console.WriteLine("1. Adicionar um número ");
        Console.WriteLine("2. Remover ");
        Console.WriteLine("=======================================");
        Console.Write("Digite uma opção: ");
        x = int.Parse(Console.ReadLine());
        if (x == 1)
        {
            Console.Write("Digite um número: ");
            n = int.Parse(Console.ReadLine());
            if (n != 0)
            {
                Insere(ref lista, n);
                Console.WriteLine("Número " + n + " inserido.\n");
            }
        }
        else if (x == 2)
        {
            tp_no isolado;
            isolado = Remove(ref lista);
            Console.WriteLine("Número excluído: " + isolado.valor);
        }
    }
}

class tp_no
{
    public int valor;
    public tp_no prox;
}

