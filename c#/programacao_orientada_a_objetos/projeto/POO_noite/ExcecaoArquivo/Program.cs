using System.IO;
int valor1 = 100, valor2 = 0, total = 0;
try //Bloco onde poderá ocorrer algum erro
{
    total = valor1 / valor2;
}
catch (Exception ex) //Classe responsável pelo tipo de erro
{
    Console.WriteLine("Não é possível divisão por zero " +
    ex.Message);

    Console.WriteLine( "Ocorreu uma exceção! \n" +
  "Pilha de execução: " + ex.StackTrace + 
  "\nInformações do Sistema: "+ ex.Source + 
  "\nMétodo: "+ex.TargetSite + "\n");

}
finally //Bloco que sempre será executado, 
//ocorrendo ou não erros no bloco try
{
    Console.WriteLine("Mesmo não ocorrendo uma exceção acima esta mensagem será exibida!");
}

/*
try
{
    // Isto causará uma exceção
    File.OpenRead("ArquivoLeitura.txt");
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
*/
Console.WriteLine("Termino do programa...");


