using System;
using System.IO;

/*
try
{
// Isto causará uma exceção
File.OpenRead("\\teste\\ArquivoLeitura.txt");
}
catch (FileNotFoundException e)
{
Console.WriteLine();
Console.WriteLine("Erro pelo FileNotFoundException");
Console.WriteLine("-------------------------------------");
Console.WriteLine(e.ToString());
Console.WriteLine();
}
catch (DirectoryNotFoundException e)
{
Console.WriteLine();
Console.WriteLine("Erro pelo DirectoryNotFoundException");
Console.WriteLine("-------------------------------------");
Console.WriteLine(e.ToString());
Console.WriteLine();
}
catch (Exception e)
{
Console.WriteLine();
Console.WriteLine("Erro pelo Exception");
Console.WriteLine("-------------------------------------");
Console.WriteLine(e.ToString());
Console.WriteLine();
}

System.Console.WriteLine(" -------------------- TÉRMINO DO PROGRAMA --------------------");
*/

/* 
int valor = -1;

if ( valor < 0)
{
System.ArgumentException erro = new System.ArgumentException ();
throw erro ;
}
*/

int valor1 = 100, valor2 = 0, total = 0;
try //Bloco onde poderá ocorrer algum erro
{
    total = valor1 / valor2;
}
/*catch (Exception ex) //Classe responsável pelo tipo de erro
{
    System.Console.WriteLine("\nNão é possível divisão por 0 -> " + ex.Message);
}
*/
catch (Exception ex) //Classe responsável pelo tipo de erro
{
    Console.WriteLine( "\nOcorreu uma exceção! \n" + 
    "Tipo Erro: " + ex.Message + "\n" + 
    "Pilha de execução: " + ex.StackTrace + "\n" + 
    "Informações do Sistema: "+ex.Source + "\n" + 
    "Método: "+ex.TargetSite + "\n");
}
finally //Bloco que sempre será executado, ocorrendo ou não erros no bloco try
{
    Console.WriteLine("Mesmo não ocorrendo uma exceção acima esta mensagem será exibida!\n");
}