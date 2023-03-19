// função Main() Implícita

using AgregacaoContaVetor;

Conta conta1 = new Conta();
conta1.Numero = 1;
conta1.Saldo = 1000;

Cliente cliente1 = new Cliente("Bia", 1234, 12);
Cliente cliente2 = new Cliente("Jica", 9876, 34);
Cliente cliente3 = new Cliente("Ped", 7654, 56);

conta1.VetTitular = new List<Cliente>(); // instância do objeto List<>

conta1.VetTitular.Add(cliente1);
conta1.VetTitular.Add(cliente2);
conta1.VetTitular.Add(cliente3);

conta1.MostrarConta();

foreach(Cliente c in conta1.VetTitular)
{
    c.MostrarCliente();
}



