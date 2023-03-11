// função Main() implícita

using ConstrutorConta;

Conta c1 = new Conta();
c1.Mostrar();

Conta c2 = new Conta(1);
c2.Mostrar();

Conta c3 = new Conta(2, "Bernardo", 95);
c3.Mostrar();

//Quantas instâncias foram realizadas? 3
//Implemente esta lógica
System.Console.WriteLine("\nQuantidade instâncias: {0}", Conta.Contador);

//ClasseEstatica c = new ClasseEstatica(); erro
ClasseEstatica.MostrarFrase(); //exemplo de chamada de método de uma classe estática