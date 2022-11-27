/* 
28) Implemente um programa com as seguintes opções: Sem tratamento de colisão, Tratamento de colisão Linear e Tratamento de colisão com Lista Encadeada.
	Dentro de cada opção deve haver as funcionalidades: Inserir, Alterar e Relatar.
	O vetor deve ser do tipo abstrato de dado composto por idade, nome e whats. Serão necessários 3 vetores, um para cada tipo de tratamento de colisão.
Para inserir um novo registro, solicite a idade, nome e whats. Utilize a idade como chave.
Para alterar solicite a idade (chave) para ser utilizada na busca. Caso encontrada, informe o nome e o whats da pessoa. Após a consulta, o usuário pode atualizar somente o nome e o whats.
Para relatar, percorra o vetor do inicio ao fim e exiba todos os registros.
*/
const int N = 5;

int Hash(int chave)
{
    return (chave % N);
}

void Insere(tp_no[] v, int i, string n, string w)
{
    int pos = Hash(i);
    v[pos] = new tp_no();
    v[pos].idade = i;
    v[pos].nome = n;
    v[pos].wpp = w;
}

void InserirSemTratamento(tp_no[] v)
{
    Console.Write("Digite a idade: ");
    int idade = int.Parse(Console.ReadLine());
    Console.Write("Digite o nome: ");
    string nome = (Console.ReadLine());
    Console.Write("Digite o WhatsApp: ");
    string wpp = (Console.ReadLine());
    Insere(v, idade, nome, wpp);
    Console.WriteLine("CADASTRO CONCLUÍDO\n");
}

int Busca(int i)
{
    int pos = Hash(i);
    return pos;
}

void AlterarSemTratamento(tp_no[] v)
{
    Console.Write("Digite a idade a ser encontrada: ");
    int idade = int.Parse(Console.ReadLine());
    int pos = Busca(idade);
    if (v[pos].idade == idade)
    {
        Console.WriteLine("DADOS ATUAIS: ");
        Console.WriteLine("\nNome: " + v[pos].nome);
        Console.WriteLine("Idade: " + v[pos].idade);
        Console.WriteLine("WhatsApp: " + v[pos].wpp);
        Console.WriteLine("\nDigite novos dados:");
        Console.Write("Nome: ");
        v[pos].nome = Console.ReadLine();
        Console.Write("WhatsApp: ");
        v[pos].wpp = Console.ReadLine();
        Console.Clear();
    }
    else
    {
        Console.WriteLine("Dados não encontrado(s)");
    }
}

void RelatarSemTratamento(tp_no[] v)
{
    int cont = 1;
    for (int pos = 0; pos < N; pos++)
    {
        if (v[pos] != null)
        {
            Console.WriteLine("\nCADASTRO " + cont);
            Console.WriteLine("\nNome: " + v[pos].nome);
            Console.WriteLine("Idade: " + v[pos].idade);
            Console.WriteLine("WhatsApp: " + v[pos].wpp);
            cont++;
        }
    }
}

void InsereLinear(tp_no[] v, int i, string n, string w)
{
    int pos = Hash(i);
    while (v[pos] != null)
    {
        pos++;
        pos = pos % N;
    }
    v[pos] = new tp_no();
    v[pos].idade = i;
    v[pos].nome = n;
    v[pos].wpp = w;
}

void InserirLinear(tp_no[] v)
{
    Console.Write("Digite a idade: ");
    int idade = int.Parse(Console.ReadLine());
    Console.Write("Digite o nome: ");
    string nome = (Console.ReadLine());
    Console.Write("Digite o WhatsApp: ");
    string wpp = (Console.ReadLine());
    InsereLinear(v, idade, nome, wpp);
    Console.WriteLine("CADASTRO CONCLUÍDO\n");
}

int BuscaLinear(tp_no[] v, int i)
{
    int pos = Hash(i);
    int qtd = 0;
    while ((v[pos] == null || v[pos].idade != i) && qtd < N)
    {
        pos++;
        pos = pos % N;
        qtd++;
    }
    if (qtd < N)
    {
        return pos;
    }
    else
    {
        return -1;
    }
}

void AlterarLinear(tp_no[] v)
{
    Console.Write("Digite a idade a ser encontrada: ");
    int idade = int.Parse(Console.ReadLine());
    int pos = BuscaLinear(v, idade);
    if (pos == -1)
    {
        Console.WriteLine("Dados não encontrado(s)");
    }
    else
    {
        Console.WriteLine("DADOS ATUAIS: ");
        Console.WriteLine("\nNome: " + v[pos].nome);
        Console.WriteLine("Idade: " + v[pos].idade);
        Console.WriteLine("WhatsApp: " + v[pos].wpp);
        Console.WriteLine("\nDigite novos dados:");
        Console.Write("Nome: ");
        v[pos].nome = Console.ReadLine();
        Console.Write("WhatsApp: ");
        v[pos].wpp = Console.ReadLine();
        Console.Clear();
    }
}

void RelatarLinear(tp_no[] v)
{
    int cont = 1;
    for (int pos = 0; pos < N; pos++)
    {
        if (v[pos] != null)
        {
            Console.WriteLine("\nCADASTRO " + cont);
            Console.WriteLine("\nNome: " + v[pos].nome);
            Console.WriteLine("Idade: " + v[pos].idade);
            Console.WriteLine("WhatsApp: " + v[pos].wpp);
            cont++;
        }
    }
}

void InsereEncadeado(tp_no[] v, int i, string n, string w)
{
    tp_no no = new tp_no();
    no.idade = i;
    no.nome = n;
    no.wpp = w;
    int pos = Hash(i);
    if (v[pos] != null)
        no.prox = v[pos];
    v[pos] = no;
}

void InserirEncadeado(tp_no[] v)
{
    Console.Write("Digite a idade: ");
    int idade = int.Parse(Console.ReadLine());
    Console.Write("Digite o nome: ");
    string nome = (Console.ReadLine());
    Console.Write("Digite o WhatsApp: ");
    string wpp = (Console.ReadLine());
    InsereEncadeado(v, idade, nome, wpp);
    Console.WriteLine("CADASTRO CONCLUÍDO\n");
}

void AlterarEncadeado(tp_no[] v)
{
    Console.Write("Digite a idade a ser encontrada: ");
    int idade = int.Parse(Console.ReadLine());
    int pos = Hash(idade);
    if (v[pos].idade != idade)
    {
        Console.WriteLine("Dados não encontrado(s)");
    }
    else
    {
        Console.WriteLine("DADOS ATUAIS: ");
        Console.WriteLine("\nNome: " + v[pos].nome);
        Console.WriteLine("Idade: " + v[pos].idade);
        Console.WriteLine("WhatsApp: " + v[pos].wpp);
        Console.WriteLine("\nDigite novos dados:");
        Console.Write("Nome: ");
        v[pos].nome = Console.ReadLine();
        Console.Write("WhatsApp: ");
        v[pos].wpp = Console.ReadLine();
        Console.Clear();
    }
}

void RelatarEncadeado(tp_no[] v)
{
    int cont = 1;
    for (int pos = 0; pos < N; pos++)
    {
        tp_no aux = v[pos];
        while (v[pos] != null)
        {
            if (v[pos] != null)
            {
                Console.WriteLine("\nCADASTRO " + cont);
                Console.WriteLine("\nNome: " + v[pos].nome);
                Console.WriteLine("Idade: " + v[pos].idade);
                Console.WriteLine("WhatsApp: " + v[pos].wpp);
                cont++;
                v[pos] = v[pos].prox;
            }
        }
        v[pos] = aux;
    }
}

tp_no[] vetor = new tp_no[N];
Console.WriteLine("Escolha o tipo de tratamento");
Console.WriteLine("=======================================");
Console.WriteLine("1. Sem tratamento de colisão");
Console.WriteLine("2. Tratamento de colisão Linear");
Console.WriteLine("3. Tratamento de colisão com Lista Encadeada");
Console.WriteLine("=======================================");
Console.Write("Digite uma opção: ");
int x = int.Parse(Console.ReadLine());
if (x == 1)
{
    int opc = 1;
    while (opc < 4)
    {
        Console.WriteLine("\nMENU");
        Console.WriteLine("=======================================");
        Console.WriteLine("1. Inserir");
        Console.WriteLine("2. Alterar ");
        Console.WriteLine("3. Relatar ");
        Console.WriteLine("4. Sair ");
        Console.WriteLine("=======================================");
        Console.Write("Digite uma opção: ");
        int op = int.Parse(Console.ReadLine());
        Console.Clear();
        if (op == 1)
        {
            InserirSemTratamento(vetor);
        }
        else if (op == 2)
        {
            AlterarSemTratamento(vetor);
        }
        else if (op == 3)
        {
            RelatarSemTratamento(vetor);
        }
        else if (op == 4)
        {
            Console.WriteLine("Saindo...");
            break;
        }
    }
}

else if (x == 2)
{
    int opc = 1;
    while (opc < 4)
    {
        Console.WriteLine("\nMENU");
        Console.WriteLine("=======================================");
        Console.WriteLine("1. Inserir");
        Console.WriteLine("2. Alterar ");
        Console.WriteLine("3. Relatar ");
        Console.WriteLine("4. Sair ");
        Console.WriteLine("=======================================");
        Console.Write("Digite uma opção: ");
        int op = int.Parse(Console.ReadLine());
        Console.Clear();
        if (op == 1)
        {
            InserirLinear(vetor);
        }
        else if (op == 2)
        {
            AlterarLinear(vetor);
        }
        else if (op == 3)
        {
            RelatarLinear(vetor);
        }
        else if (op == 4)
        {
            Console.WriteLine("Saindo...");
            break;
        }
    }
}

else if (x == 3)
{
    int opc = 1;
    while (opc < 4)
    {
        Console.WriteLine("\nMENU");
        Console.WriteLine("=======================================");
        Console.WriteLine("1. Inserir");
        Console.WriteLine("2. Alterar ");
        Console.WriteLine("3. Relatar ");
        Console.WriteLine("4. Sair ");
        Console.WriteLine("=======================================");
        Console.Write("Digite uma opção: ");
        int op = int.Parse(Console.ReadLine());
        Console.Clear();
        if (op == 1)
        {
            InserirEncadeado(vetor);
        }
        else if (op == 2)
        {
            AlterarEncadeado(vetor);
        }
        else if (op == 3)
        {
            RelatarEncadeado(vetor);
        }
        else if (op == 4)
        {
            Console.WriteLine("Saindo...");
            break;
        }
    }
}

class tp_no
{
    public int idade;
    public string nome;
    public string wpp;
    public tp_no prox;
}