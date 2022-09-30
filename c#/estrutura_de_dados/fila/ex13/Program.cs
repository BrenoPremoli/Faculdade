/*
Escreva um programa que tenha uma fila cujo valores indicam prioridade, quanto maior o valor, 
maior a prioridade.
Seu programa deve inserir vários valores numa fila e solicitar um valor divisor. 
Em seguida, o programa deve dividir a fila inicial em duas novas filas, uma fila com valores menores que o divisor (menor prioridade) e outra fila com os valores maiores que o divisor (maior prioridade). Por fim, informe os valores das duas novas filas.
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

int[] fila = new int [MAX]; 
int inicio = 0, fim = 0; 
int[] filaMaior = new int [MAX]; 
int imaior = 0, fmaior = 0; 
int[] filaMenor = new int [MAX]; 
int imenor = 0, fmenor = 0; 
int v, vd; 
v = 1; 

while (v != 0) 
{ 
     Console.Write("Digite um valor: "); 
     v = Convert.ToInt32(Console.ReadLine()); 
     if (EstaCheia(fim) == false)
     {
        if (v != 0)
        {
        Insere(fila, ref fim, v);
        }
     }
     else
     {
        Console.WriteLine("Fila Cheia");
        v = 0;
     }
}
Console.Write("Digite o valor divisor: ");
vd = Convert.ToInt32(Console.ReadLine());
while(!EstaVazia(inicio, fim))
{
    v = Remove(fila, ref inicio);
    if (v >= vd)
    {
        Insere(filaMaior, ref fmaior, v);
    }
    else
    {
        Insere(filaMenor, ref fmenor, v);
    }
}
Console.WriteLine("Fila com números maiores que "+vd);
while(!EstaVazia(imaior, fmaior))
{
    Console.WriteLine(Remove(filaMaior, ref imaior));
}
Console.WriteLine("Fila com números menores que "+vd);
while(!EstaVazia(imenor, fmenor))
{
    Console.WriteLine(Remove(filaMenor, ref imenor));
}
