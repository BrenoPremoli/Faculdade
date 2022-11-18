/* 
18) Faça um programa que utilize lista encadeada e que tenha as opções a seguir. O nó deve conter os atributos: nome, idade, whats e prox.
a)	Incluir conforme apresentado em aulas
b)	Para alterar, consulte pelo nome. Se encontrar, exiba os valores atuais e permita a alteração. Caso não encontre, exiba mensagem de não encontrado.
c)	Para excluir, procure pelo nome. Se encontrar, exiba os valores atuais e permita a exclusão. Caso não encontre, exiba mensagem de não encontrado.
d)	Na opção exibir, exiba todos os registros.
*/

tp_no lista = null;
int x = 1;

while(x < 6)
{
Console.WriteLine("\nMENU");
Console.WriteLine("=======================================");
Console.WriteLine("1. Adicionar");
Console.WriteLine("2. Alterar pelo nome ");
Console.WriteLine("3. Excluir pelo nome ");
Console.WriteLine("4. Exibir ");
Console.WriteLine("5. Sair ");
Console.WriteLine("=======================================");
Console.Write("Digite uma opção: ");
x = int.Parse(Console.ReadLine());
Console.Clear();
if (x == 1)
{
    Adicionar();
}
else if (x == 2)
{
    Alterar(lista);
}
else if (x == 3)
{
    Excluir(ref lista); 
}
else if (x == 4)
{
    Exibir(lista);
}
else if (x == 5)
{
    Console.WriteLine("Saindo...");
    break;
}
}

void Adicionar()
{
    Console.Write("Digite o nome: ");
    string nome = Console.ReadLine();
    Console.Write("Digite a idade: ");
    string idade = Console.ReadLine();
    Console.Write("Digite o WhatsApp: ");
    string wpp = Console.ReadLine();
    Insere(ref lista, nome, idade, wpp);
    Console.WriteLine("CADASTRO CONCLUÍDO\n");
}

void Consultar(tp_no l, string np, ref tp_no ant, ref tp_no atu)
{
    atu = l;
    ant = null;
    while (atu != null && np != atu.nome)
    {
        ant = atu;
        atu = atu.prox;
    }
}

void Alterar(tp_no l)
{
    string np;
    tp_no anterior = null;
    tp_no atual = null;
    Console.Write("Digite o nome: ");
    np = Console.ReadLine();
    Consultar(l, np, ref anterior, ref atual);
    Console.WriteLine("=======================================");
    if (atual != null)
    {
        Console.WriteLine("DADOS ATUAIS: ");
        Console.WriteLine("Nome: " + atual.nome);
        Console.WriteLine("Idade: " + atual.idade);
        Console.WriteLine("WhatsApp: " + atual.wpp);
        Console.WriteLine("=======================================");
        Console.WriteLine("Digite novos dados:");
        Console.Write("Nome: ");
        atual.nome = Console.ReadLine();
        Console.Write("Idade: ");
        atual.idade = Console.ReadLine();
        Console.Write("WhatsApp: ");
        atual.wpp = Console.ReadLine();
    }
    else
    {
        Console.WriteLine("Nome não encontrado");
    }
    Console.WriteLine("=======================================");
}

void Excluir(ref tp_no l)
{
    string np;
    tp_no anterior = null;
    tp_no atual = null;
    Console.Write("Digite o nome: ");
    np = Console.ReadLine();
    Consultar(l, np, ref anterior, ref atual);
    Console.WriteLine("=======================================");
    if (atual != null)
    {
        Console.WriteLine("DADOS ATUAIS: ");
        Console.WriteLine("Nome: " + atual.nome);
        Console.WriteLine("Idade: " + atual.idade);
        Console.WriteLine("WhatsApp: " + atual.wpp);
        Console.WriteLine("=======================================");
        if (atual == l) //  anterior == null -> Primeiro
        {
            l = l.prox;
            atual.prox = null;
        }
        else if (atual.prox == null) // Último
        {
            anterior.prox = null;
        }
        else  // Meio
        {
            anterior.prox = atual.prox;
            atual.prox = null;
        }
        Console.WriteLine("=======================================");
        Console.WriteLine("CADASTRO REMOVIDO");
    }
    else
    {
        Console.WriteLine("Nome não encontrado");
    }
    Console.WriteLine("=======================================");
}

void Exibir(tp_no l)
{
    Console.WriteLine("\nREGISTROS");
    Console.WriteLine("=======================================");
    tp_no aux = l;
    if (aux == null)
    {
        Console.WriteLine("Não há registros.");
    }
    else
    {
    while (aux != null)
        {
            Console.WriteLine("Nome: " + aux.nome);
            Console.WriteLine("Idade: " + aux.idade);
            Console.WriteLine("WhatsApp: " + aux.wpp);
            Console.WriteLine("=======================================");
            aux = aux.prox;
        }
    }
}

void Insere(ref tp_no l, string n, string i, string w)
{
    tp_no no = new tp_no();
    no.nome = n;
    no.idade = i;
    no.wpp = w;
    if (l != null)
        no.prox = l;
    l = no;
}

class tp_no
{
    public string nome;
    public string idade;
    public string wpp;
    public tp_no prox = null;
}