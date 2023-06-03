// função Main() implícita

using ConstrutorConta;

Conta c1 = new Conta();
c1.Mostrar();

Conta c2 = new Conta(1);
c2.Mostrar();

Conta c3 = new Conta(13, "Bob", 100);
c3.Mostrar();

Console.WriteLine("Qtde de instâncias? "+Conta.Contador);
//Quantas instâncias foram realizadas? 3
//Implemente esta lógica

//ClasseEstat c = new ClasseEstat();
ClasseEstat.MostrarFrase(); //exemplo de chamada de método de uma classe estática
