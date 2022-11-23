/* 
Desenvolva um programa para inserir, pesquisar, remover e exibir os valores de uma árvore binária. Observe as opções a seguir:
a)	Inserir um valor digitado pelo usuário
b)	Pesquisar um valor digitado pelo usuário. Exiba uma mensagem informando se encontrou ou não
c)	Remover um valor digitado pelo usuário. Exiba a mensagem se removido com sucesso ou não encontrado
d)	Exibir todos os valores da árvore em ordem, pré ordem ou pós ordem
*/

tp_no raiz = null;

void Insere(ref tp_no r, int x)
{
    if (r == null)
    {
        r = new tp_no();
        r.valor = x;
    }
    else if (x < r.valor)
        Insere(ref r.esq, x);
    else
        Insere(ref r.dir, x);
}

tp_no Busca(tp_no r, int x)
{
    if (r == null)
        return null;
    else if (x == r.valor)
        return r;
    else if (x < r.valor)
        return Busca(r.esq, x);
    else
        return Busca(r.dir, x);
}

tp_no RetornaMaior(ref tp_no r)
{
    if (r.dir == null)
    {
        tp_no p = r;
        r = r.esq;
        return p;
    }
    else
        return RetornaMaior(ref r.dir);
}

tp_no Remove(ref tp_no r, int x)
{
    if (r == null)
        return null;
    else if (x == r.valor)
    {
        tp_no p = r;
        if (r.esq == null) // nao tem filho esquerdo
            r = r.dir;
        else if (r.dir == null) // nao tem filho direito
            r = r.esq;
        else  // tem ambos os filhos
        {
            p = RetornaMaior(ref r.esq);
            r.valor = p.valor;
        }
        return p;
    }
    else if (x < r.valor)
        return Remove(ref r.esq, x);
    else
        return Remove(ref r.dir, x);
}

void EmOrdem(tp_no r)
{
    if (r != null)
    {
        EmOrdem(r.esq);
        Console.WriteLine(r.valor);
        EmOrdem(r.dir);
    }
}

void PreOrdem(tp_no r)
{
    if (r != null)
    {
        Console.WriteLine(r.valor);
        PreOrdem(r.esq);
        PreOrdem(r.dir);
    }
}

void PosOrdem(tp_no r)
{
    if (r != null)
    {
        PosOrdem(r.esq);
        PosOrdem(r.dir);
        Console.WriteLine(r.valor);
    }
}

void Adicionar()
{
    Console.Write("Digite um valor: ");
    int v = int.Parse(Console.ReadLine());
    Insere(ref raiz, v);
    Console.WriteLine("CADASTRO CONCLUÍDO\n");
}

void Procurar()
{
    Console.Write("Pesquise um valor: ");
    int v = int.Parse(Console.ReadLine());
    if (Busca(raiz, v) == null)
    {
        Console.WriteLine("VALOR NÃO ENCONTRADO");
    }
    else
    {
        Console.WriteLine("VALOR ENCONTRADO");
    }
}

void Remover()
{
    Console.Write("Remova um valor: ");
    int v = int.Parse(Console.ReadLine());
    if (Busca(raiz, v) == null)
    {
        Console.WriteLine("VALOR NÃO ENCONTRADO");
    }
    else
    {
        Remove(ref raiz, v);
        Console.WriteLine("VALOR REMOVIDO");
    }
}

void Exibir()
{
    Console.WriteLine("MODO DE EXIBIÇÃO");
    Console.WriteLine("=======================================");
    Console.WriteLine("1. Exibir em ordem crescente (em ordem)");
    Console.WriteLine("2. Exibir na ordem em que foi digitada (pré ordem)");
    Console.WriteLine("3. Exibir na ordem oposta a que foi digitada (pós ordem)");
    Console.WriteLine("=======================================");
    Console.Write("Digite uma opção: ");
    int x = int.Parse(Console.ReadLine());
    if (x == 1)
    {
        EmOrdem(raiz);
    }
    else if (x == 2)
    {
        PreOrdem(raiz);
    }
    else if (x == 3)
    {
        PosOrdem(raiz);
    }
}

int x = 1;

while (x < 6)
{
    Console.WriteLine("\nMENU");
    Console.WriteLine("=======================================");
    Console.WriteLine("1. Adicionar");
    Console.WriteLine("2. Pesquisar ");
    Console.WriteLine("3. Remover ");
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
        Procurar();
    }
    else if (x == 3)
    {
        Remover();
    }
    else if (x == 4)
    {
        Exibir();
    }
    else if (x == 5)
    {
        Console.WriteLine("Saindo...");
        break;
    }
}

class tp_no
{
    public tp_no esq;
    public int valor;
    public tp_no dir;
}